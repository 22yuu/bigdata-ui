var imgs = 4;
var now = 0;
var play;
var sp = screen.width/2-300; // start point
var prevIndex;
// 멈춤모드인지 플레이모드인지를 판별하는 변수필요.
// 플레이모드이면 true, 멈춤모드이면 false;

var mode = true;
start();

$(".btn_next a").click(function(){
    if(imgs==now){
        now=0;
    }else{
        now++;
    }
    clearInterval(play);
    curr_slide(now);
    if(mode==true){
        play=setInterval(function(){slide();},2000);
    }
    prevIndex=now;
});

$(".btn_prev a").click(function(){
    if(now==0){
        now=4;
    }else{
        now--;
    }
    clearInterval(play);
    curr_slide(now);
    if(mode==true){
        play=setInterval(function(){slide();},2000);
    }
    prevIndex=now;
});

$(".btn_play").click(function(){
    clearInterval(play);
    $(this).css("display","none");
    $(".btn_stop").css("display","block");
    mode=false;
});

$(".btn_stop").click(function(){
    $(this).css("display","none");
    $(".btn_play").css("display","block");
    play=setInterval(function(){slide();},2000);
    mode=true;
});

$("#btn_dot .dot").click(function(){
    now=$(this).index(); //
    clearInterval(play); //pause
    curr_slide(now);
    if(mode==ture) { // 멈춤 상태에서 버튼 클릭 시 슬라이드 이미지 안 움직이게
        play=setInterval(function(){slide();},2000);
    }
    // prevIndex = now;
    // $(this).css("background-color","purple");
    // $(this).siblings().css("background-color","#aaa");
});

function start() {
    $(".btn_play").css("display","block");
    $(".dot").eq(0).css("background-color","purple");
    $(".imgs>img").eq(0).css({"left":-1220+sp});
    $(".imgs>img").eq(1).css({"left":-610+sp});
    $(".imgs>img").eq(2).css({"left":0+sp});
    $(".imgs>img").eq(3).css({"left":610+sp});
    $(".imgs>img").eq(4).css({"display":"block","left":1220+sp});
    prevIndex=0;
    play = setInterval(function(){slide();},2000);
}
function slide() {
    if(imgs==now){
        now=0;
    } else {
        now++;
    }
    curr_slide(now);
}

function curr_slide(e) {
    if(e==1) {
        $(".dot").eq(1).css("background-color","purple");
        $(".dot").eq(prevIndex).css("background-color","#aaa");
        prevIndex=1;
        // $(".dot").eq(0).css("background-color","#aaa");
        $(".imgs>img").eq(1).css({"left":-1220+sp});
        $(".imgs>img").eq(2).css({"left":-610+sp});
        $(".imgs>img").eq(3).css({"left":0+sp});
        $(".imgs>img").eq(4).css({"left":610+sp});
        $(".imgs>img").eq(0).css({"display":"block","left":1220+sp});
    } else if(e==2) {
        $(".dot").eq(2).css("background-color","purple");
        $(".dot").eq(prevIndex).css("background-color","#aaa");
        prevIndex=2;
        // $(".dot").eq(1).css("background-color","#aaa");
        $(".imgs>img").eq(2).css({"left":-1220+sp});
        $(".imgs>img").eq(3).css({"left":-610+sp});
        $(".imgs>img").eq(4).css({"left":0+sp});
        $(".imgs>img").eq(0).css({"left":610+sp});
        $(".imgs>img").eq(1).css({"display":"block","left":1220+sp});
    } else if(e==3) {
        $(".dot").eq(3).css("background-color","purple");
        $(".dot").eq(prevIndex).css("background-color","#aaa");
        prevIndex=3;
        //$(".dot").eq(2).css("background-color","#aaa");
        $(".imgs>img").eq(3).css({"left":-1220+sp});
        $(".imgs>img").eq(4).css({"left":-610+sp});
        $(".imgs>img").eq(0).css({"left":0+sp});
        $(".imgs>img").eq(1).css({"left":610+sp});
        $(".imgs>img").eq(2).css({"display":"block","left":1220+sp});
    } else if(e==4) {
        $(".dot").eq(4).css("background-color","purple");
        $(".dot").eq(prevIndex).css("background-color","#aaa");
        prevIndex=4;
        //$(".dot").eq(3).css("background-color","#aaa");
        $(".imgs>img").eq(4).css({"left":-1220+sp});
        $(".imgs>img").eq(0).css({"left":-610+sp});
        $(".imgs>img").eq(1).css({"left":0+sp});
        $(".imgs>img").eq(2).css({"left":610+sp});
        $(".imgs>img").eq(3).css({"display":"block","left":1220+sp});
    } else if(e==0) {
        $(".dot").eq(0).css("background-color","purple");
        $(".dot").eq(prevIndex).css("background-color","#aaa");
        prevIndex=0;
        //$(".dot").eq(4).css("background-color","#aaa");
        $(".imgs>img").eq(0).css({"left":-1220+sp});
        $(".imgs>img").eq(1).css({"left":-610+sp});
        $(".imgs>img").eq(2).css({"left":0+sp});
        $(".imgs>img").eq(3).css({"left":610+sp});
        $(".imgs>img").eq(4).css({"display":"block","left":1220+sp});
    }
}