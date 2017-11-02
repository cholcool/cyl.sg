$(".on_our_serviece").click(function() {
  $('html, body').animate({
    scrollTop: $(".onourservice").offset().top
  }, 1000, "easeInOutExpo");
});