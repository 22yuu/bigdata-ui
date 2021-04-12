$(".menu>li").mouseover(function(){
	$(this).children(".submenu2").stop().slideDown();
})

$(".menu>li").mouseleave(function(){
	$(this).children(".submenu2").stop().slideUp();
})