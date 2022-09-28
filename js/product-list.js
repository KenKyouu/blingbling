// // menu-burger

// $("li.menu > a.menu").click(function (e) {
//   e.preventDefault();
//   $(".menu-page").addClass("menu-show");
//   $("body").addClass("body-hidden");
// });

// $(".close, .menu-left").click(function () {
//   $(".menu-page").removeClass("menu-show");
//   $("body").removeClass("body-hidden");
// });

// filter light box

$("button.filter").click(function () {
  $(".filter-page").addClass("filter-show");
  $("body").addClass("body-hidden");
});

$(".filter-header > .back").click(function () {
  $(".filter-page").removeClass("filter-show");
  $("body").removeClass("body-hidden");
});

$(".gender-filter").click(function () {
  $(".gender-filter-detail").addClass("filter-show");
});

$(".price-filter").click(function () {
  $(".price-filter-detail").addClass("filter-show");
});

$(".color-filter").click(function () {
  $(".color-filter-detail").addClass("filter-show");
});

$(".filter-detail-back").click(function () {
  $(
    ".gender-filter-detail, .price-filter-detail, .color-filter-detail"
  ).removeClass("filter-show");
});
$(".filter-button-pc").click(function () {
  $(".filter-page-pc").addClass("filter-show");
  $("body").addClass("body-hidden");
});
$(".filter-page-pc-back").click(function () {
  $(".filter-page-pc").removeClass("filter-show");
  $("body").removeClass("body-hidden");
});

// gender-filter-detail

let genderArr = [];

$(".filter-detail-back").click(function () {
  $("input[name=gender]").each(function () {
    if ($(this).prop("checked")) {
      console.log($(this).val());
      genderArr.push($(this).val());
      if (genderArr[0] == "male") {
        $("#gender-span").text("男").css("color", "#fff");
      } else if (genderArr[0] == "female") {
        $("#gender-span").text("女").css("color", "#fff");
      } else if (genderArr[0] == "all-gender") {
        $("#gender-span").text("所有性別").css("color", "#fff");
      }
      console.log(genderArr);
      genderArr = [];
    }
  });
});

// price-filter-detail

let priceArr = [];

$(".filter-detail-back").click(function () {
  $("input[name=price]").each(function () {
    if ($(this).prop("checked")) {
      console.log($(this).val());
      priceArr.push($(this).val());
      if (priceArr[0] == "price-range-one") {
        $("#price-span").text("NT$500以下").css("color", "#fff");
      } else if (priceArr[0] == "price-range-two") {
        $("#price-span").text("NT$500 - NT$1,000").css("color", "#fff");
      } else if (priceArr[0] == "price-range-three") {
        $("#price-span").text("NT$1,000 - NT$5,000").css("color", "#fff");
      } else if (priceArr[0] == "price-range-four") {
        $("#price-span").text("NT$5,000以上").css("color", "#fff");
      }
      console.log(priceArr);
      priceArr = [];
    }
  });
});

// color-filter-detail

let colorArr = [];

$(".filter-detail-back").click(function () {
  $("input[name=color]").each(function () {
    if ($(this).prop("checked")) {
      console.log($(this).val());
      colorArr.push($(this).val());
      // console.log(colorArr);
      // colorArr = [];
    }
    // TODO: 把顏色改成中文抓到#color-span
    console.log(colorArr);
    // colorArr = [];
  });
  colorArr = [];
});

// click like

$(".heart").click(function () {
  console.log("hello");
  $(this).css("background-image", "url('./images/icons/addlike1.svg')");
});

// shinder

// $("input[name=gender]").each(function () {
//   if ($(this).prop("checked")) console.log($(this).val());
// });

// $("input[name=color]").each(function () {
//   if ($(this).prop("checked")) console.log(this.id);
// });
