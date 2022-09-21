// greenBorder - memberButton

// $("li.btn > a").click(function(){
//     console.log($(this));
//     $(this).css('background-color', 'white').parent().siblings().children().css('background-color', 'rgba(255, 255, 255, 0)');
// });

//edit myInfo
// $('button.editMyInfo').click(function (e) {
//     e.preventDefault();
//     $('.lb-editmydetails').addClass('lightbox-show');
//     $('.lb-editmydetails').css({
//         opacity: '1',
//     });
//     $('.blackbg').css({
//         opacity: '1',
//     });
//     $('body').addClass('body-hidden');
// });

// $(".true, .false").click(function () {
//     $(".lb-editmydetails").removeClass("lightbox-show");
//     $('.lb-editmydetails').css({
//         display: 'none',
//     });
//     $("body").removeClass("body-hidden");
// });

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