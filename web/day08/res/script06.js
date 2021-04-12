$('#btn1').click(function(){
    $(".imgFrame img").eq(0).css("margin-left","0px");
   $(".imgFrame img").eq(0).siblings().css("margin-left","-2000px");
//    $("#img img").eq(1).css("display","none");
//    $("#img img").eq(2).css("display","none");
//    $("#img img").eq(3).css("display","none");
//    $("#img img").eq(4).css("display","none");

    $("#btn1").css("background-color","purple");
    $("#btn1").siblings().css("background-color","#333")
});

$('#btn2').click(function(){
    $(".imgFrame img").eq(1).css("margin-left","0px");
    $(".imgFrame img").eq(1).siblings().css("margin-left","-2000px");
    $("#btn2").css("background-color","purple");
    $("#btn2").siblings().css("background-color","#333")
 });
 $('#btn3').click(function(){
    $(".imgFrame img").eq(2).css("margin-left","0px");
    $(".imgFrame img").eq(2).siblings().css("margin-left","-2000px");
    $("#btn3").css("background-color","purple");
    $("#btn3").siblings().css("background-color","#333")
 });
 $('#btn4').click(function(){
    $(".imgFrame img").eq(3).css("margin-left","0px");
    $(".imgFrame img").eq(3).siblings().css("margin-left","-2000px")
    $("#btn4").css("background-color","purple");
    $("#btn4").siblings().css("background-color","#333")
 });
 $('#btn5').click(function(){
    $(".imgFrame img").eq(4).css("margin-left","0px");
    $(".imgFrame img").eq(4).siblings().css("margin-left","-2000px");
    $("#btn5").css("background-color","purple");
    $("#btn5").siblings().css("background-color","#333")
 });