// 메뉴 탭 버튼
$(".menu-tab button").on("click", function () {
  $(".menu-tab ul").stop().slideUp();
  $(this).parent().parent().toggleClass("expanded");
  $(this).parent().next().stop().slideToggle();
});
