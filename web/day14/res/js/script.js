
$(document).ready(function(){
/* img slider */
var imgs=2;
var now=0;

start();
function start() {
    $(".imgs img").eq(0).css("opacity","1");
    setInterval(function() {
        slide();
    }, 2000)
}

function slide() {
    if(now == imgs ) {
        now = 0;
    } else {
        now++;
    }
    $(".imgs img").eq(now-1).stop().animate({"opacity":"0"},2000);
    $(".imgs img").eq(now).stop().animate({"opacity":"1"},2000);
}
});

/* popup */
$("#close01").click(function(){
    $("#popup").hide();
});

$(document).ready(function(){
    if($.cookie("nopopup2") != "Y") {
        $("#popup").show();
    }else {
        $("#popup").hide();
    }
});

$("#close01").click(function(){
    if(document.frmPopup.popup01.checked) {
        $.cookie("nopopup2","Y", {expires:1});
    }
    $("#popup").hide();
});

$(".partner-img").click(function() {
    $("#partner-popup-img").fadeIn(1000);
})

$("#partner-popup-img .body img").click(function() {
    $("#partner-popup-img").fadeOut(1000);
})