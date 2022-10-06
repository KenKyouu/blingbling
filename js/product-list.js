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

$(".filter-detail-back, .gender-filter-radio, .price-filter-radio").click(
  function () {
    $(
      ".gender-filter-detail, .price-filter-detail, .color-filter-detail"
    ).removeClass("filter-show");
  }
);
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

$(".gender-filter-radio").click(function () {
  $("input[name=gender]").each(function () {
    if ($(this).prop("checked")) {
      // console.log($(this).val());
      genderArr.push($(this).val());
      $(".mobile-gender").val(genderArr[0]);
      // console.log($(".mobile-gender").val());
      if (genderArr[0] == "male") {
        $("#gender-span").text("男").css("color", "#fff");
      } else if (genderArr[0] == "female") {
        $("#gender-span").text("女").css("color", "#fff");
      } else if (genderArr[0] == "all-gender") {
        $("#gender-span").text("所有性別").css("color", "#fff");
      }
      // console.log(genderArr);
      genderArr = [];
    }
  });
});

if ($("input.mobile-gender").val() == "male") {
  $("#gender-span").text("男").css("color", "#fff");
} else if ($("input.mobile-gender").val() == "female") {
  $("#gender-span").text("女").css("color", "#fff");
}

// price-filter-detail

let priceArr = [];

$(".price-filter-radio").click(function () {
  $("input[name=price]").each(function () {
    if ($(this).prop("checked")) {
      // console.log($(this).val());
      priceArr.push($(this).val());
      if (priceArr[0] == "price-range-one") {
        $("#price-span").text("NT$500以下").css("color", "#fff");
        $(".mobile-lowp").val(0);
        $(".mobile-highp").val(500);
      } else if (priceArr[0] == "price-range-two") {
        $("#price-span").text("NT$500 - NT$1,000").css("color", "#fff");
        $(".mobile-lowp").val(500);
        $(".mobile-highp").val(1000);
      } else if (priceArr[0] == "price-range-three") {
        $("#price-span").text("NT$1,000 - NT$5,000").css("color", "#fff");
        $(".mobile-lowp").val(1000);
        $(".mobile-highp").val(5000);
      } else if (priceArr[0] == "price-range-four") {
        $("#price-span").text("NT$5,000以上").css("color", "#fff");
        $(".mobile-lowp").val(5000);
      }
      // console.log(priceArr);
      priceArr = [];
    }
  });
});

if (
  $("input.mobile-lowp").val() == "0" &&
  $("input.mobile-highp").val() == "500"
) {
  $("#price-span").text("NT$500以下").css("color", "#fff");
} else if (
  $("input.mobile-lowp").val() == "500" &&
  $("input.mobile-highp").val() == "1000"
) {
  $("#price-span").text("NT$500 - NT$1,000").css("color", "#fff");
} else if (
  $("input.mobile-lowp").val() == "1000" &&
  $("input.mobile-highp").val() == "5000"
) {
  $("#price-span").text("NT$1,000 - NT$5,000").css("color", "#fff");
} else if ($("input.mobile-lowp").val() == "5000") {
  $("#price-span").text("NT$5,000以上").css("color", "#fff");
}

// color-filter-detail

let colorArr = [];

colorList = {
  black: "黑色",
  white: "白色",
  gray: "灰色",
  brown: "棕色",
  rice: "米色",
  green: "綠色",
  blue: "藍色",
  purple: "紫色",
  yellow: "黃色",
  pink: "粉色",
  red: "紅色",
  orange: "橘色",
  silver: "銀色",
  gold: "金色",
};

$(".filter-detail-back").click(function () {
  $("input[name=color]").each(function () {
    if ($(this).prop("checked")) {
      // console.log($(this).val());
      colorArr.push($(this).val());
      $(".addInput").append(
        "<input type='text' name='color[]' value='" +
          $(this).val() +
          "' hidden></input>"
      );
      // colorArr = [];
    }

    // colorArr = [];
  });
  let color_zh = "";
  colorArr.forEach(function (el) {
    // console.log(colorList[el]);
    color_zh += colorList[el] + ", ";
  });
  // console.log(color_zh.substring(0, color_zh.length - 1));
  $("#color-span")
    .text(color_zh.substring(0, color_zh.length - 2))
    .css("color", "#fff");
  // console.log(colorArr);
  $(".mobile-color").val(colorArr);
  // console.log($(".mobile-color").val());
  // colorArr = [];
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

//----拉拉 history區--------
function addToHistory(event) {
  const addToHistoryBtn = $(event.currentTarget);
  const sid = addToHistoryBtn.attr("data-sid");
  console.log({
    hi:'hello',
    sid,
  });

  $.get(
    "history-api.php",
    {
      sid,
    },
  
    "json"
  );
}
