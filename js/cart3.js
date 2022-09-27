//訂購清單
$('.j-list-title').on('click', function () {
    $('.j-list').toggleClass('j-listopen');
})

//mobile訂單摘要
$('.j-upicon').on('click', function () {
    $('.j-subtotal').toggleClass('j-open');
})


//限制留言字數
var checkStrLengths = function (str, maxLength) {
    var maxLength = maxLength;
    var result = 0;
    if (str && str.length > maxLength) {
        result = maxLength;
    }

    else {
        result = str.length;
    }
    return result;
}

$('.s-input').on('input propertychange', function () {
    // console.log('hi');
    var userDesc = $(this).val();

    var len;
    if (userDesc) {
        len = checkStrLengths(userDesc, 100);
    }

    else {
        len = 0
    }

    $('.s-order-text').html(len + '/100');
});


//價錢加,
const dollarCommas = function (n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
};

function updatePrices() {
    let productTotal = 0; //總價

    $('.j-list-item').each(function () {
        const listItem = $(this);
        const singlePrice = listItem.find('.j-money-single');
        const amount = listItem.find('.j-amount');
        const smallPrice = listItem.find('.j-money');

        const price = singlePrice.attr('data-val');
        const qty = amount.attr('data-val');

        singlePrice.html('NT$ ' + dollarCommas(price));
        amount.html(qty);
        smallPrice.html('NT$ ' + dollarCommas(price * qty));
        productTotal += price * qty;
    });
    $('.j-product-price').html('NT$ ' + dollarCommas(productTotal));
    $('.j-product-price').attr('data-val', 'NT$ ' + dollarCommas(productTotal));
    const orderpackage = $('.j-package').attr('data-val');
    $('.j-package').html('NT$ ' + dollarCommas(orderpackage));
    const ordergiftvoucher = $('.j-giftvoucher').attr('data-val');
    $('.j-giftvoucher').html('NT$ ' + dollarCommas(ordergiftvoucher));
    const ordercoupon = $('.j-coupon').attr('data-val');
    $('.j-coupon').html('NT$ ' + dollarCommas(ordercoupon));
    const orderfreight = $('.j-freightfee').attr('data-val');
    $('.j-freightfee').html('NT$ ' + dollarCommas(orderfreight));
    const finaltotal = $('.finaltotal').attr('data-val');
    $('.finaltotal').html('NT$ ' + dollarCommas(finaltotal));

}
updatePrices(); //一進頁就要執行一次


//fixed scroll
$(window).scroll(function () {
    $('.j-summary-list').removeClass('j-scroll');

    if ($(window).scrollTop() >= 580) {

        // console.log('$(window).scrollTop():',$(window).scrollTop());
        // console.log('scrollTop():',$('.s-pc-btn-wrap').offset().top);
        $('.j-summary-list').addClass('j-scroll');
    }
})