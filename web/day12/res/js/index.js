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