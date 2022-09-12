$("button.filter").click(function () {
  $(".filter-page").addClass("filter-show");
  $(".header, .content, .footer").addClass("list-hidden");
});

$(".filter-header > .back").click(function () {
  $(".filter-page").removeClass("filter-show");
  $(".header, .content, .footer").removeClass("list-hidden");
});

$("ul.menu > a.menu").click(function () {
  $(".menu-page").addClass("menu-show");
  //   $(".content").addClass("test");
  $("body").addClass("body-hidden");
});

$(".close").click(function () {
  $(".menu-page").removeClass("menu-show");
  //   $(".content").removeClass("test");
  $("body").removeClass("body-hidden");
});
