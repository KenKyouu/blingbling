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
