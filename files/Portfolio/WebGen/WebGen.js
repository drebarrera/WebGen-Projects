function setText(code, time, time_max){
	setTimeout(function(){
		$('#code').text(code);
		document.getElementById("code_box").scrollTop += 10;
		if (time == time_max){
			setTimeout(function(){
				$('#code_box').animate({
					scrollTop: "0"
				}, 250);
			}, 250);
		}
	}, time);
}

$(document).ready(function(){
	setTimeout(function(){
		$("#code_box").animate({
			marginLeft: "0vw"
		}, 2000, function(){
			setTimeout(function(){
				code_text = `\nimport modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()
from head_webgen import *
data.title = "WebGen | Software for Efficient and Clean UI Design"

### OBJECTS ###
center = mx.C()
code_slide = mx.C()
code_box = mx.C()
code = mx.T()
heading = mx.T()
subheading = mx.T()
subsubheading = mx.T()
code = mx.T()

### CONTENT ###
body.content = [center]
center.content = [nav, code_slide]
code_slide.content = [code_box]
code_box.content = [heading, subheading, subsubheading, code]
heading.content = "WebGen"
subheading.content = "Software for Efficient and Clean UI Design."
subsubheading.content = "Check out the WebGen Python code for this page below!"
code.content = ""

### PROPERTIES ###
center.display = "flex"
center.justify_content = "center"
code_slide.id = "code_slide"
code_slide.position = "relative"
code_slide.display = "flex"
code_slide.justify_content = "center"
code_box.id = "code_box"
code_box.background_color = "rgba(60,60,60,1)"
code_box.overflow_y = "auto"
heading.color = "white"
heading.type = "h1"
heading.font_weight = "300"
subheading.color = "white"
subheading.type = "h4"
subheading.font_weight = "300"
subsubheading.font_family = "Courier New"
subsubheading.color = "white"
code.id = "code"
code.font_family = "Courier New"
code.color = "#23d5ab"
`;
				for(x = 0; x <= code_text.length; x++){
					setText(code_text.substr(0,x), 5 * x, code_text.length * 5);
				}
			}, 250);
		});
	}, 500);
	
	let page_height = $('body').height();
	let window_height = window.innerHeight;
	$(window).scroll(function(){
		if($(document).scrollTop() + 0.75 * window_height < parseInt($('#doc').css('margin-top'))){
			$("#doc").animate({
				marginLeft: "0vw"
			}, 2000);
		}
	});
});