// 사용자가 특정 메인메뉴로 마우스를 옮겼을 때.
$(".menu>li").mouseover(function(){
    $(this).children(".submenu").stop().slideDown();
});

// 사용자가 특정 메인메뉴에서 마우스를 빼갔을 때.
$(".menu>li").mouseleave(function() {
    $(this).children(".submenu").stop().slideUp();
});