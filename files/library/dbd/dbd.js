function rotate_navlogo(navlogo_height) {
	var navtitle_text = 'designed\nby\ndre';
	var scroll = $(window).scrollTop();
	var navlogo_outerHeight = $("#navlogo").outerHeight();
	if (scroll == 0){
		var rotate = 0;
		var opacity = 1;
		var text = 0;
		var height = 0;
		$("#navlogo").removeClass('navlogodynamic');
		$("#navlogo").removeClass('navlogostatic');
		$(".navbrand").removeClass('navbrandstatic');
		$(".navbrand").removeClass('navbranddynamic');
	} 
	else if (scroll <= 90){
  		var rotate = -scroll;
		var opacity = 1 - (scroll / 90);
		var text = scroll * navtitle_text.length / 90;
		$("#navlogo").addClass('navlogodynamic');
		$(".navlogodynamic").get(0).style.setProperty('--navlogorotate',rotate + 'deg');
		$(".navlogodynamic").get(0).style.setProperty('--navlogoheight',(navlogo_height + scroll / 4.5) + 'px');
		$("#navlogo").removeClass('navlogostatic');
		$(".navbrand").addClass('navbranddynamic');
		$(".navbranddynamic").get(0).style.setProperty('--navbrandheight',navlogo_outerHeight + 'px');
		$(".navbrand").removeClass('navbrandstatic');
	}
	else{
		var rotate = -90;
		var opacity = 0;
		var text = navtitle_text.length;
		$("#navlogo").removeClass('navlogodynamic');
		$("#navlogo").addClass('navlogostatic');
		$(".navbrand").removeClass('navbranddynamic');
		$(".navbrand").addClass('navbrandstatic');
		$(".navbrandstatic").get(0).style.setProperty('--navbrandheight',navlogo_outerHeight + 'px');
	}
	
	$('#navtitle').text(navtitle_text.slice(0, (navtitle_text.length - text)));
};

function redirect(url){
	$('#page').fadeOut(500, function(){
		location.href = url;
	});
}

$(document).ready(function(){
	$('#page').fadeIn(500);
	var navlogo_height = $("#navlogo").height();
	var navlogo_outerHeight_initial = $("#navlogo").outerHeight();
	$(window).scroll(function(){
		rotate_navlogo(navlogo_height);
	});
});

