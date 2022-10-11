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

//上傳照片------

function previewFile() {
  const preview = document.querySelector('.upload_photo');
  const file = document.querySelector('input[type=file]').files[0];
  const reader = new FileReader();

  reader.addEventListener("load", () => {
    // convert image file to base64 string
    preview.src = reader.result;
    uploadAvatar(reader.result);
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}


const edit = document.querySelector(".photoedit");
const myphoto = document.querySelector(".photo upload_photo");
const avatar = document.form1.avatar;
/*
avatar.addEventListener("change", async function () {
    // 上傳表單
    const fd = new FormData(document.form1);
    const r = await fetch("upload-api.php", {
        method: "POST",
        body: fd,
    });
    const obj = await r.json();
    console.log(obj);
    myphoto.src = "./uploaded/" + obj.filename;
});
*/
function uploadAvatar(data) {
    // avatar.click(); // 模擬點擊

    const fd = new FormData();
    fd.append('data', data);
    fetch('save_avatar.php',{
      method: 'POST',
      body: fd,
    }).then(r=>r.json())
    .then(obj=>{
      console.log(obj);
    })

}