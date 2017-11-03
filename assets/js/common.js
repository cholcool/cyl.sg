$(".on_our_serviece").click(function() {
  $('html, body').animate({
    scrollTop: $(".onourservice").offset().top
  }, 1000, "easeInOutExpo");
});
var day = new Date();
document.getElementById("copyrightyear").innerHTML = day.getFullYear();