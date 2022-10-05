



// ------packageSection------------------
// $('.decorateBox').click(function(){
//     $('#p-paper').removeClass('decorateBoxClick')
//     $('#p-ribbon').removeClass('decorateBoxClick')
//     $('#p-box').addClass('decorateBoxClick')
//     $('.decoratePaper').css('background','#c2c2c2')
//     $('.decorateRibbon').css('background','#c2c2c2')
//     $(this).css('background','#2d827d')
    
// })
// $('.decoratePaper').click(function(){
//     $('#p-box').removeClass('decorateBoxClick')
//     $('#p-ribbon').removeClass('decorateBoxClick')
//     $('#p-paper').addClass('decorateBoxClick')
//     $('.decorateRibbon').css('background','#c2c2c2')
//     $('.decorateBox').css('background','#c2c2c2')
//     $(this).css('background','#2d827d')

// })

// $('.decorateRibbon').click(function(){
//     $('#p-box').removeClass('decorateBoxClick')
//     $('#p-paper').removeClass('decorateBoxClick')
//     $('#p-ribbon').addClass('decorateBoxClick')
//     $('.decorateBox').css('background','#c2c2c2')
//     $('.decoratePaper').css('background','#c2c2c2')
//     $(this).css('background','#2d827d')

// })

//------cardSection----------------------
// $('.cardStyleIcon').click(function(){
//     $('#c-text').removeClass('cardBoxClick')
//     $('#c-paper').addClass('cardBoxClick')
//     $('.cardText').css('background','#c2c2c2')
//     $(this).css('background','#2d827d')
// })

// $('.cardText').click(function(){
//     $('#c-paper').removeClass('cardBoxClick')
//     $('#c-text').addClass('cardBoxClick')
//     $('.cardStyleIcon').css('background','#c2c2c2')
//     $(this).css('background','#2d827d')
// })

//-----old換頁功能-------------------------
//----step1-----------
// $('#step1Btn-next').click(function(){
//     console.log('next:','next')
//     $('.cardSection').css('left', '0px')
//     $('.stepTop2').css('background','#2d827d')
//     $('.stepTop2').css('color','#ffffff')
// })

// $('#step1Btn-Skip').click(function(){
//     console.log('next:','next')
//     $('.cardSection').css('left', '0px')
//     $('.cardSection').css('background', '#2d827d')
// })

// //---step2--------------
// $('#step2Btn-next').click(function(){
//     console.log('next:','next')
//     $('.FinishSection').css('left', '0px')
//     $('.stepTop3').css('background','#ca3f68')
//     $('.stepTop3').css('color','#ffffff')
// })
// $('#step2Btn-Skip').click(function(){
//     console.log('next:','next')
//     $('.FinishSection').css('left', '0px')
//     $('.stepTop3').css('background','#ca3f68')
//     $('.stepTop3').css('color','#ffffff')
// })

// //---step3-------------
// $('#step3Btn-pre').click(function(){
//     $('.FinishSection').css('left', '-400px')
//     $('.cardSection').css('left', '0px')
//     $('.stepTop2').css('background','#2d827d')
//     $('.stepTop2').css('color','#ffffff')
//     $('.stepTop3').css('background','#ffffff')
//     $('.stepTop3').css('color','#000000')
// })


//------------newCardsection--------------
//文字即時顯示
var app = new Vue({
    el:'#app',
    data:{
        w_TextFrom:'',
        w_TextTo:'',
        w_TextContent:'',
    
    },
})

//封裝一個限制字數-------------
var checkStrLengths = function (str, maxLength) {
    var maxLength = maxLength;
    var result = 0;
    if (str && str.length > maxLength) {
        result = maxLength;
    } else {
        result = str.length;
    }
    return result;
}
//監聽輸入
$(".w-inputContent").on('input propertychange', function () {

    //獲取輸入內容
    var userDesc = $(this).val();

    //判斷字數
    var len;
    if (userDesc) {
        len = checkStrLengths(userDesc, 100);
    } else {
        len = 0
    }

    //顯示字數
    $(".w-cardWordLimit").html(len + '/100');
});

