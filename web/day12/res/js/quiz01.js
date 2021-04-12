var imgs = 4;
var now = 0;
start();
function start() {
    $(".imgs p").eq(0).css("top","0px");
    $(".imgs p").eq(1).css("top","20px");
    $(".imgs p").eq(2).css("top","40px");
    $(".imgs p").eq(3).css("top","60px");
    $(".imgs p").eq(4).css("top","-20px");
    setInterval(function(){slide();}, 2000);
}

function slide() {
    /* 세련된 소스는 아님 */ 
    if(imgs==now) {
        now = 0;
    } else {
        now++;
    }
    if(now==1) {
        $(".imgs p").eq(1).css("top","0px");
        $(".imgs p").eq(2).css({"display":"block", "top":"20px"});
        $(".imgs p").eq(3).css("top","40px");
        $(".imgs p").eq(4).css({"display":"none", "top":"60px"});
        $(".imgs p").eq(0).css("top","-20px");
    } else if (now==2) {
        $(".imgs p").eq(2).css("top","0px");
        $(".imgs p").eq(3).css({"display":"block", "top":"20px"});
        $(".imgs p").eq(4).css("top","40px");
        $(".imgs p").eq(0).css({"display":"none", "top":"60px"});
        $(".imgs p").eq(1).css("top","-20px");
    } else if (now==3) {
        $(".imgs p").eq(3).css("top","0px");
        $(".imgs p").eq(4).css({"display":"block", "top":"20px"});
        $(".imgs p").eq(0).css("top","40px");
        $(".imgs p").eq(1).css({"display":"none", "top":"60px"})
        $(".imgs p").eq(2).css("top","-20px");
    } else if (now==4) {
        $(".imgs p").eq(4).css("top","0px");
        $(".imgs p").eq(0).css({"display":"block", "top":"20px"});
        $(".imgs p").eq(1).css("top","40px");
        $(".imgs p").eq(2).css({"display":"none", "top":"60px"});
        $(".imgs p").eq(3).css("top","-20px");
    } else {
        $(".imgs p").eq(0).css("top","0px");
        $(".imgs p").eq(1).css({"display":"block", "top":"20px"});
        $(".imgs p").eq(2).css("top","40px");
        $(".imgs p").eq(3).css({"display":"none", "top":"60px"});
        $(".imgs p").eq(4).css("top","-20px");
    }
}