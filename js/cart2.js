 //宅配地址縣市區 下拉選單
$("#zipcode2").twzipcode({
    countySel: "臺北市", // 城市預設值, 字串一定要用繁體的 "臺", 否則抓不到資料
    districtSel: "大安區", // 地區預設值
    zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
    css: ["j-city", "j-town"], // 自訂 "城市"、"地區" class 名稱
    countyName: "city", // 自訂城市 select 標籤的 name 值
    districtName: "town" // 自訂地區 select 標籤的 name 值
});

//訂購清單
$('.j-list-title').on('click',function(){
    $('.j-list').toggleClass('j-listopen');
})

//mobile訂單摘要
$('.j-upicon').on('click',function(){
    $('.j-subtotal').toggleClass('j-open');
})

//logistics 切換
if($('.j-convenience').prop("checked")==false){
    $('.j-store-info').hide();
    }else{
        $('.j-store-info').show();
    }

$('input:radio[name="delivery"]').change(function(){
    // console.log('check');
    
    if($('.j-home').prop("checked")==false){
        $('.j-home-info').slideUp(400);
        setTimeout(function(){
            $('.j-home-info').hide();
        },800);
    }else{
        $('.j-home-info').slideDown(400);
        setTimeout(function(){
            $('.j-home-info').show();
        },800);
    }
    if($('.j-convenience').prop("checked")==false){
        $('.j-store-info').slideUp(400);
        setTimeout(function(){
            $('.j-store-info').hide();
        },800);
    }else{
        $('.j-store-info').slideDown(400);
        setTimeout(function(){
            $('.j-store-info').show();
        },800);
    }
})

//pay 切換
$('input:radio[name="pay"]').change(function(){
    if($('.j-credit').prop("checked")==false){
        $('.j-credit-bg').slideUp(400);
        setTimeout(function(){
            $('.j-credit-bg').hide();
        },800);
    }else{
        $('.j-credit-bg').slideDown(400);
        setTimeout(function(){
            $('.j-credit-bg').show();
        },800);
    }
})

//credit card翻轉

$(".creditcard").on("click", function(){
    if ($(this).hasClass("flipped")) {
        $(this).removeClass("flipped");
    } else {
        $(this).addClass("flipped");
    }
});