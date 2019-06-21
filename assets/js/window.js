$(document).ready(function(){
	$(window).resize(function(){
		var wwindow = window.innerWidth;
		var hwindow = window.innerHeight;
		if ($(window).width() < 650) {
			$('.customSlide').css({
				"top" : $(".header").height()+20 +"px",
				"height" : "70%"
			})
		}else if($(window).width() > 650 && $(window).width() < 1024){
			$('.customSlide').css({
				"top" : $(".header").height()+20 +"px",
				"height" : "50%"
			})
		}else{
			$('.customSlide').css({
				"top" : $(".header").height()+20 +"px",
				"height" : hwindow/1.5 +"px"
			})
		}
		$(".freemodeSlide").css({
			"margin-top" : $(".header").height()+20 +"px",
			"height" : hwindow-$(".customSlide").height()-$(".header").height() +"px"
		})
	}).resize();
})