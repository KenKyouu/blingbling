// menu-burger

$("li.menu > a.menu").click(function (e) {
  e.preventDefault();
  $(".menu-page").addClass("menu-show");
  $("body").addClass("body-hidden");
});

$(".close, .menu-left").click(function () {
  $(".menu-page").removeClass("menu-show");
  $("body").removeClass("body-hidden");
});

// filter

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
