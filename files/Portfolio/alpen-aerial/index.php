<?php $visitInfo = $_SERVER['REQUEST_URI'].',';
$visitInfo .= $_SERVER['REMOTE_ADDR'];
date_default_timezone_set("America/New_York");
$visitInfo .= ','.date("Y-m-d;h:i:sA").','.$email.PHP_EOL;
file_put_contents('../data/visitInfo.txt', $visitInfo, FILE_APPEND); ?><?php if($_POST["submit"]) {
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
} ?><!DOCTYPE html><html><head><title>Dre Barrera | Alpen Aerial</title><meta charset="utf-8"><meta name="description" content="Default WebGen Page"><meta name="keywords" content=""><meta name="author" content="Andres Barrera"><meta name="viewport" content="width=device-width, initial-scale=1"><style>#main{ 	width: 100%; 	display: flex; 	justify-content: center; }  #container{ 	max-width: 600px; 	width: 90%; 	margin-top: 22vh; 	font-size: 2.5vh; }  /*@media only screen and (max-width:1000px) { 	#container{ 		margin-top: 300px; 	} }*/  #form{ 	border-radius: 4vh; 	padding: 2vh; 	padding-bottom: 12vh; }  #title{ 	font-size: 4vh; 	margin-top: 1vh; 	color: #ff5938; 	margin-bottom: 25px; }  #contact{ 	width: 90%; 	margin-left: 2.5%; 	margin-top: 25px; 	border-radius: 3vh; 	padding: 4%; }  label{ 	color: white; }</style><style>p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  #nav{ 	width: 100%; 	display: flex; 	justify-content: center; 	position: fixed; 	z-index: 101; 	padding: 2vh; }  #nav_center{ 	position: relative; 	width: 75%; 	display: flex; 	justify-content: center; 	border-bottom: 2px solid #d8d8d8; 	padding-bottom: 1vh; }  #menu{ 	position: relative; 	display: inline-block; }  #htitle{ 	font-size: 4.25vh; 	margin-top: 0.5vh; 	text-decoration: none; 	color: #00334d; 	position: relative; 	display: inline-block; 	padding-right: 14vw; }  @media only screen and (max-width:1000px) { 	#htitle{ 		padding-right: 5vw; 	}  	#nav_center{ 		width: 90%; 	} }  .hoption{ 	display: inline-block; }  .button{ 	position: relative; 	display: inline-block; 	padding: 1.25vh; 	border-radius: 1vh; 	cursor: pointer; 	color: white; 	text-decoration: none; 	font-size: 1.75vh; 	margin: 1vh; 	margin-left: 1.5vh; 	margin-right: 1.5vh; 	filter: drop-shadow(0 0.2rem 0.25rem rgba(0, 0, 0, 0.25)); }  .button > p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  .buttonBlue{ 	background-color: #005580; 	border: 2px solid #005580; }  .buttonBlue:hover{ 	background-color: white; 	color: #005580; }   .buttonRedRing{ 	background-color: white; 	border: 2px solid #ff5938; 	color: #ff5938; }  .buttonRedRing:hover{ 	background-color: #ff5938; 	color: white; }  .buttonRed{ 	background-color: #ff5938; 	border: 2px solid #ff5938; }  .buttonRed:hover{ 	background-color: white; 	color: #ff5938; }  .buttonYellow{ 	background-color: #ffba00; 	border: 2px solid #ffba00; }  .buttonYellow:hover{ 	background-color: white; 	color: #ffba00; }  .buttonPurple{ 	background-color: rgb(138, 74, 255); 	border: 2px solid rgb(138, 74, 255); }  .buttonPurple:hover{ 	background-color: white; 	color: rgb(138, 74, 255); }  .pseudoLink{ 	color: #005580; 	text-decoration: none; 	cursor: pointer; }  .pseudoLink:hover{ 	color: #ff5938; }</style><style>/* Style inputs with type="text", select elements and textareas */ input[type=text], select, textarea { 	width: 100%; /* Full width */ 	padding: 12px; /* Some padding */   	border: 1px solid #ccc; /* Gray border */ 	border-radius: 4px; /* Rounded borders */ 	box-sizing: border-box; /* Make sure that padding and width stays in place */	 	margin-top: 6px; /* Add a top margin */ 	margin-bottom: 16px; /* Bottom margin */ 	resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */ 	font-size: 1.75vh; 	-webkit-appearance:none; }  input, option{ 	font-family: monospace; 	font-size: 1.75vh; 	-webkit-appearance:none; }  /* Style the submit button with a specific background color etc */ input[type=submit] { 	background-color: #4CAF50; 	color: white; 	padding: 12px 20px; 	border: none; 	border-radius: 4px; 	cursor: pointer; }  /* When moving the mouse over the submit button, add a darker green color */ input[type=submit]:hover { 	background-color: #45a049; }</style></head>
<body style="margin:0;background-color:#fefefe;overflow-x:hidden;font-family:Helvetica;color:black;"><div id="main" style="overflow-x:visible;overflow-y:visible;"><div id="nav" style="background-color:#fefefe;overflow-x:visible;overflow-y:visible;"><div id="nav_center" style="overflow-x:visible;overflow-y:visible;"><a id="htitle" href="https://www.drebarrera.com" target="_self" style=""><p style="">dre barrera_</p></a><div id="menu" style="overflow-x:visible;overflow-y:visible;"><a class="button buttonRed" href="https://www.drebarrera.com" target="_self" style=""><p style="">Home</p></a><a class="button buttonBlue" href="https://www.drebarrera.com/resources/resume.pdf" target="_blank" style=""><p style="">Resume</p></a><a class="button buttonYellow" href="https://www.drebarrera.com/contact/" target="_blank" style=""><p style="">Contact</p></a><a class="button buttonPurple" href="https://www.drebarrera.com/projects/" target="_blank" style=""><p style="">Projects</p></a></div></div></div><div id="container" style="overflow-x:visible;overflow-y:visible;"><p id="title" style="">Alpen Aerial Work Request</p><p style="">Please give all possible information for a project before submitting a request. If any media is necessary for the project, please upload it to my Inbox on Dropbox or email it to me at <a href="mailto:drebarrera@yahoo.com" class="pseudoLink">drebarrera@yahoo.com</a> <em>before or immediately after</em> the request is sent. If necessary, give me a call at <a href="tel:12105856279" class="pseudoLink">+1 (210) 585-6279</a> during business hours. Don&#39;t be shy to leave a voicemail! I will do my best to get back to you within 24 hours on the next business day.<br><br></p><div id="form" style="overflow-x:visible;overflow-y:visible;"><div id="contact" style="background-color:#005580;overflow-x:visible;overflow-y:visible;"><form method="post" action="index.php"><label for="name">Admin</label><select name="name" required><option>Steve Kohl</option><option>Asher Noël</option><option>Andres Barrera</option></select><label for="project">Project Name</label><input type="text" name="project" required><label for="company">Client Company</label><input type="text" name="company"><label for="contact">Client Contact Name</label><input type="text" name="contact"><label for="clientEmail">Contact Email</label><input type="text" name="clientEmail"><label for="clientPhone">Contact Phone</label><input type="text" name="clientPhone"><label for="description">Project Description</label><textarea name="description" type="text" placeholder="Please provide a full description of the project. This includes where to find necessary media, icon placement, and client needs. Any unclear information will be resolved with the client contact." style="height:200px" required></textarea><input type="submit" value="Submit" name="submit"></form><p style="color: white;"><?=$thankyou ?></p></div></div></div></div></body></html>