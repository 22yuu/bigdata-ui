$(document).ready(function(){
	/* img slider */
	var imgs=4;
	var now=0;

	start();
	function start(){
		$(".imgs li").eq(0).siblings().css("opacity","0");

		setInterval(function(){
			slide();
		}, 2000)
	}

	function slide() {
		if(now == imgs) {
			now = 0;
		} else {
			now++;
		}
		$(".imgs li").eq(now-1).stop().animate({"opacity": "0"},2000);
		$(".imgs li").eq(now).stop().animate({"opacity": "1"},2000);
	}
});
