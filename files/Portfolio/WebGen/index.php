<?php $visitInfo = $_SERVER['REQUEST_URI'].',';
$visitInfo .= $_SERVER['REMOTE_ADDR'];
date_default_timezone_set("America/New_York");
$visitInfo .= ','.date("Y-m-d;h:i:sA").','.$email.PHP_EOL;
file_put_contents('../data/visitInfo.txt', $visitInfo, FILE_APPEND); ?><!DOCTYPE html><html><head><title>WebGen | Software for Efficient and Clean UI Design</title><meta charset="utf-8"><meta name="description" content="Default WebGen Page"><meta name="keywords" content=""><meta name="author" content="Andres Barrera"><meta name="viewport" content="width=device-width, initial-scale=1"><script src="..\JQuery.js"></script><script src="..\JQuery-UI.js"></script><script>function setText(code, time, time_max){
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
});</script><style>body, html{ 	height: 100%; }  p, h1, h4 { 	margin-block-start: 0em; 	margin-block-end: 0em; }  #center{ 	width: 100%; 	height: auto; 	display: block; }  #webgen_title{ 	font-size: 17.5vh; 	margin-top: 27.5vh; }  #scroll_info{ 	font-size: 3vh; 	margin-top: 85vh; 	display: none; }  #code_slide{ 	width: 100vw; 	height: auto; }  #code_box{ 	width: 70vw; 	height: 600px; 	margin-top: 140px; 	padding: 20px; 	border-radius: 10px; 	font-size: 3vh; 	margin-left: 150vw; }  #code_box > p { 	font-size: 2vh; }  #code { 	width: 100%; 	height: auto; 	white-space: pre-wrap; }  #doc{ 	width: 60vw; 	height: auto; 	margin-top: -5vh; 	padding: 20px; 	border-radius: 10px; 	margin-left: 200vw; }  #doc_title{ 	font-size: 4vh; 	display: inline; }  #doc_description{ 	font-size: 2vh; 	padding: 2vh; }  #tutorial_title{ 	font-size: 3vh; 	padding: 1vh; 	width: 100%; }  #doc_content_frame{ 	width: 100%; 	height: auto; 	padding: 25px; }  .code_block{ 	white-space: pre-wrap; 	background-color: rgba(60,60,60,1); 	color: #23d5ab; 	padding: 10px; 	overflow-x: auto; 	font-family: Courier New;	 }  @media only screen and (max-width:1000px) {  	#webgen_title{  		font-size:10vh;  	}  	#code_box{ 		height: 400px; 		margin-left: 0px; 	} 	#doc{ 		margin-left: 0px; 		width: 90%; 		margin-top: 10px; 	} 	#doc_title{ 		font-size: 3vh; 	} 	#footer{ 		width: 100%; 	} }</style><style>p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  #nav{ 	width: 100%; 	display: flex; 	justify-content: center; 	position: fixed; 	z-index: 101; 	padding: 2vh; }  #nav_center{ 	position: relative; 	width: 75%; 	display: flex; 	justify-content: center; 	border-bottom: 2px solid #d8d8d8; 	padding-bottom: 1vh; }  #menu{ 	position: relative; 	display: inline-block; }  #htitle{ 	font-size: 4.25vh; 	margin-top: 0.5vh; 	text-decoration: none; 	color: #00334d; 	position: relative; 	display: inline-block; 	padding-right: 14vw; }  @media only screen and (max-width:1000px) { 	#htitle{ 		padding-right: 5vw; 	}  	#nav_center{ 		width: 90%; 	} }  .hoption{ 	display: inline-block; }  .button{ 	position: relative; 	display: inline-block; 	padding: 1.25vh; 	border-radius: 1vh; 	cursor: pointer; 	color: white; 	text-decoration: none; 	font-size: 1.75vh; 	margin: 1vh; 	margin-left: 1.5vh; 	margin-right: 1.5vh; 	filter: drop-shadow(0 0.2rem 0.25rem rgba(0, 0, 0, 0.25)); }  .button > p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  .buttonBlue{ 	background-color: #005580; 	border: 2px solid #005580; }  .buttonBlue:hover{ 	background-color: white; 	color: #005580; }   .buttonRedRing{ 	background-color: white; 	border: 2px solid #ff5938; 	color: #ff5938; }  .buttonRedRing:hover{ 	background-color: #ff5938; 	color: white; }  .buttonRed{ 	background-color: #ff5938; 	border: 2px solid #ff5938; }  .buttonRed:hover{ 	background-color: white; 	color: #ff5938; }  .buttonYellow{ 	background-color: #ffba00; 	border: 2px solid #ffba00; }  .buttonYellow:hover{ 	background-color: white; 	color: #ffba00; }  .buttonPurple{ 	background-color: rgb(138, 74, 255); 	border: 2px solid rgb(138, 74, 255); }  .buttonPurple:hover{ 	background-color: white; 	color: rgb(138, 74, 255); }  .pseudoLink{ 	color: #005580; 	text-decoration: none; 	cursor: pointer; }  .pseudoLink:hover{ 	color: #ff5938; }</style><script>/// Custom Alert Generation ///
function alert(msg){
	$("#alert").css('display', 'block');
	document.getElementById('alertText').innerHTML = msg+'<br><br><span style="padding: 5px; padding-left: 12px; padding-right: 12px; border-radius: 5px; cursor: pointer;">OK</span>';
	$('#alertText > span').click(function(){
		$("#alert").css('display', 'none');
	});
}</script><style>#alert{ 	max-width: 450px; 	width: 80%; 	height: auto; 	position: fixed; 	z-index; 50; 	margin-top: 30vh; 	display: none; 	padding: 2.5vh; 	padding-left: 2.5vh; 	padding-right: 2.5vh; 	border-radius: 2vh; 	font-size: 3vh; 	font-weight: 500; 	text-align: center; 	top: 0; }  /*@media only screen and (max-width:1000px) { 	#alert{ 		margin-top: 300px; 	} }*/  #alertText > span{ 	background-color: #ff5938; 	color: white; }  #alertText > span:hover{ 	background-color: white; 	border: 2px solid #ff5938; 	color: black; }</style><style>p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  #nav{ 	width: 100%; 	display: flex; 	justify-content: center; 	position: fixed; 	z-index: 101; 	padding: 2vh; }  #nav_center{ 	position: relative; 	width: 75%; 	display: flex; 	justify-content: center; 	border-bottom: 2px solid #d8d8d8; 	padding-bottom: 1vh; }  #menu{ 	position: relative; 	display: inline-block; }  #htitle{ 	font-size: 4vh; 	text-decoration: none; 	color: #005580; 	position: relative; 	display: inline-block; 	padding-right: 20vw; 	margin-top: 1vh; }  @media only screen and (max-width:1000px) { 	#htitle{ 		padding-right: 5vw; 	}  	#nav_center{ 		width: 90%; 	} }  .hoption{ 	display: inline-block; }  .button{ 	position: relative; 	display: inline-block; 	padding: 1.25vh; 	border-radius: 1vh; 	cursor: pointer; 	color: black; 	text-decoration: none; 	font-size: 1.75vh; 	margin: 1vh; 	margin-left: 1.5vh; 	margin-right: 1.5vh; 	width: 10vh; 	height: 4vh; 	filter: drop-shadow(0 0.2rem 0.25rem rgba(0, 0, 0, 0.25)); 	border: 2px solid transparent; 	background-image: linear-gradient(white, white),                      linear-gradient(-45deg, #ff3300, #ffcc00, #23a6d5, #23d5ab); 	background-size: 400% 400%;   	background-origin: border-box;   	background-clip: content-box, border-box;   	padding: 0px; 	 }  @keyframes gradient { 	0% { 		background-position: 0% 50%; 	} 	50% { 		background-position: 100% 50%; 	} 	100% { 		background-position: 150% 50%; 	} }  .button > p{ 	margin-block-start: 0px; 	margin-block-end: 0px; 	width: 10vh; 	height: 4vh; 	display: flex; 	justify-content: center; 	align-items: center; }  .button:hover{ 	animation: gradient 1s ease; 	height: 4.2vh; 	width: 10.2vh; }  .button > p:hover{ 	height: 4.2vh; 	width: 10.2vh; }  .pseudoLink{ 	color: #005580; 	text-decoration: none; 	cursor: pointer; }  .pseudoLink:hover{ 	color: #ff5938; }</style><style>#footer{ 	margin-top: 25px; 	width: 100%; 	padding: 10px; }  #footer_title{ 	font-size: 3vh; }  #footer_center{ 	width: 95%; }  #footer_center > div > a{ 	color: #23d5ab; 	text-decoration: none; }  #footer_center > div > a:visited{ 	color: #23d5ab; }  #footer_center > div > a:hover{ 	color: white; 	text-decoration: underline; }  </style></head>
<body style="margin:0;background-color:white;overflow-x:hidden;font-family:Helvetica;color:black;"><div id="center" style="overflow-x:visible;overflow-y:visible;display:flex;justify-content:center;position:relative;"><div id="nav" style="background-color:#fefefe;overflow-x:visible;overflow-y:visible;"><div id="nav_center" style="overflow-x:visible;overflow-y:visible;"><a id="htitle" href="" target="_self" style=""><p style="">WebGen</p></a><div id="menu" style="overflow-x:visible;overflow-y:visible;"><a class="button" href="https://www.github.com/drebarrera/webgen/" target="_self" style=""><p style="">Download</p></a><a class="button" href="https://www.drebarrera.com/webgen/" target="_self" style=""><p style="">Code</p></a><a class="button" href="https://www.drebarrera.com/" target="_self" style=""><p style="">Creator</p></a></div></div></div><p id="webgen_title" style="color:rgba(230,230,230,1);position:fixed;">WEBGEN</p><p id="scroll_info" style="color:rgba(60,60,60,1);position:fixed;font-family:Courier New;">Scroll for More Content</p><div id="code_slide" style="overflow-x:visible;overflow-y:visible;position:relative;display:flex;justify-content:center;flex-wrap:wrap;"><div id="code_box" style="background-color:rgba(60,60,60,1);overflow-x:visible;overflow-y:auto;"><h1 style="color:white;font-weight:300;">WebGen</h1><h4 style="color:white;font-weight:300;">Software for Efficient and Clean UI Design.</h4><p style="font-family:Courier New;color:white;">Check out the WebGen Python code for this page below!</p><p id="code" style="font-family:Courier New;color:#23d5ab;"></p></div><div id="doc" style="background-color:rgba(245,245,245,1);overflow-x:hidden;overflow-y:visible;display:flex;flex-wrap:wrap;justify-content:center;align-content:flex-start;position:relative;z-index:5;"><p id="doc_title" style="color:rgba(60,60,60,1);font-weight:300;">- DOCUMENTATION -</p><p id="doc_description" style="color:rgba(60,60,60,1);font-weight:300;text-align:center;">WebGen is a custom Python to User Interface compiler with the goal of making website and app design cleaner and more efficient.  WebGen uses Python classes to represent HTML elements, creating repeated structures much more reliably than copy/paste. Javascript, CSS, and PHP global files can be created and linked to pages, giving creators the ability to use the same pieces of code on every site. WebGen operates much more effectively than programming from scratch in HTML, while still presenting the customizable flexibility of creating a website through code. Created by <a href="https://www.drebarrera.com" target="_blank">Dre Barrera</a>.</p><p id="tutorial_title" style="text-align:center;">Tutorial Video</p><iframe width="560" height="315" style="position: aboslute;" src="https://www.youtube.com/embed/s2-kPcNGaTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div id="doc_content_frame" style="overflow-x:visible;overflow-y:visible;"><div style="color:rgba(60,60,60,1); font-size: 2vh;"><h2>Setting Up WebGen</h2>
All that is needed to get started is to download the repository with the download link in the header! No imported libraries necessary! There are three key files necessary to run WebGen: main.py, modules.py, and comp.py.
<ul>
<li><code>main.py</code> - This file holds the interface commands (see Programming With WebGen) used to create, organize, and export files. Run this file to start your WebGen interface and begin programming.</li>
<li><code>modules.py</code> - This file contains the modular python commands (see Programming With WebGen) used to create HTML elements with Python. To add a new custom HTML element, create a new class. Assign custom style properties, such as "position" or "background_color" (underscores are used instead of hyphens). Include a <code>c()</code> function to be called to compile the element. The <code>c()</code> function should return an HTML element as a string.</li>
<li><code>comp.py</code> - This file contains the code used to compile the Python files created in the WebGen interface into HTML. Using the <code>c()</code> functions defined in <code>modules.py</code>, the head and body of the HTML document is created, including external JavaScript, CSS, and PHP scripts.</li>
</ul>

