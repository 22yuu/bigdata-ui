

/* img slider */
$(".btn_dot a").click(function(){
    var imgLeft=$(this).attr("imgLeft");
    $(".imgs").animate({left:imgLeft}, "fast");
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