<?php $visitInfo = $_SERVER['REQUEST_URI'].',';
$visitInfo .= $_SERVER['REMOTE_ADDR'];
date_default_timezone_set("America/New_York");
$visitInfo .= ','.date("Y-m-d;h:i:sA").','.$email.PHP_EOL;
file_put_contents('../data/visitInfo.txt', $visitInfo, FILE_APPEND); ?><?php $visitInfo = $_SERVER['REQUEST_URI'].',';
$visitInfo .= $_SERVER['REMOTE_ADDR'];
date_default_timezone_set("America/New_York");
$visitInfo .= ','.date("Y-m-d;h:i:sA").','.$email.PHP_EOL;
file_put_contents('data/visitInfo.txt', $visitInfo, FILE_APPEND); ?><?php if($_POST["submit"]) {
	$recipient="drebarrera@yahoo.com";
	$name=$_POST["name"];
	$project=$_POST["project"];
	$company=$_POST["company"];
	$contact=$_POST["contact"];
	$clientEmail=$_POST["clientEmail"];
	$clientPhone=$_POST["clientPhone"];
	$subject=$name." Has Submitted a Work Request";
	$description=$_POST["description"];
	$visitInfo = 'Alpen Aerial,';
	$visitInfo .= $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("America/New_York");
        $visitInfo .= ','.date("Y-m-d;h:i:sA").','.$email.PHP_EOL;
	
        	$mailBody="Admin: $name\nProject: $project\nCompany: $company\nClient Contact: $contact\nContact Email: $clientEmail\nContact Phone: $clientPhone\n\nProject Description:\n$description\n\n$visitInfo";
		mail($recipient, $subject, $mailBody, "From: $name <dreebarrera@gmail.com>");
		$thankYou="<p>Thank you! Your message has been sent.</p>";
}

 ?><?php $txt_url=isset($_POST["txt_url"]) ? $_POST["txt_url"]: null;
$company_name=isset($_POST["company_name"]) ? $_POST["company_name"]: null;
$project_name=isset($_POST["project_name"]) ? $_POST["project_name"]: null;

