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

//fixed scroll
$(window).scroll(function () {
    $('.j-summary-list').removeClass('j-scroll');

    if ($(window).scrollTop() >= 357) {

        // console.log('$(window).scrollTop():',$(window).scrollTop());
        // console.log('scrollTop():',$('.s-pc-btn-wrap').offset().top);
        $('.j-summary-list').addClass('j-scroll');
    }
})

// header hidden
// let lastScroll = 0;
// $(window).scroll(function () {
//     let scrollNow = $(window).scrollTop();

//     if (scrollNow > lastScroll) {
//         $('.header,.up').addClass('header-hidden')
//     }
//     else {
//         $('.header,.up').removeClass('header-hidden')
//     }
//     lastScroll = scrollNow;
// })

// 加購區電腦版點擊輪播
let nowPage = 0;
$('.svg-col').click(function () {
    if (nowPage < 4) {
        nowPage = nowPage + 1;
    }

    else {
        (nowPage > 0)
        nowPage = nowPage;
    }
    moveX(nowPage);
})

function moveX(nowPage) {
    const movement = nowPage * -300;
    $('.additional-product-row').css({
        'transform': `translateX(${movement}px)`,
        'transition': '.8s',
    });
}

$('.j-package-chose').click(function(){
    console.log('click');
    $('input[name="defaultPackage"]').prop('checked', false);
})

//價錢加,
const dollarCommas = function (n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
};

function removeItem(event) {
    const listItem = $(event.currentTarget).closest('.j-list-item');
    const sid = listItem.attr('data-sid');

    $.get(
        'handle-cart.php', {
        sid
    },
        function (data) {
            // console.log(data);

            
            listItem.remove();
            // TODO: 更新 總計, 
            updatePrices(); //ajax發回時就要更新
            showCartCount(data); //總數量
        },
        'json');

}

$('.heart-icon').click(function(){
    $(this).addClass('active');
})

function removeHeart(event) {
    const listItem = $(event.currentTarget).closest('.j-list-item');
    const sid = listItem.attr('data-sid');
    console.log(sid);
    $.get(
        'favorite.php',
        {
            sid
        },
        'json')
    setTimeout(function(){
        $.get(
            'handle-cart.php',
        {
            sid
        },
            function (data) {
                // console.log(data);

                listItem.remove();
                updatePrices();
                showCartCount(data);
            },
            'json');
    },2500);
}




$(function () {
    $(".add").click(function () {
        console.log('click');
        let sid = $(this).closest('.j-list-item').attr('data-sid');
        let t = $(this).parent().find('input[class*=qty]');
        t.val(parseInt(t.val()) + 1);
        qty = t.val();
        $.get(
            'handle-cart.php', {
            sid,
            qty
        },
            function (data) {
                console.log(data);

                // TODO: 更新小計, 總計,
                updatePrices();
                showCartCount(data); //總數量
                // console.log(qty);
            },
            'json');
    })
    $(".min").click(function () {
        console.log('click');
        let sid = $(this).closest('.j-list-item').attr('data-sid');
        let t = $(this).parent().find('input[class*=qty]');
        t.val(parseInt(t.val()) - 1);
        if (parseInt(t.val()) < 1) {
            t.val(1);
        }
        qty = t.val();
        $.get(
            'handle-cart.php', {
            sid,
            qty
        },
            function (data) {
                console.log(data);
                
                // 		// TODO: 更新小計, 總計,
                updatePrices();
                showCartCount(data); //總數量
            },
            'json');
    })
})



//包裝價錢
const packagechose = +$('.j-package-chose').attr('data-val');
const blingchose = +$('.j-bling-chose').attr('data-val');
const nonepackage = +$('.j-none-package').attr('data-val');


