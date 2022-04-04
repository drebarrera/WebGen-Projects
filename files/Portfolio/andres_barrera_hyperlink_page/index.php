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
} ?><!DOCTYPE html><html><head><title>Default Page</title><meta charset="utf-8"><meta name="description" content="Default WebGen Page"><meta name="keywords" content=""><meta name="author" content="Andres Barrera"><meta name="viewport" content="width=device-width, initial-scale=1"><script src="..\JQuery.js"></script><script>const title = 'dre barrera';

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
});</script><style>p, h1{ 	margin-block-start: 0em; 	margin-block-end: 0em; 	margin-inline-start:0em; 	margin-inline-end: 0em; }  body{ 	background-color: black; }  #background{ 	height: 100vh; 	width: 100vw; 	background-image: url("images/background.jpg"); 	background-size: cover; 	background-position: center; 	z-index: 0; 	display: inline; 	position: absolute; }  #center{ 	height: 100vh; 	width: 100vw; 	display: flex; 	justify-content: center; 	align-items: center; 	flex-wrap: wrap; 	z-index: 1; 	position: absolute; 	text-align: center; }  #title{ 	width: 80%; 	display: block; 	color: white; 	font-weight: 500; 	font-size: 6vh; 	position: relative; 	left: -100vw; }  #center > a { 	width: 80%; 	height: auto; 	display: block; 	color: white; 	font-size: 4.5vh; 	position: relative; 	padding: 2vh; 	left: -100vw; }  #center > a:hover{ 	background-color: rgba(0,0,0,0.5); }  #note{ 	width: 95%; 	max-width: 600px; 	color: white; 	font-size: 3vh; }  #note > a{ 	color: white; 	text-decoration: none; }  #note > a:hover{ 	opacity: 0.5; }</style><style>p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  #nav{ 	width: 100%; 	display: flex; 	justify-content: center; 	position: fixed; 	z-index: 101; 	padding: 2vh; }  #nav_center{ 	position: relative; 	width: 75%; 	display: flex; 	justify-content: center; 	border-bottom: 2px solid #d8d8d8; 	padding-bottom: 1vh; }  #menu{ 	position: relative; 	display: inline-block; }  #htitle{ 	font-size: 4.25vh; 	margin-top: 0.5vh; 	text-decoration: none; 	color: #00334d; 	position: relative; 	display: inline-block; 	padding-right: 14vw; }  @media only screen and (max-width:1000px) { 	#htitle{ 		padding-right: 5vw; 	}  	#nav_center{ 		width: 90%; 	} }  .hoption{ 	display: inline-block; }  .button{ 	position: relative; 	display: inline-block; 	padding: 1.25vh; 	border-radius: 1vh; 	cursor: pointer; 	color: white; 	text-decoration: none; 	font-size: 1.75vh; 	margin: 1vh; 	margin-left: 1.5vh; 	margin-right: 1.5vh; 	filter: drop-shadow(0 0.2rem 0.25rem rgba(0, 0, 0, 0.25)); }  .button > p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  .buttonBlue{ 	background-color: #005580; 	border: 2px solid #005580; }  .buttonBlue:hover{ 	background-color: white; 	color: #005580; }   .buttonRedRing{ 	background-color: white; 	border: 2px solid #ff5938; 	color: #ff5938; }  .buttonRedRing:hover{ 	background-color: #ff5938; 	color: white; }  .buttonRed{ 	background-color: #ff5938; 	border: 2px solid #ff5938; }  .buttonRed:hover{ 	background-color: white; 	color: #ff5938; }  .buttonYellow{ 	background-color: #ffba00; 	border: 2px solid #ffba00; }  .buttonYellow:hover{ 	background-color: white; 	color: #ffba00; }  .buttonPurple{ 	background-color: rgb(138, 74, 255); 	border: 2px solid rgb(138, 74, 255); }  .buttonPurple:hover{ 	background-color: white; 	color: rgb(138, 74, 255); }  .pseudoLink{ 	color: #005580; 	text-decoration: none; 	cursor: pointer; }  .pseudoLink:hover{ 	color: #ff5938; }</style><script>/// Custom Alert Generation ///
function alert(msg){
	$("#alert").css('display', 'block');
	document.getElementById('alertText').innerHTML = msg+'<br><br><span style="padding: 5px; padding-left: 12px; padding-right: 12px; border-radius: 5px; cursor: pointer;">OK</span>';
	$('#alertText > span').click(function(){
		$("#alert").css('display', 'none');
	});
}</script><style>#alert{ 	max-width: 450px; 	width: 80%; 	height: auto; 	position: fixed; 	z-index; 50; 	margin-top: 30vh; 	display: none; 	padding: 2.5vh; 	padding-left: 2.5vh; 	padding-right: 2.5vh; 	border-radius: 2vh; 	font-size: 3vh; 	font-weight: 500; 	text-align: center; 	top: 0; }  /*@media only screen and (max-width:1000px) { 	#alert{ 		margin-top: 300px; 	} }*/  #alertText > span{ 	background-color: #ff5938; 	color: white; }  #alertText > span:hover{ 	background-color: white; 	border: 2px solid #ff5938; 	color: black; }</style><style>/* Style inputs with type="text", select elements and textareas */ input[type=text], select, textarea { 	width: 100%; /* Full width */ 	padding: 12px; /* Some padding */   	border: 1px solid #ccc; /* Gray border */ 	border-radius: 4px; /* Rounded borders */ 	box-sizing: border-box; /* Make sure that padding and width stays in place */	 	margin-top: 6px; /* Add a top margin */ 	margin-bottom: 16px; /* Bottom margin */ 	resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */ 	font-size: 1.75vh; 	-webkit-appearance:none; }  input, option{ 	font-family: monospace; 	font-size: 1.75vh; 	-webkit-appearance:none; }  /* Style the submit button with a specific background color etc */ input[type=submit] { 	background-color: #4CAF50; 	color: white; 	padding: 12px 20px; 	border: none; 	border-radius: 4px; 	cursor: pointer; }  /* When moving the mouse over the submit button, add a darker green color */ input[type=submit]:hover { 	background-color: #45a049; }</style></head>
<body style="margin:0;background-color:black;overflow-x:hidden;font-family:Helvetica;color:black;"><div id="background" style="overflow-x:visible;overflow-y:visible;"></div><div id="center" style="overflow-x:visible;overflow-y:visible;"><h1 id="title" style="">dre barrera_</h1><a id="link0" href="https://www.drebarrera.com/" target="_blank" style=""><p style="">Portfolio</p></a><a id="link1" href="https://www.github.com/drebarrera/" target="_blank" style=""><p style="">GitHub</p></a><a id="link2" href="https://www.linkedin.com/in/drebarrera" target="_blank" style=""><p style="">LinkedIn</p></a><a id="link3" href="https://www.behance.net/drebarrera/" target="_blank" style=""><p style="">Behance</p></a><a id="link4" href="https://www.drebarrera.com/resources/curriculum.pdf" target="_blank" style=""><p style="">Curriculum</p></a><a id="link5" href="https://www.drebarrera.com/resources/resume.pdf" target="_blank" style=""><p style="">Resume</p></a><p id="note" style="">Made with Dre Barrera&#39;s <a href="https://github.com/drebarrera/WebGen" target="_blank">WebGen</a></p></div></body></html>