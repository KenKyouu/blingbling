// greenBorder - memberButton

$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
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

// member-button

// $(document).ready(function(){
//   $('a#btn1').click(function(){
//     $('a#btn1').addClass('showBtn');
//     $('a#btn2').removeClass('showBtn');
//     $('a#btn3').removeClass('showBtn');
//     $('a#btn4').removeClass('showBtn');
//     $('a#btn5').removeClass('showBtn');
//     $('a#btn6').removeClass('showBtn');
//   });
//   $('a#btn2').click(function(){
//     $('a#btn2').addClass('showBtn');
//     $('a#btn1').removeClass('showBtn');
//     $('a#btn3').removeClass('showBtn');
//     $('a#btn4').removeClass('showBtn');
//     $('a#btn5').removeClass('showBtn');
//     $('a#btn6').removeClass('showBtn');
//   });
//   $('a#btn3').click(function(){
//     $('a#btn3').addClass('showBtn');
//     $('a#btn1').removeClass('showBtn');
//     $('a#btn2').removeClass('showBtn');
//     $('a#btn4').removeClass('showBtn');
//     $('a#btn5').removeClass('showBtn');
//     $('a#btn6').removeClass('showBtn');
//   });
//   $('a#btn4').click(function(){
//     $('a#btn4').addClass('showBtn');
//     $('a#btn1').removeClass('showBtn');
//     $('a#btn2').removeClass('showBtn');
//     $('a#btn3').removeClass('showBtn');
//     $('a#btn5').removeClass('showBtn');
//     $('a#btn6').removeClass('showBtn');
//   });
//   $('a#btn5').click(function(){
//     $('a#btn5').addClass('showBtn');
//     $('a#btn1').removeClass('showBtn');
//     $('a#btn2').removeClass('showBtn');
//     $('a#btn3').removeClass('showBtn');
//     $('a#btn4').removeClass('showBtn');
//     $('a#btn6').removeClass('showBtn');
//   });
//   $('a#btn6').click(function(){
//     $('a#btn6').addClass('showBtn');
//     $('a#btn1').removeClass('showBtn');
//     $('a#btn2').removeClass('showBtn');
//     $('a#btn3').removeClass('showBtn');
//     $('a#btn4').removeClass('showBtn');
//     $('a#btn5').removeClass('showBtn');
//   });
// })