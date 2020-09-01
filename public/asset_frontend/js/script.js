// scroll navbar
$(window).scroll(() => {
  var wScroll = $(this).scrollTop();
  if (wScroll > 600) {
    $("nav.navbar").css({
      background: "#16a085",
      transition: ".7s",
    });
  } else {
    $("nav.navbar").css({
      background: "unset",
      transition: ".7s",
    });
  }
});