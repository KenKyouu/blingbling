const msgc = $("#msgContainer");

function genAlert(msg, type = "danger") {
  const a = $(`<div class="alert alert-${type}" role="alert">${msg}</div>`);
  msgc.append(a);
  setTimeout(() => {
    a.fadeOut(400, function () {
      a.remove();
    });
  }, 2000);
}

function checkForm() {
  // TODO: 檢查欄位資料格式是不是符合

  let isPass = true; // 預設表單的資料是沒問題的
  // const name = document.signup.name.value;
  // const email = document.signup.email.value;

  // if (name.length < 2) {
  //     genAlert('請填寫正確的姓名！');
  //     isPass = false;
  // }
  // if (!email) {
  //     genAlert('請填寫正確的email！');
  //     isPass = false;
  // }
  if (isPass) {
    // 送出表單資料
    $.post(
      "signup-api.php",
      $(document.signup).serialize(),
      function (data) {
        console.log(data);
        if (data.success) {
          genAlert("新增完成", "success");
          location.href = "member-myIntro.php";
        } else {
          genAlert(data.error);
        }
      },
      "json"
    );
  }
}

function checkFormmb() {
  // TODO: 檢查欄位資料格式是不是符合

  let isPass = true; // 預設表單的資料是沒問題的
  // const name = document.signup.name.value;
  // const email = document.signupmb.email.value;

  // if (name.length < 2) {
  //     genAlert('請填寫正確的姓名！');
  //     isPass = false;
  // }
  // if (!email) {
  //     genAlert('請填寫正確的email！');
  //     isPass = false;
  // }
  if (isPass) {
    // 送出表單資料
    $.post(
      "signupmb-api.php",
      $(document.signupmb).serialize(),
      function (data) {
        console.log(data);
        if (data.success) {
          genAlert("新增完成", "success");
          location.href = "member-myIntro.php";
        } else {
          genAlert(data.error);
        }
      },
      "json"
    );
  }
}