if($_POST["submit"]) {
	$recipient="drebarrera@yahoo.com";
	$name=$_POST["name"];
	$project=$_POST["project"];
	$company=$_POST["company"];
	$contact=$_POST["contact"];
	$clientEmail=$_POST["clientEmail"];
	$clientPhone=$_POST["clientPhone"];
	$subject=$name." Has Submitted a Project Brief";
	$description=$_POST["description"];
	$visitInfo = 'Alpen Aerial Project,';
	$visitInfo .= $_SERVER['REMOTE_ADDR'];
    	date_default_timezone_set("America/New_York");
    	$visitInfo .= ','.date("Y-m-d;h:i:sA").','.$email.PHP_EOL;
	
	$txtInfo = '';
	$ind = 0;
	foreach($_POST as $key => $val) {
		if($key != "name" && $key != "project" && $key != "company" && $key != "contact" && $key != "clientEmail" && $key != "clientPhone" && $key != "description" && $key != "submit"){
			$txtInfo .= $val;
			if($ind < 7){
				$txtInfo .= 'xxixx';
				$ind++;
			}
			else{
				$txtInfo .= 'xxiixx';
				$ind = 0;
			}	
		}
	}

	$infoStr = $name.'xxixx'.$project.'xxixx'.$company.'xxixx'.$contact.'xxixx'.$clientEmail.'xxixx'.$clientPhone.'xxixx'.$description.'xxiixx';

	$url = 'https://www.drebarrera.com/alpenaerial/'.str_replace(' ','_',$company).'-'.str_replace(' ','_',$project).'.txt';
	file_put_contents('../alpenaerial/'.str_replace(' ','_',$company).'-'.str_replace(' ','_',$project).'.txt', $infoStr.$txtInfo);
    $mailBody="Admin: $name\nProject: $project\nCompany: $company\nClient Contact: $contact\nContact Email: $clientEmail\nContact Phone: $clientPhone\n\nProject Description:\n$description\nURL: $url\n\n$visitInfo";
	mail($recipient, $subject, $mailBody, "From: $name <dreebarrera@gmail.com>");
	$thankYou="<p>Thank you! Your message has been sent.</p>";
} ?><!DOCTYPE html><html><head><title>Dre Barrera</title><meta charset="utf-8"><meta name="description" content="Default WebGen Page"><meta name="keywords" content=""><meta name="author" content="Andres Barrera"><meta name="viewport" content="width=device-width, initial-scale=1"><script src="..\JQuery.js"></script><script src="..\JQuery-UI.js"></script><script>$(document).ready(function(){
	var winHeight = jQuery(window).height();
	var winWidth = jQuery(window).width();
	xNorm = 1368;
	yNorm = 783;
	xMin = 1075;
	ratio = winHeight / winWidth;
	ratioNorm = yNorm / xNorm;
	ratioMin = yNorm / xMin;
	if(!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) && ratio < ratioMin) {
		window.open("https://www.drebarrera.com/interactive", '_self');
	}

	$('#interactive').click(function(){
		var winHeight = jQuery(window).height();
		var winWidth = jQuery(window).width();
		ratio = winHeight / winWidth;
		if(ratio < ratioMin){
			window.open("https://www.drebarrera.com/interactive", '_blank');
		}
		else{
			alert("Your browser does not properly support the display of the portfolio. Please try again on a widescreen browser.");
		}
	});
	
	
});</script><style>#main{ 	width: 100%; 	display: flex; 	justify-content: center; }  #welcome{ 	max-width: 600px; 	width: 90%; 	margin-top: 20vh; }  #slide1Image{ 	height: 15vh; 	width: 15vh; 	border-radius: 1000px; 	position: relative; 	z-index: 0; 	margin-top: -10vh; 	margin-right: 0px; 	float: right; 	filter: brightness(110%); 	display: block; 	padding: 0.75vh; }  @media only screen and (max-width:1000px) { 	#slide1Image{ 		margin-top: 3vh; 	} }  #welcomeLinks{ 	margin-top: 25px; 	display: flex; 	justify-content: center; 	width: 100%; 	flex-wrap: wrap; 	padding-bottom: 25px; }  .slideTitle{ 	font-size: 5vh; 	font-weight: 300; 	position:relative; 	display: block; 	text-align: left; 	margin-block-start: 0em; 	margin-block-end: 0em; }  .slideText{ 	font-size: 2.5vh; 	font-weight: 300; 	position: relative; 	display: block; 	margin-top: 1vh; 	width: 95%; 	margin-left: 5%; 	text-align: left; 	margin-block-start: 1vh; 	margin-block-end: 0em; }  .textLink{ 	color: #005580; 	text-decoration: none; 	cursor: pointer; }  .textLink:hover{ 	color: #ff5938; }  .textLink2{ 	color: #005580; 	text-decoration: none; 	cursor: pointer; }  .textLink2:hover{ 	color: black; 	text-decoration: underline; }  .textLink3{ 	color: black; 	cursor: pointer; }  .textLink3:hover{ 	color: #005580; }  .pseudoLink{ 	color: #005580; 	text-decoration: none; 	cursor: pointer; }  .pseudoLink:hover{ 	color: #ff5938; } </style><style>p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  #nav{ 	width: 100%; 	display: flex; 	justify-content: center; 	position: fixed; 	z-index: 101; 	padding: 2vh; }  #nav_center{ 	position: relative; 	width: 75%; 	display: flex; 	justify-content: center; 	border-bottom: 2px solid #d8d8d8; 	padding-bottom: 1vh; }  #menu{ 	position: relative; 	display: inline-block; }  #htitle{ 	font-size: 4.25vh; 	margin-top: 0.5vh; 	text-decoration: none; 	color: #00334d; 	position: relative; 	display: inline-block; 	padding-right: 14vw; }  @media only screen and (max-width:1000px) { 	#htitle{ 		padding-right: 5vw; 	}  	#nav_center{ 		width: 90%; 	} }  .hoption{ 	display: inline-block; }  .button{ 	position: relative; 	display: inline-block; 	padding: 1.25vh; 	border-radius: 1vh; 	cursor: pointer; 	color: white; 	text-decoration: none; 	font-size: 1.75vh; 	margin: 1vh; 	margin-left: 1.5vh; 	margin-right: 1.5vh; 	filter: drop-shadow(0 0.2rem 0.25rem rgba(0, 0, 0, 0.25)); }  .button > p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  .buttonBlue{ 	background-color: #005580; 	border: 2px solid #005580; }  .buttonBlue:hover{ 	background-color: white; 	color: #005580; }   .buttonRedRing{ 	background-color: white; 	border: 2px solid #ff5938; 	color: #ff5938; }  .buttonRedRing:hover{ 	background-color: #ff5938; 	color: white; }  .buttonRed{ 	background-color: #ff5938; 	border: 2px solid #ff5938; }  .buttonRed:hover{ 	background-color: white; 	color: #ff5938; }  .buttonYellow{ 	background-color: #ffba00; 	border: 2px solid #ffba00; }  .buttonYellow:hover{ 	background-color: white; 	color: #ffba00; }  .buttonPurple{ 	background-color: rgb(138, 74, 255); 	border: 2px solid rgb(138, 74, 255); }  .buttonPurple:hover{ 	background-color: white; 	color: rgb(138, 74, 255); }  .pseudoLink{ 	color: #005580; 	text-decoration: none; 	cursor: pointer; }  .pseudoLink:hover{ 	color: #ff5938; }</style><script>/// Custom Alert Generation ///
function alert(msg){
	$("#alert").css('display', 'block');
	document.getElementById('alertText').innerHTML = msg+'<br><br><span style="padding: 5px; padding-left: 12px; padding-right: 12px; border-radius: 5px; cursor: pointer;">OK</span>';
	$('#alertText > span').click(function(){
		$("#alert").css('display', 'none');
	});
}</script><style>#alert{ 	max-width: 450px; 	width: 80%; 	height: auto; 	position: fixed; 	z-index; 50; 	margin-top: 30vh; 	display: none; 	padding: 2.5vh; 	padding-left: 2.5vh; 	padding-right: 2.5vh; 	border-radius: 2vh; 	font-size: 3vh; 	font-weight: 500; 	text-align: center; 	top: 0; }  /*@media only screen and (max-width:1000px) { 	#alert{ 		margin-top: 300px; 	} }*/  #alertText > span{ 	background-color: #ff5938; 	color: white; }  #alertText > span:hover{ 	background-color: white; 	border: 2px solid #ff5938; 	color: black; }</style><style>/* Style inputs with type="text", select elements and textareas */ input[type=text], select, textarea { 	width: 100%; /* Full width */ 	padding: 12px; /* Some padding */   	border: 1px solid #ccc; /* Gray border */ 	border-radius: 4px; /* Rounded borders */ 	box-sizing: border-box; /* Make sure that padding and width stays in place */	 	margin-top: 6px; /* Add a top margin */ 	margin-bottom: 16px; /* Bottom margin */ 	resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */ 	font-size: 1.75vh; 	-webkit-appearance:none; }  input, option{ 	font-family: monospace; 	font-size: 1.75vh; 	-webkit-appearance:none; }  /* Style the submit button with a specific background color etc */ input[type=submit] { 	background-color: #4CAF50; 	color: white; 	padding: 12px 20px; 	border: none; 	border-radius: 4px; 	cursor: pointer; }  /* When moving the mouse over the submit button, add a darker green color */ input[type=submit]:hover { 	background-color: #45a049; }</style></head>
<body style="margin:0;background-color:#fefefe;overflow-x:hidden;font-family:Helvetica;color:black;"><div id="main" style="overflow-x:visible;overflow-y:visible;"><div id="nav" style="background-color:#fefefe;overflow-x:visible;overflow-y:visible;"><div id="nav_center" style="overflow-x:visible;overflow-y:visible;"><a id="htitle" href="https://www.drebarrera.com" target="_self" style=""><p style="">dre barrera_</p></a><div id="menu" style="overflow-x:visible;overflow-y:visible;"><a class="button buttonRed" href="https://www.drebarrera.com" target="_self" style=""><p style="">Home</p></a><a class="button buttonBlue" href="https://www.drebarrera.com/resources/resume.pdf" target="_blank" style=""><p style="">Resume</p></a><a class="button buttonYellow" href="https://www.drebarrera.com/contact/" target="_blank" style=""><p style="">Contact</p></a><a class="button buttonPurple" href="https://www.drebarrera.com/projects/" target="_blank" style=""><p style="">Projects</p></a></div></div></div><div id="welcome" style="overflow-x:visible;overflow-y:visible;"><div id="slide1Textbox" class="textboxSlide" style="overflow-x:visible;overflow-y:visible;"><h6 class="slideTitle" style="color:#ff5938;">hello world.</h6><img  id="slide1Image" style="" src="images/portrait.jpeg"/><p class="slideText" style="">My name is Andr&eacute;s Barrera, but you can call me Dre. I am a <class="pseudoLink bookmark" data-slide="2" data-track = "2">Computer Engineering</span> senior at <a href="https://www.purdue.edu" target="_blank" class="textLink">Purdue University</a>. With a background in <span class="pseudoLink bookmark" data-slide="6" data-track = "2">Multidisciplinary Engineering</span>, <span class="pseudoLink bookmark" data-slide="3" data-track = "3">UI/UX</span>, and <span class="pseudoLink bookmark" data-slide="5" data-track = "2">Business Development</span>, I am much more than just a Computer Engineer.<br><br><em style="font-weight: 500;text-align: center; width:100%; display: block;">I am an ambitious creator.</em></p><div id="welcomeLinks" style="overflow-x:visible;overflow-y:visible;"><a id="resumeLink" class="button buttonBlue" href="https://www.drebarrera.com/resources/resume.pdf" target="_blank" style=""><p style="">My Resume</p></a><div id="interactive" class="button buttonRed" style="overflow-x:visible;overflow-y:visible;"><p style="">Try the Interactive Portfolio!</p></div><a id="contactLink" class="button buttonRedRing" href="https://www.drebarrera.com/contact/" target="_blank" style=""><p style="">Contact Me</p></a><a class="button buttonPurple" href="https://github.com/drebarrera" target="_blank" style=""><p style="">GitHub</p></a><a class="button buttonPurple" href="https://www.drebarrera.com/resources/curriculum.pdf" target="_blank" style=""><p style="">Curriculum</p></a><a class="button buttonYellow" href="https://behance.net/drebarrera" target="_blank" style=""><p style="">Behance Gallery</p></a><a class="button buttonBlue" href="https://www.drebarrera.com/music/" target="_blank" style=""><p style="">Music</p></a></div></div></div><div id="alert" style="background-color:rgba(255, 255, 255, 0.9);overflow-x:visible;overflow-y:visible;"><p id="alertText" style=""></p></div></div></body></html>