<h2>Quick Start Guide to WebGen</h2>
<ol>
  <li>Download the WebGen Repository. Run main.py with the IDE of your choice. The WebGen interface should appear in your console.</li>
  <li>Use the <code>f(folder, filename)</code> command to create a new project named <code>folder</code> with the webpage named <code>filename</code>.</li>
  <li>Use the <code>e</code> command to start editing your webpage. This command should create a new Python file and open it for editing.</li>
  <li>Create HTML objects by assigning Python variables to class objects with the format <code>html_element = mx.C()</code>, where <code>C()</code> is the div container class and <code>mx.</code> refers to the imported modules file. For a list of classes available, use the <code>lm</code> command in the WebGen console interface.</li>
  <li>Assign content to your HTML objects with nested lists and strings. For more information on content assignment, see the Modular Commands section below.</li>
  <li>Edit style properties of your HTML content by using the syntax <code>html_element.property = "value"</code>. For a list of default properties applied to a class, use the <code>mod m</code> command, where <code>m</code> is the class in reference. For more information on property assignment and property defaults, see the Modular Commands section below.</li>
  <li>Use the <code>r</code> command to compile and load your webpage your browser.</li>
  <li>Use the <code>css</code> and <code>js</code> commands to create CSS and JavaScript files to be compiled with your HTML webpage.</li>
  <li>Use the <code>exit</code> command to return to the main WebGen interface. From here, you can change to another project, webpage file, or create a global file.</li>
  <li>When ready to export your webpages, use the <code>exportf(filename, destination)</code> or <code>export(destination)</code> explained in detail in the programming with WebGen section below.</li>
