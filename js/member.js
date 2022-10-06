// member-editMyIntro-Lightbox-bs

$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var recipient = button.data('whatever') 
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
})

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})


// lightbox

$('.uploadNewFriend').click(function(){
  $('.inputNewFriend').addClass('show').css('left', '0');
});
$('button.clean').click(function(){
  $('.inputNewFriend').removeClass('show').css('left', '-100%');
});

$('.deleteFriendIcon').click(function(){
  $('.friend-lightbox-warn').addClass('show').css('left', '0');
});
$('button.cancel').click(function(){
  $('.friend-lightbox-warn').removeClass('show').css('left', '-100%');
});

$('.editIcon').click(function(){
  $('.lightbox-friendDetails-bg').addClass('show').css('left', '0');
});
$('button.f-clean').click(function(){
  $('.lightbox-friendDetails-bg').removeClass('show').css('left', '-100%');
});

$('.newcoupon').click(function(){
  $('.coupon-lightbox-err').addClass('show').css('left', '0');
});
$('button.ok').click(function(){
  $('.coupon-lightbox-err').removeClass('show').css('left', '-100%');
});
