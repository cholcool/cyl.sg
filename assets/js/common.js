$(".on_our_serviece").click(function() {
  $('html, body').animate({
    scrollTop: $(".onourservice").offset().top
  }, 1000, "easeInOutExpo");
});
var day = new Date();
document.getElementById("copyrightyear").innerHTML = day.getFullYear();
(function() {
    
    // get references to select list and display text box
    var sel = document.getElementById('scripts');
    var el = document.getElementById('display');


    function getSelectedOption(sel) {
        var opt;
        for ( var i = 0, len = sel.options.length; i < len; i++ ) {
            opt = sel.options[i];
            if ( opt.selected === true ) {
                break;
            }
        }
        return opt;
    }

    // assign onclick handlers to the buttons
    document.getElementById('showVal').onclick = function () {
        el.value = sel.value;    
    }
    
    document.getElementById('showTxt').onclick = function () {
        // access text property of selected option
        el.value = sel.options[sel.selectedIndex].text;
    }

    document.getElementById('doLoop').onclick = function () {
        var opt = getSelectedOption(sel);
        el.value = opt.value;
    }
}());