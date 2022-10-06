function loginCheckForm() {
  // TODO: 欄位檢查
  if (!$("#login-email").val()) {
    alert("請填寫帳號");
    return;
  }
  if (!$("#login-password").val()) {
    alert("請填寫密碼");
    return;
  }
  $.post(
    "login-api.php",
    $(document.login).serialize(),
    function (data) {
      if (data.success) {
        location.href = "member-myIntro.php";
      } else {
        alert(data.error);
      }
    },
    "json"
  );
}

function loginCheckFormmb() {
  // TODO: 欄位檢查
  if (!$("#login-email-mb").val()) {
    alert("請填寫帳號");
    return;
  }
  if (!$("#login-password-mb").val()) {
    alert("請填寫密碼");
    return;
  }
  $.post(
    "loginmb-api.php",
    $(document.loginmb).serialize(),
    function (data) {
      if (data.success) {
        location.href = "member-myIntro.php";
      } else {
        alert(data.error);
      }
    },
    "json"
  );
}

// $('#eye_close').click(function(){
//   console.log('click');
//   // $('.eye-close').attr('src','./images/icons/icon=eye_open.svg')
//   if($(this).hasClass('eye-close')){
//     $('#login-password').attr('type','text');
//   } else{
//     $('#login-password').attr('type','password');
//   }
//   $(this).toggleClass('eye-close').attr('src','./images/icons/icon=eye_open.svg');
// });

// var checkEye = document.getElementById("eye_close");
//       var floatingPassword =  document.getElementById("login-password");
//       checkEye.addEventListener("click", function(e){
//         if(e.target.classList.contains('eye-close')){
//         //換class 病患 type
//           e.target.classList.remove('eye-close');
//           e.target.classList.add('eye-open');
//           floatingPassword.setAttribute('type','text')
//         }else{
//           floatingPassword.setAttribute('type','password');
//           e.target.classList.remove('eye-open');
//           e.target.classList.add('eye-close')
//         }
//       });

$(function(){
  var $password =$('#login-password'),
  $passwordInput = $('<input type="text" name="' + $password.attr('name') + '" class="' + $password.attr('className') + '" />');
  $('#eye_close').click(function(){
    console.log('hi')
    const eye=  $('.eye-close').attr('src')
    console.log(eye)
    if(eye='./images/icons/icon=eye_open.svg'){
      $password.replaceWith($passwordInput.val($password.val()));
    }else{
      if(eye='./images/icons/icon=eye_close.svg')
      $passwordInput.replaceWith($password.val($passwordInput.val()));
    }
    $('.eye-close').attr('src','./images/icons/icon=eye_open.svg')
		// 如果是勾選則...
		// if(this.){
		// 	// 用 $passwordInput 來取代 $password
		// 	// 並把 $passwordInput 的值設為 $password 的值
		// 	$password.replaceWith($passwordInput.val($password.val()));
		// }else{
		// 	// 用 $password 來取代 $passwordInput
		// 	// 並把 $password 的值設為 $passwordInput 的值
		// 	$passwordInput.replaceWith($password.val($passwordInput.val()));
		// }
	});
})