const title = 'dre barrera';

function titleSet(text, time){
	setTimeout(function(){	
		$('#title').html(text + '_');
	}, time);
}

function titleType(){
	for(x = 0; x < title.length; x++){
		titleSet(title.slice(0,x+1), x * 100);
	}
	setTimeout(function(){	
		titleRecurse();
	}, (title.length * 100) + 500);
}


function titleRecurse(){
	titleReturn = Math.floor(Math.random() * (title.length - 1) + 1);
	for(x = title.length; x > title.length - titleReturn; x--){
		titleSet(title.slice(0,x+1), (title.length - x) * 100);
	}
	setTimeout(function(){	
		for(x = x; x < title.length; x++){
			titleSet(title.slice(0,x+1), x * 100);
		}
	}, (titleReturn * 100) + 100);
	
	setTimeout(function(){	
		titleRecurse();
	}, (2 * (titleReturn * 100) + 2000))
}


$(document).ready(function(){
	setTimeout(function(){
		$('#background').animate({
			opacity: 0.6
		}, 500);
	},500);

	for(x = 0; x < 6; x++){
		setTimeout(function(y){
			if(y == 0){
				$('#title').animate({
					left: '0vw'
				}, 250, function(){
					setTimeout(function(){
						titleType();
					}, 500);
				});
			}
			else {
				$('#link'+(y-1)).animate({
					left: '0vw'
				}, 250);
			}
		}, 1000 + x * 300, x);
	}
});