$('.j-package-chose').click(function(){
    setTimeout(function(){
        $('.j-orderpackage').html('NT$ ' + dollarCommas(packagechose));
        $('.j-orderpackage').attr('data-val',packagechose);
        updatePrices();
    },5000)
})
$('.j-bling-chose').click(function(){


    $('.j-orderpackage').html('NT$ ' + dollarCommas(blingchose));
    $('.j-orderpackage').attr('data-val', blingchose);
    updatePrices();
})
$('.j-none-package').click(function () {
    $('.j-orderpackage').html('NT$ ' + dollarCommas(nonepackage));
    $('.j-orderpackage').attr('data-val', nonepackage);
    updatePrices();
})


//購物金價錢
const usevoucher = $('.j-gift-voucher').attr('data-val');
const nonevoucher = +$('.j-none-voucher').attr('data-val');
$('.j-gift-voucher').click(function () {
    $('.j-giftvoucher').html('NT$ ' + dollarCommas(usevoucher));
    $('.j-giftvoucher').attr('data-val', usevoucher);
    updatePrices();
})
$('.j-none-voucher').click(function () {
    $('.j-giftvoucher').html('NT$ ' + dollarCommas(nonevoucher));
    $('.j-giftvoucher').attr('data-val', nonevoucher);
    updatePrices();
})


//優惠券價錢
$('.coupon-apply-btn').click(function () {
    $('input[class*=coupon-radio]').each(function () {
        if ($(this).prop("checked")) {
            let couponradio = $(this).attr('data-val');
            let couponsid = $(this).attr('data-sid');
            console.log(couponradio);
            console.log(couponsid);
            $('.j-coupon').html('NT$ ' + dollarCommas(couponradio));
            $('.j-coupon').attr('data-val', couponradio);
            $('.j-coupon').attr('data-sid', couponsid);
            updatePrices();
        }
    })
})




function updatePrices() {
    let productTotal = 0; //總價

    $('.j-list-item').each(function () {
        //取值
        const listItem = $(this);
        const singlePrice = listItem.find('.singlePrice');
        const smallPrice = listItem.find('.smallPrice');

        const price = +singlePrice.attr('data-val');
        const qty = +listItem.find('.qty').val();

        singlePrice.html('NT$ ' + dollarCommas(price));
        smallPrice.html('NT$ ' + dollarCommas(price * qty));
        productTotal += price * qty;
    });
    $('.j-product-price').html('NT$ ' + dollarCommas(productTotal));
    $('.j-product-price').attr('data-val', productTotal);
    if (productTotal == 0) {
        // console.log('upd:',$('.finaltotal').text());
        location.href = './cart1-none.php';
    }
    const giftvoucher = $('.giftvoucher').attr('data-val');
    $('.giftvoucher').html('$ ' + dollarCommas(giftvoucher));
    const orderpackage = $('.j-orderpackage').attr('data-val');
    const ordergiftvoucher = $('.j-giftvoucher').attr('data-val');
    const ordercoupon = $('.j-coupon').attr('data-val');
    const finaltotal = (productTotal + parseInt(orderpackage) - parseInt(ordergiftvoucher) - parseInt(ordercoupon)).toString();
    console.log(finaltotal);
    $('.finaltotal').html('NT$ ' + dollarCommas(finaltotal));
}
updatePrices(); //一進頁就要執行一次



function addToOrder(event) {
    // const addToOrderBtn = $(event.currentTarget);
    const producttotal = $('.j-producttotal').attr('data-val');
    const orderpackage = $('.j-orderpackage').attr('data-val');
    const ordergiftvoucher = $('.j-giftvoucher').attr('data-val');
    const ordercoupon = $('.j-coupon').attr('data-val');
    const ordercouponsid = $('.j-coupon').attr('data-sid');
    console.log({
        producttotal,
        orderpackage,
        ordergiftvoucher,
        ordercoupon,
        ordercouponsid,
    });

    $.get(

        "addtoorder.php",
        {
            producttotal,
            orderpackage,
            ordergiftvoucher,
            ordercoupon,
            ordercouponsid,
        },
        function (data) {
            // showCartCount(data);
            console.log(data);
            updatePrices();
        },
        "json"

    );
}




















