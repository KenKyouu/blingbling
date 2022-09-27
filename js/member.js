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

// $('li.btn').click(function(){
//   this.style.backgroundColor = 'white';
// });
// $('.memberbutton > ul > li.btn > a >.btnsvg > svg > path').click(function(){
//   this.style.fill = '#4c4948';
//   this.style.stroke = '#4c4948';
// });
// $('.memberbutton > ul > li.btn > a >.btnP').click(function(){
//   this.style.color = '#4c4948';
// });

// $(document).ready(function(){
//   $("li.btn").click(function(){
//       $(this).css("background-color", "white");
//       $(".btnP").css("color", "#4c4948");
//       $(".btnsvg > svg > path").css("fill", "#4c4948", "stroke", "#4c4948");
//       $(".btnsvg > svg.ordersvg > path").css("stroke", "#4c4948");
//   });
// });

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
