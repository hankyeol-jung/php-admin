// 메뉴 탭 버튼
$(".menu-tab button").on("click", function () {
  $(this).parent().parent().toggleClass("expanded");
  $(this).parent().next().slideToggle();
});
