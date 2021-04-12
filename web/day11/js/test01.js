
$(".menu>li").mouseenter(function(){
    $(".submenu").stop().slideDown();
});

$(".submenu").mouseleave(function(){
    $(".submenu").stop().slideUp();
});