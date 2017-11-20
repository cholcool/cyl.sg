$(".on_our_serviece").click(function() {
  $('html, body').animate({
    scrollTop: $(".onourservice").offset().top
  }, 1000, "easeInOutExpo");
});
//slide collapse
var day = new Date();
document.getElementById("copyrightyear").innerHTML = day.getFullYear();
//coppy right years
///*Booking form*/ $( "fname" ).keyup(function() { var value = $( this ).val(); $( "#viewform" ).html( value ); }).keyup();
$('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 30,
    minTime: '10:30am',
    maxTime: '8:30pm',
    defaultTime: '',
    startTime: '10:30am',
    dynamic: true,
    dropdown: true,
    scrollbar: true
});
//http://timepicker.co/