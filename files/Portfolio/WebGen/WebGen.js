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
				$('#scroll_info').fadeIn(500);
				code_text = `\nimport modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()
from head_projects import *
data.title = "WebGen | Software for Efficient and Clean UI Design"
from footer_projects import *
import importlib
importlib.reload(sys.modules['footer_projects'])

### OBJECTS ###
header = Header('WebGen','https://www.drebarrera.com/webgen/',['Download','Code','Creator'],['https://www.github.com/drebarrera/webgen/','https://www.drebarrera.com/webgen/','https://www.drebarrera.com/'],[None, None, None])
center = mx.C()
webgen_title = mx.T()
scroll_info = mx.T()
code_slide = mx.C()
code_box = mx.C()
code = mx.T()
heading = mx.T()
subheading = mx.T()
subsubheading = mx.T()
code = mx.T()
documentation = mx.C()
doc_title = mx.T()
doc_description = mx.T()
tutorial_title = mx.T()
tutorial = mx.X()
doc_content_frame = mx.C()
doc_content = mx.X()
footer = Footer('WebGen 2022')

### CONTENT ###
body.content = [center, footer]
center.content = [header, webgen_title, scroll_info, code_slide]
webgen_title.content = "WEBGEN"
scroll_info.content = "Scroll for More Content"
code_slide.content = [code_box, documentation]
code_box.content = [heading, subheading, subsubheading, code]
heading.content = "WebGen"
subheading.content = "Software for Efficient and Clean UI Design."
subsubheading.content = "Check out the WebGen Python code for this page below!"
code.content = ""
documentation.content = [doc_title, doc_description, tutorial_title, tutorial, doc_content_frame]
doc_title.content = "- DOCUMENTATION -"
doc_description.content = 'WebGen is a custom Python to User Interface compiler with the goal of making website and app design cleaner and more efficient.  WebGen uses Python classes to represent HTML elements, creating repeated structures much more reliably than copy/paste. Javascript, CSS, and PHP global files can be created and linked to pages, giving creators the ability to use the same pieces of code on every site. WebGen operates much more effectively than programming from scratch in HTML, while still presenting the customizable flexibility of creating a website through code. Created by <a href="https://www.drebarrera.com" target="_blank">Dre Barrera</a>.'
tutorial_title.content = 'Tutorial Video'
tutorial.content = '<iframe width="560" height="315" style="position: aboslute;" src="https://www.youtube.com/embed/s2-kPcNGaTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
doc_content_frame.content = [doc_content]
doc_content.content = "<div style="color:rgba(60,60,60,1); font-size: 2vh;"><h2>Setting Up WebGen</h2>..."

### PROPERTIES ###
center.id = "center"
center.display = "flex"
center.justify_content = "center"
center.position = "relative"
webgen_title.id = "webgen_title"
webgen_title.color = "rgba(230,230,230,1)"
webgen_title.position = "fixed"
scroll_info.id = "scroll_info"
scroll_info.color = "rgba(60,60,60,1)"
scroll_info.position = "fixed"
scroll_info.font_family = "Courier New"
code_slide.id = "code_slide"
code_slide.position = "relative"
code_slide.display = "flex"
code_slide.justify_content = "center"
code_slide.flex_wrap = "wrap"
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
documentation.id = "doc"
documentation.background_color = "rgba(245,245,245,1)"
documentation.display = "flex"
documentation.flex_wrap = "wrap"
documentation.justify_content = "center"
documentation.align_content = "flex-start"
documentation.position = "relative"
documentation.z_index = "5"
doc_title.id = "doc_title"
doc_title.color = "rgba(60,60,60,1)"
doc_title.font_weight = "300"
doc_description.id = "doc_description"
doc_description.color = "rgba(60,60,60,1)"
doc_description.font_weight = "300"
doc_description.font_weight = "300"
doc_description.text_align = "center"
tutorial_title.id = "tutorial_title"
tutorial_title.text_align = "center"
doc_content_frame.id = "doc_content_frame"

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
		if($(document).scrollTop() + 0.75 * window_height > parseInt($('#doc').css('margin-top'))){
			$("#doc").animate({
				marginLeft: "0vw"
			}, 1500);
		}
	});
});