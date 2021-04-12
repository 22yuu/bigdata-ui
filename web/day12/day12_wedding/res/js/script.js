// for menu navigation animation scripts
$(".menu-item>li").mouseover(function(){
    $(this).children(".submenu").stop().slideDown();
});


$(".menu-item>li").mouseleave(function() {
    $(this).children(".submenu").stop().slideUp();
});
// end menu scripts


// for image slider scripts
$(".btn_prev").addClass("off");

$(".btn_next").click(function(){
    if(!$("#slides li").last().is(":visible")) {
        //현재보이는 그림 숨기고 다음거로 이동하라...!
        $("#slides li:visible").hide().next("li").fadeIn("slow");
        $(".btn_prev").removeClass("off");
    }
    if($("#slides li").last().is(":visible")) {
        $(".btn_next").addClass("off");
    }
})

$(".btn_prev").click(function(){
    if(!$("#slides li").first().is(":visible")) {
        //현재보이는 그림 숨기고 다음거로 이동하라...!
        $("#slides li:visible").hide().prev("li").fadeIn("slow");
        $(".btn_next").removeClass("off");
    }
    if($("#slides li").first().is(":visible")) {
        $(".btn_prev").addClass("off");
    }
})
// end image slider scripts


/* pop up event scripts */ 

$("#partner-popup").click(function(){
    //$(".partner_up").css("display","block");
	$("#partner_up").addClass("active");
});

$("#partner_up .btnClose").click(function(){
    //console.log("안녕");
    //$(".partner_up").css("display","none");
	$("#partner_up").removeClass("active");
});