</ol>
<h3>Example Webpage with WebGen: See the <a href="https://drebarrera.github.io/webgen-example/index.html">Compiled HTML Page</a></h3>
<h5>With <code>e</code> File Command: (Python)</h5>
<p>This code is available in [files > example > example_page] of this repository as <code>example_page.py</code>.</p>

<div class="code_block">import modules as mx
import sys
import os
homedir = os.getcwd() + r'/files/Portfolio/'
sys.path.append(homedir)
data = mx.Data()
body = mx.Body()

### OBJECTS ###
nav = mx.Nav()
nav_title = mx.T()
nav_space = mx.X() # Custom HTML space
page_content = mx.C()
heading = mx.T()
subheading = mx.T()
paragraph = mx.T()
gitHub_link = mx.Link()
gitHub_linkText = mx.T()

### CONTENT ###
body.content = [nav, page_content] # Assign containers to body content
nav.content = [[nav_title, nav_space]]
nav_title.content = "WebGen Example"

# Create three nav option links named "nav_option_i"
text_content = ["WebGen Github","Creator's Portfolio","Contact Creator"]
src_content = ["https://github.com/drebarrera/WebGen/","https://www.drebarrera.com","https://www.drebarrera.com/contact"]
for i in range(1,4):
    objName = "nav_option_"+str(i)
    exec(objName + ' = mx.Link()')                                  # 1. Create link object
    exec(objName + 'Text = mx.T()')                                 # 2. Create text object
    exec(objName + 'Text.content = "' + text_content[i - 1] + '"')  # 3. Assign text_content[i - 1] to text object
    exec(objName + '.content = [' + objName + 'Text]')              # 4. Assign text object to link object content
    exec(objName + '.cl = "button buttonRed"')                      # 5. Assign button classes to link object
    exec(objName + '.src = "' + src_content[i - 1] + '"')           # 6. Assign source to link object
    exec('nav.content[0].append('+ objName +')')                    # 7. Append link object to nav content
    
