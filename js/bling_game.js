var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("673C7BE2CF3C4F6898D6B7B12066C84A");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();	
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.bling();
	stage = new lib.Stage(canvas);	
	//Registers the "tick" event listener.

    const speed=10; //速度
    const attack=10; //攻擊
    let isStart=false; //遊戲是否開始
    let Hp=100; //血量
    let time;
    let endTime = Date.now()+10000;
    let winNum=0; //分數
    var bling =new lib.blinguser();
    let isKeydown=false; //判斷鍵盤按下  一開始沒有按下
    let positions=1; //一開始1
    bling.x=866;
    bling.y=752;
    exportRoot.addChild(bling);
    
    let timeGift = setInterval(()=>{   //每一秒自動生成禮物
        if(!isStart)return;  //如果沒有開始 停止以下動作
        let gift =new lib.gift(); 
        gift.x=Math.floor(Math.random()*(1750-40+1)+40); //Math.floor不要浮點數 亂數產生座標(最大值-最小值+1)+最小值
        gift.y=20;
        exportRoot.addChildAt(gift,1); //禮物丟到地板後面???

        createjs.Tween.get(gift) 
        .to({y:810}, 2500)
        //  碰撞
        .call(()=>{
            console.log("no_eat");
            exportRoot.removeChild(gift);
            Hp -=attack; //扣血量
            document.querySelector(".hp").style.width=`${Hp}%`; //沒吃到會扣血改變css寬度 ％
        })
        .addEventListener("change",()=>{
            let hit = ndgmr.checkRectCollision(gift,bling);
            if(hit){
                createjs.Tween.removeTweens(gift); //移除動畫
                exportRoot.removeChild(gift); //碰到後移除物件
                winNum ++; //然後分數加一
                document.querySelector(".winNum").innerHTML=winNum*5; //更新分數
            }
        })          
    },1000)

      //遊戲開始前按鈕
      document.querySelector(".gamePlayBtn").addEventListener("click",()=>{
        event.preventDefault();
        time  = Date.now();
        isStart=true; //遊戲開始
        document.querySelector(".gamePlayBtn").style.display="none"; //按下後消失
        window.addEventListener("keydown",keydownMoveFn);
        window.addEventListener("keyup",keyupMoveFn);
    })

    //遊戲重新開始 重新整理畫面
    // document.querySelector(".resetPlay").addEventListener("click",()=>{
    //     window.location.reload();
    // })

    //keyCode 右鍵t:37 左鍵:39
    function keydownMoveFn(e){
        if(isKeydown)return; //按住鍵盤時不會連跑 
            isKeydown=true;
        if(e.keyCode===37 || e.keyCode===39){  //按下左右鍵
                isKeydown=true;
                positions= e.keyCode === 39 ? 1 : -1; //判斷39(左鍵)時是1 不是的話是37(右鍵)
                bling.gotoAndPlay("run"); //按鍵盤時 跑步
        }       
    }
    function keyupMoveFn(e){
        isKeydown=false;
        bling.gotoAndPlay("stop"); //不按鍵盤時 人物狀態停止跑
    }

    createjs.Ticker.addEventListener("tick",tickFn)
    function tickFn(){
            if(Hp<=0){  //血量歸零時
                clearInterval(timeGift); //清除生成禮物
                bling.gotoAndPlay('del'); //血量歸零 人物狀態執行爆炸
                document.querySelector(".end_winNum").innerHTML=winNum*5; // 購物金
                document.querySelector(".over").style.display="flex"; //原本block 要顯示出來
                window.removeEventListener("keydown",keydownMoveFn) //結束監測鍵盤
                window.removeEventListener("keyup",keyupMoveFn)
                createjs.Ticker.removeEventListener("tick",tickFn); //遊戲結束時暫停tick        
            }
            if(!isKeydown) return;
                console.log("tick");
                bling.x+=speed*positions; //移動速度 按下左鍵累加負數時往返走
                bling.scaleX=positions; //左鍵 人物向左翻轉 
        }
        // setTimeout(tickFn, 3000);

	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.framerate = lib.properties.fps;
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	// AdobeAn.makeResponsive(false,'both',false,1,[canvas,anim_container,dom_overlay_container]);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
    
}