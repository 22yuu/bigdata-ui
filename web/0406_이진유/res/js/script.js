// for menu navigation animation scripts
$(".menu-item>li").mouseover(function(){
    $(this).children(".submenu").stop().slideDown();
});


$(".menu-item>li").mouseleave(function() {
    $(this).children(".submenu").stop().slideUp();
});
// end menu scripts


// for image slider scripts
var imgs=4;
var now=0; 

start();
function start(){
    //$(".imgs>img").eq(4).fadeOut(1000);
    $(".imgs>img").eq(0).siblings().css("margin-left","2000px");
    setInterval(function(){slide();},2000);
}

function slide() {
    if(imgs==now) {
        now=0;
    } else {
        now++;
    }
    //$(".imgs>img").eq(now-1).fadeOut(1000);
    $(".imgs>img").eq(now-1).css("margin-left","2000px");
    //$(".imgs>img").eq(now-1).fadeIn();
    $(".imgs>img").eq(now).css("margin-left","0px");
    // $(".imgs>img").eq(now-1).css("margin-left","-2000px");
    // $(".imgs>img").eq(now).css("margin-left","0px");
    // 
    // $(".imgs>img").eq(now).css("margin-left","0px");
}
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