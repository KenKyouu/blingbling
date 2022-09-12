$("button.filter").click(function () {
  $(".filter-page").addClass("filter-show");
  $(".header, .content, .footer").addClass("list-hidden");
});

$(".filter-header > .back").click(function () {
  $(".filter-page").removeClass("filter-show");
  $(".header, .content, .footer").removeClass("list-hidden");
});
