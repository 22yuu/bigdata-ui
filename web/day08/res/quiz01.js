$('#btn1').click(function(){
    $(".imgSlide img").eq(0).css("margin-left","0px");
    $(".imgSlide img").eq(0).siblings().css("margin-left","-2000px");
//    $("#img img").eq(1).css("display","none");
//    $("#img img").eq(2).css("display","none");
//    $("#img img").eq(3).css("display","none");
//    $("#img img").eq(4).css("display","none");
});

$('#btn2').click(function(){
    $(".imgSlide img").eq(1).css("margin-left","0px");
    $(".imgSlide img").eq(1).siblings().css("margin-left","-2000px");
 });
 $('#btn3').click(function(){
    $(".imgSlide img").eq(2).css("margin-left","0px");
    $(".imgSlide img").eq(2).siblings().css("margin-left","-2000px");
 });
 $('#btn4').click(function(){
    $(".imgSlide img").eq(3).css("margin-left","0px");
    $(".imgSlide img").eq(3).siblings().css("margin-left","-2000px")
 });
 $('#btn5').click(function(){
    $(".imgSlide img").eq(4).css("margin-left","0px");
    $(".imgSlide img").eq(4).siblings().css("margin-left","-2000px");
 });