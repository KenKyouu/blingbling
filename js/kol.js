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

    let i = nowPage + 1;
    $(`.dot-group>li:nth-child(${i})`).addClass('active').prev().removeClass('active');
})

$('#arrowLeft').click(function () {
    if (nowPage > 0) {
        nowPage = nowPage - 1;
    }
    moveX(nowPage);

    let i = nowPage + 1;
    $(`.dot-group>li:nth-child(${i})`).addClass('active').next().removeClass('active');
})

// 居家生活第一篇
$('#livingArrowRight').click(function () {
    if (nowPage < 4) {
        nowPage = nowPage + 1;
    }
    moveX(nowPage);

    let x = nowPage + 1;
    $(`.living-dot-group>li:nth-child(${x})`).addClass('active').prev().removeClass('active');
})

$('#livingArrowLeft').click(function () {
    if (nowPage > 0) {
        nowPage = nowPage - 1;
    }
    moveX(nowPage);

    let x = nowPage + 1;
    $(`.living-dot-group>li:nth-child(${x})`).addClass('active').next().removeClass('active');
})

// 數位家電第二篇
$('#houseArrowRight').click(function () {
    if (nowPage < 4) {
        nowPage = nowPage + 1;
    }
    moveX(nowPage);

    let y = nowPage + 1;
    $(`.house-dot-group>li:nth-child(${y})`).addClass('active').prev().removeClass('active');
})

$('#houseArrowLeft').click(function () {
    if (nowPage > 0) {
        nowPage = nowPage - 1;
    }
    moveX(nowPage);

    let y = nowPage + 1;
    $(`.house-dot-group>li:nth-child(${y})`).addClass('active').next().removeClass('active');
})

function moveX(nowPage) {
    const movement = nowPage * -100;
    $('.swiper-train').css('transform', `translateX(${movement}%)`);
}

$('.article-page > svg').click(function () {
    nowPage = $(this).index();
    moveX(nowPage);
})


// $('.arrowRight').on('click', function () {
//     let dotPage = $(this).index();
//     let dotmovement = $(this).index() * -20;
//     $(this).addClass('active').siblings().removeClass('active');
//     $('.swiper-train-btn > li').css('transform', `translateX(${dotmovement}%)`)
// })

// ---------------------------------------------------------------------------
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
