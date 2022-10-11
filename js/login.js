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


var input = document.getElementById('login-password')
var imgs = document.getElementById('eye_close');
    //下面是一個判斷每次點選的效果
var flag = 0;
imgs.onclick = function () {
  // console.log('123');
    if (flag == 0) {
        input.type = 'text';
        eye_close.src = './images/icons/icon=eye_open.svg';//睜眼圖
        flag = 1;
      } else {
        input.type = 'password';
        eye_close.src = './images/icons/icon=eye_close.svg';//閉眼圖
        flag = 0;
      }
    }
