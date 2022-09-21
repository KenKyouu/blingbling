let nowPage = 0;
$('#next').click(function () {
    if (nowPage < 4) {
        nowPage = nowPage + 1;
    }
    const moveX = nowPage * -800;
    $('.kol-slider-train').css('transform', `translateX(${moveX}px)`);
})

$('#prev').click(function () {
    if (nowPage > 0) {
        nowPage = nowPage - 1;
    }
    const moveX = nowPage * -800;
    $('.kol-slider-train').css('transform', `translateX(${moveX}px)`);
})