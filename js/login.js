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