page_content.content = [heading, subheading, paragraph, gitHub_link] # Assign objects to page content
heading.content = "Hello World"
subheading.content = "Webpage Made With WebGen"
paragraph.content = "This webpage was made with WebGen - a custom Python to User Interface compiler with the goal of making website and app design cleaner and more efficient.
For more information about WebGen, visit the link below."
gitHub_link.content = [gitHub_linkText]
gitHub_linkText.content = "WebGen GitHub"

### PROPERTIES ###
# Nav Components
nav.id = "nav"
nav.background_color = ""
nav.tableid = "navTable"
nav_title.type = "h1"

# Page Components
page_content.id = "pageContent"
page_content.background_color = ""
heading.type = "h2"
subheading.type = "h3"
subheading.color = "#005580"
subheading.font_weight = "500"
paragraph.padding = "10px"
paragraph.line_height = "1.2"
gitHub_link.cl = "button buttonBlue"
gitHub_link.src = "https://github.com/drebarrera/WebGen/"
</div>

<h5>With <code>css</code> File Command: (CSS)</h5>
<p>This code is available in [files > example > example_page] of this repository as <code>example_page.css</code>.</p>

<div class="code_block">body {
	display: flex;
	justify-content: center;
}

p, h1, h2, h3 {
	margin-block-start: 0px;
	margin-block-end: 0px;
}

.button {
	position: relative;
	display: inline-block;
	padding: 1.25vh;
	border-radius: 1vh;
	cursor: pointer;
	color: white;
	text-decoration: none;
	font-size: 1.75vh;
	margin: 1vh;
	margin-left: 1.5vh;
	margin-right: 1.5vh;
	filter: drop-shadow(0 0.2rem 0.25rem rgba(0, 0, 0, 0.25));
}

.buttonRed {
	background-color: #ff5938;
	border: 2px solid #ff5938;
}

.buttonRed:hover {
	background-color: white;
	color: #ff5938;
}

.buttonBlue{
	background-color: #005580;
	border: 2px solid #005580;
}

.buttonBlue:hover{
	background-color: white;
	color: #005580;
}

#nav {
	display: flex;
	justify-content: center;
	width: 100vw;
	background-color: #fafafa;
	border-bottom: 1px solid #f0f0f0;
}

#navTable_0_0{
	text-align: center;
}

#navTable_0_1 {
	width: 6vw; /* Adjust the nav_space size */
}

#pageContent {
	border: 2px solid #005580;
	padding: 25px;
	margin-top: 100px;
	max-width: 700px;
	width: 90vw;
	position: absolute;
}
</div>

<h2>Programming With WebGen</h2>
There are three different components to WebGen:
<ol>
<li>Interface Commands - Commands used to create, organize, and export files.</li>
<li>Modular Python Commands - Python commands used to create HTML elements and adjust style properties within files.</li>
<li>Global Programming - Programming used to implement JavaScript, CSS, and PHP into compiled webpages.</li>
</ol>

