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

// header-class

$(".mockup, .header-class").mouseenter(function () {
  console.log("show");
  $(".mockup > h6").addClass("header-margin");
  $(".header-class").show();
});

$(".mockup, .header-class").mouseleave(function () {
  console.log("hide");
  $(".mockup > h6").removeClass("header-margin");
  $(".header-class").hide();
});

// header-search

$("li.search, .header-search").mouseenter(function () {
  console.log("search");
  $("li.search").addClass("header-icon-height");
  $(".header-search").show();
});

$("li.search, .header-search").mouseleave(function () {
  console.log("search");
  $("li.search").removeClass("header-icon-height");
  $(".header-search").hide();
});

// header-member

$("li.member, .header-member").mouseenter(function () {
  console.log("member");
  $("li.member").addClass("header-icon-height");
  $(".header-member").show();
});

$("li.member, .header-member").mouseleave(function () {
  console.log("member");
  $("li.member").removeClass("header-icon-height");
  $(".header-member").hide();
});
