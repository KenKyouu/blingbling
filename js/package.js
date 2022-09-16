// ------packageSection------------------
$('.decorateBox').click(function(){
    $('#p-paper').removeClass('decorateBoxClick')
    $('#p-ribbon').removeClass('decorateBoxClick')
    $('#p-box').addClass('decorateBoxClick')
    $('.decoratePaper').css('background','#c2c2c2')
    $('.decorateRibbon').css('background','#c2c2c2')
    $(this).css('background','#2d827d')
    
})
$('.decoratePaper').click(function(){
    $('#p-box').removeClass('decorateBoxClick')
    $('#p-ribbon').removeClass('decorateBoxClick')
    $('#p-paper').addClass('decorateBoxClick')
    $('.decorateRibbon').css('background','#c2c2c2')
    $('.decorateBox').css('background','#c2c2c2')
    $(this).css('background','#2d827d')

})

$('.decorateRibbon').click(function(){
    $('#p-box').removeClass('decorateBoxClick')
    $('#p-paper').removeClass('decorateBoxClick')
    $('#p-ribbon').addClass('decorateBoxClick')
    $('.decorateBox').css('background','#c2c2c2')
    $('.decoratePaper').css('background','#c2c2c2')
    $(this).css('background','#2d827d')

})

//------cardSection----------------------
$('.cardStyleIcon').click(function(){
    $('#c-text').removeClass('cardBoxClick')
    $('#c-paper').addClass('cardBoxClick')
    $('.cardText').css('background','#c2c2c2')
    $(this).css('background','#2d827d')
})

$('.cardText').click(function(){
    $('#c-paper').removeClass('cardBoxClick')
    $('#c-text').addClass('cardBoxClick')
    $('.cardStyleIcon').css('background','#c2c2c2')
    $(this).css('background','#2d827d')
})

//-----換頁功能-------------------------
//----step1-----------
$('#step1Btn-next').click(function(){
    console.log('next:','next')
    $('.cardSection').css('left', '0px')
    $('.stepTop2').css('background','#2d827d')
    $('.stepTop2').css('color','#ffffff')
})

$('#step1Btn-Skip').click(function(){
    console.log('next:','next')
    $('.cardSection').css('left', '0px')
    $('.cardSection').css('background', '#2d827d')
})

//---step2--------------
$('#step2Btn-next').click(function(){
    console.log('next:','next')
    $('.FinishSection').css('left', '0px')
    $('.stepTop3').css('background','#ca3f68')
    $('.stepTop3').css('color','#ffffff')
})
$('#step2Btn-Skip').click(function(){
    console.log('next:','next')
    $('.FinishSection').css('left', '0px')
    $('.stepTop3').css('background','#ca3f68')
    $('.stepTop3').css('color','#ffffff')
})

//---step3-------------
$('#step3Btn-pre').click(function(){
    $('.FinishSection').css('left', '-400px')
    $('.cardSection').css('left', '0px')
    $('.stepTop2').css('background','#2d827d')
    $('.stepTop2').css('color','#ffffff')
    $('.stepTop3').css('background','#ffffff')
    $('.stepTop3').css('color','#000000')
})