<h3>Interface Commands</h3>
Interface commands are used to create, organize, edit, delete, compile, and export files. Main Commands are used to select files, while File Commands are used when working on individual pages.
<h5>Main Commands</h5>
<ul>
<li><code>help</code> - General help command. Using this command will list the options for selection and instruction.</li>
<li><code>f(folder, filename)</code> - Open or create and open (if the file does not already exist) a file. <code>folder</code> is the project name, while <code>filename</code> is the name of the page to be created. Once opened, the WebGen interface will switch to accepting File Commands (see File Commands).</li>
<li><code>gf(folder, global_filename)</code> - Similar to <code>f(folder, filename)</code>, this command will open or create and open a global file. A global file is a file under the name <code>filename</code>, which is accessible to all of the pages within the project folder, <code>folder</code> by importing with the command <code>from global_filename import *</code> within individual Python scripts. Global files cannot be individually compiled with the <code>r</code> command (see File Commands). PHP scripts are exclusively included via global files (see FAQs).</li>
<li><code>fdir</code> - This command opens the file directory where WebGen is held.</li>
<li><code>kill(folder)</code> - The kill command is used to completely delete a project with the name <code>folder</code>. This includes all webpages, global files, and other content associated with the project. Once performed, the effects of this command are final.</li>
<li><code>exportf(folder, destination)</code> - The export command will export an entire project with the name <code>folder</code> to the file location input as <code>destination</code>. The file will be exported as a zip file. When referencing the destination path, make sure to prepend with the letter r, like so: <code>r"THIS\IS\A\PATH"</code></li>
<li><code>exit</code> - The exit command is used to exit a file and return to the WebGen interface or quit the WebGen interface and end the program.</li>
<li><code>restart</code> - The restart command is used to exit the WebGen interface and end the program.</li>
</ul>

