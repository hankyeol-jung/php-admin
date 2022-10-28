// 메뉴
$(".menu-tab button").on("click", function () {
  $(".menu-tab ul").stop().slideUp();
  $(".menu-tab").removeClass("expanded");
  $(this).parent().parent().toggleClass("expanded");
  $(this).parent().next().stop().slideToggle();
});

$(".btn_toggle_gnb").on("click", function () {
  $("#admin_section").toggleClass("closed");
});
