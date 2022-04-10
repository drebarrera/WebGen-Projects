$(document).ready(function(){
	toggle = 0;
	$('#navmenuicon').on('click',function(){
		if(toggle == 0){
			$('#navmenuicon rect:nth-child(1)').removeClass('navmenutoggle1-2');
			$('#navmenuicon rect:nth-child(2)').removeClass('navmenutoggle2-2');
			$('#navmenuicon rect:nth-child(3)').removeClass('navmenutoggle3-2');
			$('#navmenuicon rect:nth-child(1)').addClass('navmenutoggle1-1');
			$('#navmenuicon rect:nth-child(2)').addClass('navmenutoggle2-1');
			$('#navmenuicon rect:nth-child(3)').addClass('navmenutoggle3-1');
			setTimeout(function(){
				$('#navmenuicon rect:nth-child(1)').addClass('navmenutoggle1-static');
				$('#navmenuicon rect:nth-child(2)').addClass('navmenutoggle2-static');
				$('#navmenuicon rect:nth-child(3)').addClass('navmenutoggle3-static');
			},0.5);
			toggle = 1;
		}
		else{
			$('#navmenuicon rect:nth-child(1)').removeClass('navmenutoggle1-static');
			$('#navmenuicon rect:nth-child(2)').removeClass('navmenutoggle2-static');
			$('#navmenuicon rect:nth-child(3)').removeClass('navmenutoggle3-static');
			$('#navmenuicon rect:nth-child(1)').removeClass('navmenutoggle1-1');
			$('#navmenuicon rect:nth-child(2)').removeClass('navmenutoggle2-1');
			$('#navmenuicon rect:nth-child(3)').removeClass('navmenutoggle3-1');
			$('#navmenuicon rect:nth-child(1)').addClass('navmenutoggle1-2');
			$('#navmenuicon rect:nth-child(2)').addClass('navmenutoggle2-2');
			$('#navmenuicon rect:nth-child(3)').addClass('navmenutoggle3-2');
			toggle = 0;
		}
	});
});