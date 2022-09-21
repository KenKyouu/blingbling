// 優惠券光箱
$('.coupon-btn').on('click', function () {
    $('.s-coupon-lightbox').show();
})

$('.coupon-pc-btn').on('click', function () {
    $('.s-coupon-pc-lightbox').show();
})

$('.coupon-apply-btn').on('click', function () {
    $('.s-coupon-lightbox').hide();
})

$('.coupon-apply-btn').on('click', function () {
    $('.s-coupon-pc-lightbox').hide();
})

// 關閉優惠券視窗
$('.coupon-svg').on('click', function () {
    $('.s-coupon-lightbox').hide();
})

$('.coupon-svg').on('click', function () {
    $('.s-coupon-pc-lightbox').hide();
})

// 摘要小精靈none-fixed
$(window).scroll(function () {
    const denominator = $('body').height() - $(window).height()
    const percentage = $(window).scrollTop() / denominator * 100;
    console.log('percentage: ', percentage);
})


(function(){
    let t = $('.amountNumber');
    $('.rightIncrease').click(function(){
        console.log('click');
        
        
    })
    $('.leftDecrease').click(function(){
        
    })
})








// // 訂購清單金額計算
// window.onload = function () {
//     var decrease = document.getElementsByClassName("leftDecrease");  //減號
//     var piece = document.getElementsByClassName("amountNumber");  //數量
//     var increase = document.getElementsByClassName("rightIncrease");  //加號
//     var price = document.getElementsByClassName("singlePrice"); //單價
//     var smallPrice = document.getElementsByClassName("smallPrice"); //小計
//     var totalPrice = document.getElementById("totalPrice"); //金額總計

//     // 數量加減
//     for (var i = 1; i < decrease.length; i++) {

//         decrease[i].index = i;
//         increase[i].index = i;

//         decrease[i].onclick = function () {
//             // 判斷數量是否大於1
//             if (piece[this.index].innerHTML < 1) {
//                 this.disabled = true; //當數量小於1時, 減號不能用
//             }
//             // 當前數量-1
//             piece[this.index].innerHTML--;

//             // 計算小計
//             smallPrice[this.index].value = Number(smallPrice[this.index].value) - Number(price[this.index].innerHTML);
//             totalPrice.innerHTML = Number(totalPrice.innerHTML) - Number(price[this.index].innerHTML);
//         }
//     }
//     // 加號click事件
//     increase[i].onclick = function () {
//         // 將對應的減號解禁
//         decrease[this.index].disabled = false;

//         // 當前數量+1
//         piece[this.index].innerHTML++;

//         // 計算小計
//         smallPrice[this.index].value = Number(smallPrice[this.index].value) + Number(price[this.index].innerHTML);

//         totalPrice.innerHTML = Number(totalPrice.innerHTML) + Number(price[this.index].innerHTML);
//     }
// }
