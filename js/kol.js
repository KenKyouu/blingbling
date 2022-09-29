
let lastScroll = 0;
$(window).scroll(function () {
    let scrollNow = $(window).scrollTop();
    // console.log('lastScroll:', lastScroll);
    // console.log('scrollNow', scrollNow);

    if (scrollNow > lastScroll) {
        $('.header,.up').addClass('header-hidden')
    }
    else {
        $('.header,.up').removeClass('header-hidden')
    }
    lastScroll = scrollNow;
})

// 全部文章第一篇
let nowPage = 0;
$('#arrowRight').click(function () {
    if (nowPage < 4) {
        nowPage = nowPage + 1;
    }
    moveX(nowPage);
})

$('#arrowLeft').click(function () {
    if (nowPage > 0) {
        nowPage = nowPage - 1;
    }
    moveX(nowPage);
})

// 居家生活第一篇
$('#livingArrowRight').click(function () {
    if (nowPage < 4) {
        nowPage = nowPage + 1;
    }
    moveX(nowPage);
})

$('#livingArrowLeft').click(function () {
    if (nowPage > 0) {
        nowPage = nowPage - 1;
    }
    moveX(nowPage);
})

// 數位家電第二篇
$('#houseArrowRight').click(function () {
    if (nowPage < 4) {
        nowPage = nowPage + 1;
    }
    moveX(nowPage);
})

$('#houseArrowLeft').click(function () {
    if (nowPage > 0) {
        nowPage = nowPage - 1;
    }
    moveX(nowPage);
})

function moveX(nowPage) {
    const movement = nowPage * -100;
    $('.swiper-train').css('transform', `translateX(${movement}%)`);
}

$('.article-page > svg').click(function () {
    nowPage = $(this).index();
    moveX(nowPage);

})

// // 圖片cta導購
// $('.img-wrap > img').hover(function () {
//     $('button').css('display', 'block');
// })


// 各文章標籤分類
$('#mbNewsBeauty,#pcNewsBeauty').click(function () {
    $('#beautySection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
})

$('#mbNewsFashion,#pcNewsFashion').click(function () {
    $('#fashionSection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#beautySection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
})

$('#mbNewsMom,#pcNewsMom').click(function () {
    $('#momSection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#beautySection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
})

$('#mbNewsLiving,#pcNewsLiving').click(function () {
    $('#livingSection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#beautySection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
})

$('#mbNewsHouse,#pcNewsHouse').click(function () {
    $('#houseSection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#beautySection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
})

$('#mbNewsAll,#pcNewsAll').click(function () {
    $('#defaultAllSection').css('display', 'block');
    $('#beautySection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
})