//卡片背景置換功能----------------
$(".w-CardStyle-1").click(function(){   
    
    $("#w-ShowcardWrap").attr("src","./images/card-01.png");
    $(".w-CardStyle-1-img").css('opacity','1');
    $(".w-CardStyle-2-img").css('opacity','.3');  
    $(".w-CardStyle-3-img").css('opacity','.3');  
});

$(".w-CardStyle-2").click(function(){                                
    $("#w-ShowcardWrap").attr("src","./images/card-style-02.png");
    $(".w-CardStyle-2-img").css('opacity','1'); 
    $(".w-CardStyle-1-img").css('opacity','.3'); 
    $(".w-CardStyle-3-img").css('opacity','.3');        
});

$(".w-CardStyle-3").click(function(){                                 
    $("#w-ShowcardWrap").attr("src","./images/card-style-03.png");
    $(".w-CardStyle-3-img").css('opacity','1');
    $(".w-CardStyle-1-img").css('opacity','.3');     
    $(".w-CardStyle-2-img").css('opacity','.3');     
});




//換頁功能--------
$('#w-step1BtnPackage-pre').click(function(){
    // console.log('hi2')
    $('.w-newpackageSection').css('display', 'none');
    $('#c').css('display', 'none');    
    $('.w-newCardSection').css('display', 'flex');
    $('.stepTop2').css('background','#2d827d')
    $('.stepTop2').css('color','#ffffff')
});
$('#w-step1BtnPackage-next').click(function(){
    $('.w-newpackageSection').css('display', 'none');
    $('#c').css('display', 'none');
    $('.w-newCardSection').css('display', 'flex');
    $('.w-newFinishSection').css('display', 'none');
    $('.stepTop2').css('background','#2d827d')
    $('.stepTop2').css('color','#ffffff')
})

$('#w-step2BtnCard-pre').click(function(){
    $('.w-newCardSection').css('display', 'none');
    $('.w-newpackageSection').css('display', 'none');
    $('#c').css('display', 'none');
    $('.w-newFinishSection').css('display', 'flex');
    $('.stepTop3').css('background','#ca3f68')
    $('.stepTop3').css('color','#ffffff')
})

$('#w-step2BtnCard-next').click(function(){
    $('.w-newCardSection').css('display', 'none');
    $('.w-newpackageSection').css('display', 'none');
    $('#c').css('display', 'none');
    $('.w-newFinishSection').css('display', 'flex');
    $('.stepTop3').css('background','#ca3f68')
    $('.stepTop3').css('color','#ffffff')
})

//----canvas-dataurl----------------------


const btnStepOneFinish = document.querySelector('#w-step1BtnPackage-next');
const imgPackage = document.querySelector('#imgPackageConverted');
const myCanvas = document.querySelector('#c');

btnStepOneFinish.addEventListener("click",function(){
    const dataURI= myCanvas.toDataURL();

    console.log(dataURI)
    $("#imgPackageConverted").attr("src",dataURI)
});


//-----拿取卡片樣式data--------

function bgImage(){
    var bgImage = document.getElementById('w-ShowcardWrap').src;
    // document.getElementById()
    // var to = document.getElementsByID('w-inputTo');
    // var toCard = to.value;
    var FinishCard =document.querySelector('.FinishCard').src;
    FinishCard = bgImage;
    $("#imgCardConverted").attr("src",FinishCard);
    console.log('bgImage', bgImage)
    console.log('FinishCard',FinishCard)
    
    var to = $('.w-inputTo').val();
    var from = $('.w-inputFrom').val();
    var content = $('.w-inputContent').val();
    

    $('#CardShowArea-To').text(to);
    $('#CardShowArea-From').text(from);
    $('#CardShowArea-Content').text(content);

}