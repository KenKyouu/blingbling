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
  $(".mockup > h6").addClass("header-margin");
  $(".header-class").show();
});

$(".mockup, .header-class").mouseleave(function () {
  $(".mockup > h6").removeClass("header-margin");
  $(".header-class").hide();
});

// header-search

$("li.search, .header-search").mouseenter(function () {
  $("li.search").addClass("header-icon-height");
  $(".header-search").show();
});

$("li.search, .header-search").mouseleave(function () {
  $("li.search").removeClass("header-icon-height");
  $(".header-search").hide();
});

// header-member

$("li.member, .header-member").mouseenter(function () {
  $("li.member").addClass("header-icon-height");
  $(".header-member").show();
});

$("li.member, .header-member").mouseleave(function () {
  $("li.member").removeClass("header-icon-height");
  $(".header-member").hide();
});

$(".switchtosignup").click(function () {
  $(".pc-login").addClass("loginandsignup-hidden");
  $(".pc-signup").addClass("loginandsignup-show");
});

$(".switchtologin").click(function () {
  $(".pc-signup").removeClass("loginandsignup-show");
  $(".pc-login").removeClass("loginandsignup-hidden");
});

$("span.clicktosignup").click(function () {
  // $(".mb-login").removeClass("mb-loginandsignup-show");
  $(".mb-login").addClass("mb-loginandsignup-hidden");
  $(".mb-signup").removeClass("mb-loginandsignup-hidden");
  // $(".mb-signup").addClass("mb-loginandsignup-show");
});

$("span.clicktologin").click(function () {
  // $(".mb-signup").removeClass("mb-loginandsignup-show");
  $(".mb-signup").addClass("mb-loginandsignup-hidden");
  $(".mb-login").removeClass("mb-loginandsignup-hidden");
  // $(".mb-login").addClass("mb-loginandsignup-show");
});
