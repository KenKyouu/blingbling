
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

let nowPage = 0;
$('#arrowRightBtn').click(function () {
    const nowPage = $(this).index();
    const moveX = nowPage * -800;
    console.log('nowPage: ', nowPage);
    console.log('moveX: ', moveX);

    if (nowPage < 4) {
        nowPage = nowPage + 1;
    }
    $('swiper-train').css('transform', `translateX(${moveX}px)`);
})

$('#arrowLeftBtn').click(function () {
    if (nowPage > 0) {
        nowPage = nowPage - 1;
    }
    const moveX = nowPage * -800;
    $('swiper-train').css('transform', `translateX(${moveX}px)`);
})


// 各文章標籤分類
$('#mbNewsBeauty,#pcNewsBeauty').click(function () {
    $('#beautySection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
    $('#petSection').css('display', 'none');
})

$('#mbNewsFashion,#pcNewsFashion').click(function () {
    $('#beautySection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
    $('#petSection').css('display', 'none');
})

$('#mbNewsMom,#pcNewsMom').click(function () {
    $('#momSection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
    $('#petSection').css('display', 'none');
})

$('#mbNewsHouse,#pcNewsHouse').click(function () {
    $('#houseSection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
    $('#petSection').css('display', 'none');
})

$('#mbNewsLiving,#pcNewsLiving').click(function () {
    $('#livingSection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
    $('#petSection').css('display', 'none');
})

$('#mbNewsPet,#pcNewsPet').click(function () {
    $('petSection').css('display', 'block');
    $('#defaultAllSection').css('display', 'none');
    $('#fashionSection').css('display', 'none');
    $('#momSection').css('display', 'none');
    $('#houseSection').css('display', 'none');
    $('#livingSection').css('display', 'none');
    $('#petSection').css('display', 'none');
})