<h5>File Commands</h5>
<ul>
<li><code>e</code> - The edit command, <code>e</code>, is used to edit the Python file used to define HTML elements. When using the edit command, a document window will be generated for Python coding. Every Python webfile requires the content generated on first use of the command (except for the comments). While the assignments <code>data</code> and <code>body</code> define the head and body elements of the HTML document, the comments, <code>### OBJECTS ###</code>, <code>### CONTENT ###</code>, <code>### PROPERTIES ###</code> are used to structure your code. See more below:</li>
<ul>
<li><code>### OBJECTS ###</code> - The Objects section is typically used to define the modular assignments used within the Python script. For example, <code>nav = mx.C()</code> defines a Container object referred to as <code>nav</code> and would be written in this section.</li>
<li><code>### CONTENT ###</code> - The Content section is typically where object content is assigned. Continuing from the previous example, this section would be where we would apply the code <code>body.content = [nav]</code>, placing the <code>nav</code> container within the <code>body</code> element of the page.</li>
<li><code>### PROPERTIES ###</code> - The Properties section is typically where object style properties is assigned. Continuing from the previous examples, this section would include statements such as <code>nav.background_color = "red"</code> where the style of the <code>nav</code> container includes a red background color.</li>
</ul>
<li><code>css</code> - The CSS command creates a css document to be automatically linked to the HTML page generated by the Python document. If the Python document associated with the CSS document is a global file, the global file must be imported to the main file to use the global file with the command <code>from global_filename import *</code>. (do not include file extensions)</li>
<li><code>js</code> - The JavaScript command creates a JavaScript document to be automatically linked to the HTML page generated by the Python document. If the Python document associated with the JavaScript document is a global file, the global file must be imported to the main file to use the global file with the command <code>from global_filename import *</code>. (do not include file extensions)</li>
<li><code>php</code> - The PHP command creates a PHP document associated exclusively with global files. Because the PHP document is associated with a global file, the global file must be imported to the main file to use the global file with the command <code>from global_filename import *</code> (do not include file extensions).</li>
<li><code>fdir</code> - This command opens the file directory where the project operated on is held.</li>
<li><code>images</code> - This command opens or creates and opens (if the file doesn't already exist) the file directory where images and other media elements are stored for developmental use. Use the source url "../images/image_name.jpg" to add media to elements within a Python or CSS file.</li>
<li><code>lgf</code> - This command lists all global files associated with the given project. In order to add a global file to a given webpage, use the code <code>from global_filename import *</code> in the Python document.</li>
<li><code>lm</code> - This command lists all object classes to create HTML element with Python. Classes should be prepended with <code>mx.</code> in Python files to reference the imported module file. For example, creating a text element would be done within a Python document with the code <code>text_elem = mx.T()</code>.</li>
<li><code>mod m</code> - This command lists all the default object properties associated with class <code>m</code>. To change a property's value, simply reassign the property for the given object assignment. For example, given a text element, <code>text_elem = mx.T()</code>, changing its color would be done with <code>text_elem.color = "red"</code>. Properties using hyphenation, such as <code>background-color</code> replace the hyphen with an underscore in Python scripts (ie. <code>background_color</code>).</li>
<li><code>r</code> - The refresh command, <code>r</code> compiles the Python document along with its dependencies and opens the compiled HTML webpage in a browser. This command is used to refresh the browser page when changes have been made to the Python document or its dependencies. Note: If a global file is changed, use the commands <code>import importlib</code> and <code>importlib.reload(sys.modules['global_filename'])</code> to reload global files without having to restart WebGen after each change.</li>
<li><code>kill</code> - The kill command is used to delete the webpage or global file being operated on. This does not include the global files imported to the page, but will remove the JavaScript, CSS, or PHP files directly linked to the Python document deleted. Once performed, the effects of this command are final.</li>
<li><code>export(destination)</code> - The export command will export the webpage operated on to the file location input as <code>destination</code>. The file will be exported as a zip file.</li>
<li><code>exit</code> - The exit command is used to exit a file and return to the WebGen interface or quit the WebGen interface and end the program.</li>
<li><code>restart</code> - The restart command is used to exit the WebGen interface and end the program.</li>
</ul>

<h3>Modular Commands</h3>
Modular commands refer the Python commands used to define objects and their properties. To find the modules offered by <code>modules.py</code> and the properties of said modules, use the <code>lm</code> and <code>mod m</code> commands in the WebGen interface (see File Commands above). To assign an object, follow the steps below:
<ol>
<li><code>container_elem = mx.C()</code> - Object assignment is done by assigning a variable to a class (in this example the container class, <code>C()</code>, is used). Remember to prepend the class with <code>mx.</code> to declare the object as an imported module class.</li>
<li><code>container_elem.content = [text_elem]</code> - Content assignment is done by two different methods: For container classes such as <code>C()</code> and <code>Table()</code>, the objects stored within the containers are stored within lists and are in object form (in this example, text_elem is an object within container_elem). For text-based elements, such as <code>T()</code>, the content refers to text (ie. <code> text_elem.content = "This is text"</code>).</li>
<li><code>container_elem.text_align = "center"</code> - Property assignment is done by assigning values to the style properties desired. Note that properties using hyphenation, such as <code>text-align</code> replace the hyphen with an underscore in Python scripts (ie. <code>text_align</code>). Some properties have defaults which may be overriden by reassignment. Properties such as <code>margin</code>, <code>height</code>, and <code>width</code> are considered Dynamic Properites because they typically vary by viewport dimensions. Because style properties are fixed and cannot be adjusted with CSS after being set, Dynamic Properties are restricted from being set with style properties, but instead must be adjusted with CSS or JavaScript code.</li>
</ol>

<h5>Featured Classes</h5>
<ul>
<li><code>data = mx.Data()</code> - The Data element provides the different components and metadata used in the <code>head</code> element of the webpage.</li>
<ul>

  <li><code>data.title</code> - The title of the webpage.</li>
  <li><code>data.charset</code> - The charset metadata of the webpage. Default is "utf-8".</li>
  <li><code>data.description</code> - The description metadata of the webpage.</li>
  <li><code>data.keywords</code> - The keyword metadata of the webpage. List your keywords within a list: <code>data.keywords = ['these','are','keywords']</code></li>
  <li><code>data.author</code> - The author metadata of the webpage.</li>
  <li><code>data.viewport</code> - The viewport metadata of the webpage. Default is "width=device-width, initial-scale=1".</li>
  <li><code>data.jquery_script</code> - The jquery_script property enables the use of the jQuery source file imported from the WebGen directory. Default is True. To disable, reassign to False.</li>
  <li><code>data.jquery_ui_script</code> - The jquery_ui_script property enables the use of the jQuery-UI source file imported from the WebGen directory. Default is True. To disable, reassign to False.</li>
  <li><code>data.scripts</code> - The scripts property contains a list of imported scripts via source URLs. List the imported script locations like so: <code>data.scripts = ['script1_location','script2_location']</code>.</li>
</ul>
  <p></p>
<li><code>body = mx.Body()</code> - The Body element allows for the adjustment of the style properties and content of the <code>body</code> element of the webpage.</li>
<ul>

  <li><code>body.background_color</code> - The background color of the webpage. Default is "#ffffff".</li>
  <li><code>body.overflow_x</code> - The overflow-x property of the webpage. Default is "hidden".</li>
  <li><code>body.font_family</code> - The font-family property of the webpage. Default is "Helvetica".</li>
  <li><code>body.color</code> - The color property of the webpage. Default is "black".</li>
  <li><code>body.content</code> - The content of the webpage. Body is a container object, meaning that all content should also be objects, listed in order of priority like so: <code>body.content = [element1, element2, element3]</code>.</li>
</ul>
  <p></p>
<li><code>text_elem = mx.T()</code> - The Text element generates paragraph, heading, and other text content.</li>
<ul>

  <li><code>text_elem.type</code> - The text tag represented by the element. Default is a paragraph tag, "p", but can be reassigned to "h1", "em", or other tags.</li>
  <li><code>text_elem.id</code> - The ID HTML attribute.</li>
  <li><code>text_elem.cl</code> - The Class HTML attribute.</li>
  <li><code>text_elem.content</code> - The content of the text element. Text element content is a string and can be assigned like so: <code>text_elem.content = "This is text content"</code>.</li>
</ul>
 <p></p>
<li><code>link_elem = mx.Link()</code> - The Link element generates a link container around other object content.</li>
<ul>

  <li><code>link_elem.src</code> - The href source of the link. Assign a URL to this property.</li>
  <li><code>link_elem.id</code> - The ID HTML attribute.</li>
  <li><code>link_elem.cl</code> - The Class HTML attribute.</li>
  <li><code>link_elem.target</code> - The Target HTML attribute. Default is "_self".</li>
  <li><code>link_elem.content</code> - The content of the link element. Link element content is a list of objects wrapped by the link like so: <code>link_elem.content = [element1, element2]</code>.</li>
</ul>
  
 <p></p>
<li><code>container_elem = mx.C()</code> - The Container element generates a div container with other object content.</li>
<ul>
  <li><code>container_elem.id</code> - The ID HTML attribute.</li>
  <li><code>container_elem.cl</code> - The Class HTML attribute.</li>
  <li><code>container_elem.onclick</code> - The onclick event HTML attribute.</li>
  <li><code>container_elem.onhover</code> - The onhover event HTML attribute.</li>
  <li><code>container_elem.attr</code> - This property serves to define a custom HTML attribute.</li>
  <li><code>container_elem.background_color</code> - The background color of the container. Default is "lightblue" for visibility and identification. To override for CSS adjustment, reassign to <code>container_elem.background_color = ""</code>.</li>
  <li><code>container_elem.overflow_x</code> - The overflow-x property of the container. Default is "visible".</li>
  <li><code>container_elem.overflow_y</code> - The overflow-y property of the container. Default is "visible".</li>
  <li><code>container_elem.content</code> - The content of the container element. Container element content is a list of objects wrapped by the container like so: <code>container_elem.content = [element1, element2]</code>.</li>
</ul>
  
<p></p>
<li><code>table_elem = mx.Table()</code> - The Table element generates a table with cells defined by nested lists.</li>
<ul>
  <li><code>table_elem.id</code> - The ID HTML attribute. When assigned an ID, the cells of the Table will also assume the same ID with the appended "_rowNumber_columnNumber". The default ID is "table". Thus, row 2, column 4 will have the ID "table_2_4" unless the ID is adjusted.</li>
  <li><code>table_elem.cl</code> - The Class HTML attribute. Default is ".table".</li>
  <li><code>table_elem.background_color</code> - The background color of the table. Default is "coral" for visibility and identification. To override for CSS adjustment, reassign to <code>table_elem.background_color = ""</code>.</li>
  <li><code>table_elem.content</code> - The content of the table element. Table element content is generated by a nested list of objects wrapped by the table like so: <code>table_elem.content = [[row1_col1_content, row1_col2_content, row1_col3_content], [row2_col1_content, row2_col2_content, row2_col3_content]]</code>.</li>
</ul>

<p></p>
<li><code>nav = mx.Nav()</code> - The Nav element generates a container wrapped table, which is great for creating navigational bars.</li>
<ul>
  <li><code>nav.id</code> - The ID HTML attribute of the Container. The default ID is "nav".</li>
  <li><code>nav.cl</code> - The Class HTML attribute of the Container.</li>
  <li><code>nav.tableid</code> - The ID HTML attribute of the Table. When assigned an ID, the cells of the Table will also assume the same ID with the appended "_rowNumber_columnNumber". The default ID is "navtable". Thus, row 2, column 4 will have the ID "navtable_2_4" unless the ID is adjusted.</li>
  <li><code>nav.background_color</code> - The background color of the Container. Default is "orange" for visibility and identification. To override for CSS adjustment, reassign to <code>nav.background_color = ""</code>.</li>
  <li><code>nav.position</code> - The position style property of the Container. Default is "fixed". To override for CSS adjustment, reassign to <code>nav.position = ""</code>.</li>
  <li><code>nav.z_index</code> - The z-index style property of the Container.</li>
  <li><code>nav.content</code> - The content of the Table element. Table element content is generated by a nested list of objects wrapped by the table like so: <code>nav.content = [[row1_col1_content, row1_col2_content, row1_col3_content], [row2_col1_content, row2_col2_content, row2_col3_content]]</code>.</li>
</ul>
  
<p></p>
<li><code>menu_icon = mx.Menu()</code> - The Menu element generates a 3-bar customizable svg menu icon.</li>
<ul>
  <li><code>menu_icon.id</code> - The ID HTML attribute of the Menu. The default ID is "menubutton".</li>
  <li><code>menu_icon.length</code> - The length property determines the horizontal length of the Menu in pixels. Default is "35".</li>
  <li><code>menu_icon.width</code> - The width property determines the thickness or width of the Menu bars in pixels. Default is "4".</li>
  <li><code>menu_icon.spacing</code> - The spacing property determines the height of the Menu as a percentage of the length property. Spacing is a number on a scale of 0 to 1. Default is "0.85".</li>
  <li><code>menu_icon.radius</code> - The radius property determines the border radius of the Menu bars in pixels. Default is "1.75".</li>
  <li><code>menu_icon.color</code> - The color of the Menu. The default is "black".</li>
</ul>

  <p></p>
<li><code>icon = mx.Icon()</code> - The Icon element generates a custom svg icon with a preconceived or user-defined path.</li>
<ul>
  <li><code>icon.id</code> - The ID HTML attribute of the Icon. The default ID is "icon".</li>
  <li><code>icon.cl</code> - The Class HTML attribute of the Icon.</li>
  <li><code>icon.type</code> - The type property allows for the selection of an icon with a preconceived path, overriding the <code>icon.path</code> property. The "x" type produces an X icon. By default, no type is selected and the icon's path is defined by <code>icon.path</code>.</li>
  <li><code>icon.path</code> - The custom svg HTML path of the icon. Svg tags are already supported by the compiler and are not needed to be included in the path. If <code>icon.type</code> is defined, this property is overriden.</li>
  <li><code>icon.height</code> - The height property determines the height of the Menu in pixels. Default is "35".</li>
  <li><code>icon.width</code> - The width property determines the width of the Menu in pixels. Default is "35".</li>
  <li><code>icon.stroke</code> - The stroke property determines the thickness or stroke width of preconceived paths in pixels. Default is 3. If <code>icon.type</code> is not defined, this property has no effect.</li>
  <li><code>icon.color</code> - The color property determines the color of preconceived paths. The default is "black". If <code>icon.type</code> is not defined, this property has no effect.</li>
</ul>
  
  <p></p>
<li><code>image = mx.Image()</code> - The Image element generates an image.</li>
<ul>
  <li><code>image.id</code> - The ID HTML attribute of the Image.</li>
  <li><code>image.cl</code> - The Class HTML attribute of the Image.</li>
  <li><code>image.src</code> - The Src HTML attribute of the Image. Use the <code>images</code> command in the WebGen interface to find the image directory for your project. Store images in the image directory and use the source "../images/image_name.jpg" to reference your media.</li>
</ul>
  
  <p></p>
<li><code>video = mx.Video()</code> - The Image element generates an image.</li>
<ul>
  <li><code>video.id</code> - The ID HTML attribute of the Image.</li>
  <li><code>video.cl</code> - The Class HTML attribute of the Image.</li>
  <li><code>video.autoplay</code> - The Autoplay HTML attribute of the Video. If assigned the boolean True, the video will autoplay on load. Default is False.</li>
  <li><code>video.muted</code> - The Muted HTML attribute of the Video. If assigned the boolean True, the video will be muted. Default is False.</li>
  <li><code>video.controls</code> - The Controls HTML attribute of the Video. If assigned the boolean True, the video will show play controls. Default is True.</li>
  <li><code>video.loop</code> - The Loop HTML attribute of the Video. If assigned the boolean True, the video will loop when finished. Default is False.</li>
  <li><code>video.src</code> - The Src HTML attribute of the Video. Use the <code>images</code> command in the WebGen interface to find the image directory for your project. Store videos in the image directory and use the source "../images/video_name.jpg" to reference your media.</li>
</ul>
 
  <p></p>
<li><code>x = mx.X()</code> - The X element generates a custom HTML element with user-generated HTML source code.</li>
<ul>
  <li><code>x.content</code> - The HTML source code of the X element. In order to program custom HTML code, simply write it as a string assigned to a X element like so: <code>x.content = "&lt;p&gt;This is a custom paragraph&lt;/p&gt;"</code>.</li>
</ul>
  
</ul>

<h2>FAQs</h2>
<ul>
  <li>Why won't WebGen let me define the margin property?</li>
  <p>Properties such as <code>margin</code>, <code>height</code>, and <code>width</code> are considered Dynamic Properites because they typically vary by viewport dimensions. Because style properties are fixed and cannot be adjusted with CSS after being set, Dynamic Properties are restricted from being set with style properties, but instead must be adjusted with CSS or JavaScript code.</p>
<li>Why is my content not showing on my compiled webpage?</li>
<p>If you are having a hard time seeing your content appear on your compiled webpage after using the <code>r</code> command, make sure that the desired elements have been added as content within the <code>body</code> element of the webpage or another embedded container element. Elements must be embedded in order to be properly compiled: <code>container_elem.content = [element]</code>.</p>
<li>How do I create a PHP webpage?</li>
<p>To create a PHP page, simply create a normal file with the Interface Command <code>f(folder, filename)</code> and add the HTML components (forms, containers, etc.) of the webpage. Then, use the <code>exit</code> command to return to the main interface and create a global file with the <code>gf(folder, global_filename)</code> command. Instead of using the <code>e</code> command to edit the HTML elements (forms, containers, etc.) of the page, use the <code>php</code> File Command to add PHP content. No enclosing PHP tags are needed - just start programming your PHP content.</p>
</ul></div></div></div></div></div><div id="footer" style="background-color:rgba(60,60,60,1);overflow-x:visible;overflow-y:visible;color:white;bottom:0;display:flex;justify-content:center;align-items:center;"><div id="footer_center" style="overflow-x:visible;overflow-y:visible;display:flex;align-content:center;"><div style="overflow-x:visible;overflow-y:visible;float:left;clear:right;white-space:pre-wrap;">Designed by Dre
<a href="https://www.drebarrera.com/"> | Dre Barrera</a>
<a href="https://www.drebarrera.com/contact/"> | Contact</a>
<a href="https://www.drebarrera.com/projects"> | Projects</a></div></div><p id="footer_title" style="color:white;position:absolute;">WebGen 2022</p></div></body></html>