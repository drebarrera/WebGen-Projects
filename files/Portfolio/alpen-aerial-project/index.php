<?php $visitInfo = $_SERVER['REQUEST_URI'].',';
$visitInfo .= $_SERVER['REMOTE_ADDR'];
date_default_timezone_set("America/New_York");
$visitInfo .= ','.date("Y-m-d;h:i:sA").','.$email.PHP_EOL;
file_put_contents('../data/visitInfo.txt', $visitInfo, FILE_APPEND); ?><?php $txt_url=''
$company_name=''
$project_name=''

if($_POST["data"]){
	$txt_url=$_POST["text_url"];
	$company_name=$_POST["company_name"];
	$project_name=$_POST["project_name"];
}

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
				$txtInfo .= '¨';
				$ind++;
			}
			else{
				$txtInfo .= '´';
				$ind = 0;
			}	
		}
	}

	$infoStr = $name.'¨'.$project.'¨'.$company.'¨'.$contact.'¨'.$clientEmail.'¨'.$clientPhone.'¨'.$description.'´';

	$url = 'https://www.drebarrera.com/alpenaerial/'.str_replace(' ','_',$company).'-'.str_replace(' ','_',$project).'.txt';
	file_put_contents('../alpenaerial/'.str_replace(' ','_',$company).'-'.str_replace(' ','_',$project).'.txt', $infoStr.$txtInfo);
        	$mailBody="Admin: $name\nProject: $project\nCompany: $company\nClient Contact: $contact\nContact Email: $clientEmail\nContact Phone: $clientPhone\n\nProject Description:\n$description\nURL: $url\n\n$visitInfo";
		mail($recipient, $subject, $mailBody, "From: $name <dreebarrera@gmail.com>");
		$thankYou="<p>Thank you! Your message has been sent.</p>";
}

 ?><!DOCTYPE html><html><head><title>Dre Barrera | Alpen Aerial Project Brief</title><meta charset="utf-8"><meta name="description" content="Default WebGen Page"><meta name="keywords" content=""><meta name="author" content="Andres Barrera"><meta name="viewport" content="width=device-width, initial-scale=1"><script src="..\JQuery.js"></script><script src="..\JQuery-UI.js"></script><script>$(document).ready(function(){
	var addCount = 0;
	<?php 
	    $companies = scandir('../alpenaerial/');
	    $companies = json_encode($companies);
	    echo "var companies = ". $companies . ";\n";
	?>

    clients = {}
    
	for(var i = 0; i < companies.length; i++){
	    if(companies[i] != '.' && companies[i] != '..'){
	        client = companies[i].replace('.txt','').replaceAll('_',' ').split('-')[0];
	        project = companies[i].replace('.txt','').replaceAll('_',' ').split('-')[1];
		    $('#clientSelect').append('<option>'+client+'<\option>');
		    clients[client] == null ? clients[client] = [project] : clients[client].push(project);
		    if($('#clientSelect').children().last().val() == ''){
		        $('#clientSelect').children().last().remove();
		    }
	    }
	}
	
	$('#fill').hide();
	$('.projectSelect').hide();

	<?php echo "var txt_url = ". $txt_url . ";\n"; ?>
	<?php echo "var company_name = ". $company_name . ";\n"; ?>	
	<?php echo "var project_name = ". $project_name . ";\n"; ?>

	function projectf(company, project){
		file = '../alpenaerial/'+company.replaceAll(' ', '_')+'-'+project.replaceAll(' ', '_')+'.txt';
		$('input[name="txt_url"]).val(file);
		$('input[name="company_name"]).val(company);
		$('input[name="project_name"]).val(project);
		$('#hiddenForm').submit();
    		<?php $ter = file_get_contents('\tmp\gradesref.txt'); ?>
    	var retrieveddata = "<?php echo $ter; ?>";
	}
	var company = '';
	var project = '';

	$('#clientSelect').bind('input propertychange', function() {
		if($(this).val() == ''){
			$('#fill').hide();
			$('.projectSelect').hide();
		}
		else if($(this).val() == 'New Client'){
			$('#fill').show();
			$('input[text]').val('');
			$('textarea').val('');
			$('.projectSelect').hide();
		}
		else{
			$('#fill').hide();
			$('.projectSelect').show();
			for(var i = 0; i < clients[$('#clientSelect').val()].length; i++){
				company = $('#clientSelect').val();
				project = clients[company][i];
				$('#projectSelect').append('<option>'+project+'<\option>');
			}
		}
	});

	$('#projectSelect').bind('input propertychange', function() {
		if($(this).val() == ''){
			$('#fill').hide();
		}
		else if($(this).val() == 'New Project'){
			$('#fill').show();
			$('input[type=text]').val('');
			$('textarea').val('');
		}
		else{
		    $('#fill').show();
		    projectf(company, project);
		}
	});


	$('#addButton').click(function(){
		$('#formTable_1').before('<tr id="formTableAdd_'+addCount+'"><td id="<td id="formTableAdd_'+addCount+'_0"><p class="button buttonRedRing del">X</p></td><td id="formTableAdd_'+addCount+'_1"><input type="text" name="in_'+addCount+'_1" required></td><td id="formTableAdd_'+addCount+'_2"><select type="text" name="in_'+addCount+'_2"><option>Text</option><option>Image</option><option>Text + Location</option><option>Text + Image</option></select></td><td id="formTableAdd_'+addCount+'_3"><select type="text" name="in_'+addCount+'_3" required><option>Clickable</option><option>Not Clickable</option></select></td><td id="formTableAdd_'+addCount+'_4"><input type="text" name="in_'+addCount+'_4" required></td><td id="formTableAdd_'+addCount+'_5"><input type="text" name="in_'+addCount+'_5"></td><td id="formTableAdd_'+addCount+'_6"><input type="text" name="in_'+addCount+'_6"></td><td id="formTableAdd_'+addCount+'_7"><textarea type="text" name="in_'+addCount+'_7"></textarea></td><td id="formTableAdd_'+addCount+'_8"><textarea type="text" name="in_'+addCount+'_8"></textarea></td></tr>');
		addCount++;
	});
	
	$("#formTable").on("click", ".del", function() {
		$(this).parents('tr').remove();
	});
});</script><style>#main{ 	width: 100%; 	display: flex; 	justify-content: center; }  #container{ 	width: 90%; 	margin-top: 22vh; 	font-size: 2.5vh; 	display: flex; 	justify-content: center; 	flex-wrap: wrap; }  #caption{ 	max-width: 900px; 	width: 100%; 	display: inline-block; 	position: relative; }  #form{ 	border-radius: 4vh; 	padding: 2vh; 	padding-bottom: 12vh; 	width: 100%; }  #title{ 	max-width: 900px; 	width: 100%; 	display: inline-block; 	position: relative; 	font-size: 4vh; 	margin-top: 1vh; 	color: #ff5938; 	margin-bottom: 25px; }  #contact{ 	width: 90%; 	margin-left: 2.5%; 	margin-top: 25px; 	border-radius: 3vh; 	padding: 4%; }  label{ 	color: white; }  #formTable{ 	background-color: white; 	font-size: 2.5vh; 	border-radius: 4px; 	width: 100%; 	text-align: center; 	display: block; 	overflow-x: scroll; 	overflow-y: hidden; 	border-collapse: collapse; 	margin-bottom: 2vh; }  #formTable > tbody > tr > td, th{ 	padding: 1vh; 	border-right: 2px solid #ededed; }  #formTable > tbody{ 	width: 330vh; 	display: block; 	position: relative; }  #formTable_0_0{ 	width: 10vh; 	border-bottom: 2px solid #ededed; }  #formTable_0_1, #formTable_0_2, #formTable_0_3, #formTable_0_4, #formTable_0_5, #formTable_0_6{ 	width: 35vh; 	border-bottom: 2px solid #ededed; }  #formTable_0_7, #formTable_0_8{ 	width: 60vh; 	border-bottom: 2px solid #ededed; } </style><style>p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  #nav{ 	width: 100%; 	display: flex; 	justify-content: center; 	position: fixed; 	z-index: 101; 	padding: 2vh; }  #nav_center{ 	position: relative; 	width: 75%; 	display: flex; 	justify-content: center; 	border-bottom: 2px solid #d8d8d8; 	padding-bottom: 1vh; }  #menu{ 	position: relative; 	display: inline-block; }  #htitle{ 	font-size: 4.5vh; 	text-decoration: none; 	color: #00334d; 	position: relative; 	display: inline-block; 	padding-right: 14vw; }  @media only screen and (max-width:1000px) { 	#htitle{ 		padding-right: 5vw; 	}  	#nav_center{ 		width: 90%; 	} }  .hoption{ 	display: inline-block; }  .button{ 	position: relative; 	display: inline-block; 	padding: 1.25vh; 	border-radius: 1vh; 	cursor: pointer; 	color: white; 	text-decoration: none; 	font-size: 1.75vh; 	margin: 1vh; 	margin-left: 1.5vh; 	margin-right: 1.5vh; 	filter: drop-shadow(0 0.2rem 0.25rem rgba(0, 0, 0, 0.25)); }  .button > p{ 	margin-block-start: 0px; 	margin-block-end: 0px; }  .buttonBlue{ 	background-color: #005580; 	border: 2px solid #005580; }  .buttonBlue:hover{ 	background-color: white; 	color: #005580; }   .buttonRedRing{ 	background-color: white; 	border: 2px solid #ff5938; 	color: #ff5938; }  .buttonRedRing:hover{ 	background-color: #ff5938; 	color: white; }  .buttonRed{ 	background-color: #ff5938; 	border: 2px solid #ff5938; }  .buttonRed:hover{ 	background-color: white; 	color: #ff5938; }  .buttonYellow{ 	background-color: #ffba00; 	border: 2px solid #ffba00; }  .buttonYellow:hover{ 	background-color: white; 	color: #ffba00; }  .buttonPurple{ 	background-color: rgb(138, 74, 255); 	border: 2px solid rgb(138, 74, 255); }  .buttonPurple:hover{ 	background-color: white; 	color: rgb(138, 74, 255); }  .pseudoLink{ 	color: #005580; 	text-decoration: none; 	cursor: pointer; }  .pseudoLink:hover{ 	color: #ff5938; }</style><style>/* Style inputs with type="text", select elements and textareas */ input[type=text], select, textarea { 	width: 100%; /* Full width */ 	padding: 12px; /* Some padding */   	border: 1px solid #ccc; /* Gray border */ 	border-radius: 4px; /* Rounded borders */ 	box-sizing: border-box; /* Make sure that padding and width stays in place */	 	margin-top: 6px; /* Add a top margin */ 	margin-bottom: 16px; /* Bottom margin */ 	resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */ 	font-size: 1.75vh; 	-webkit-appearance:none; }  input, option{ 	font-family: monospace; 	font-size: 1.75vh; 	-webkit-appearance:none; }  /* Style the submit button with a specific background color etc */ input[type=submit] { 	background-color: #4CAF50; 	color: white; 	padding: 12px 20px; 	border: none; 	border-radius: 4px; 	cursor: pointer; }  /* When moving the mouse over the submit button, add a darker green color */ input[type=submit]:hover { 	background-color: #45a049; }</style></head>
<body style="margin:0;background-color:#fefefe;overflow-x:hidden;font-family:Helvetica;color:black;"><div id="main" style="overflow-x:visible;overflow-y:visible;"><div id="nav" style="background-color:#fefefe;overflow-x:visible;overflow-y:visible;"><div id="nav_center" style="overflow-x:visible;overflow-y:visible;"><a id="htitle" href="https://www.drebarrera.com" target="_self" style=""><p style="">dre barrera_</p></a><div id="menu" style="overflow-x:visible;overflow-y:visible;"><a class="button buttonRed" href="https://www.drebarrera.com" target="_self" style=""><p style="">Home</p></a><a class="button buttonBlue" href="https://www.drebarrera.com/resources/resume.pdf" target="_blank" style=""><p style="">Resume</p></a><a class="button buttonYellow" href="https://www.drebarrera.com/contact/" target="_blank" style=""><p style="">Contact</p></a><a class="button buttonPurple" href="https://www.drebarrera.com/projects/" target="_blank" style=""><p style="">Projects</p></a></div></div></div><div id="container" style="overflow-x:visible;overflow-y:visible;"><p id="title" style="">Alpen Aerial Project Information Form</p><p id="caption" style="">This form is for submitting project details to Alpen Aerial&#39;s design team. If you are submitting a revision to previously submitted project information, please include "REVISED" in the Project Name. If any media is necessary for the project, please email it to <a href="mailto:drebarrera@yahoo.com" class="pseudoLink">drebarrera@yahoo.com</a> <em>before or immediately after</em> the request is sent. If necessary, give us a call at <a href="tel:12105856279" class="pseudoLink">+1 (210) 585-6279</a> during business hours. Don&#39;t be shy to leave a voicemail! We will do our best to get back to you within 24 hours on the next business day.<br><br></p><div id="form" style="overflow-x:visible;overflow-y:visible;"><div id="contact" style="background-color:#005580;overflow-x:visible;overflow-y:visible;"><form method="post" action="index.php" id="hiddenForm" style="display: none;"><input type="text" name="txt_url"><input type="text" name="company_name"><input type="text" name="project_name"><input type="submit" name="data"></form><label>Select a Client to Begin:</label><select id="clientSelect"><option></option><option>New Client</option></select><label class="projectSelect">Select a Project:</label><select class="projectSelect" id="projectSelect"><option></option><option>New Project</option></select><form method="post" action="index.php" id="fill"><label for="name">Submitter</label><select name="name" required><option>Client</option><option>Steve Kohl</option><option>Asher Noel</option><option>Andres Barrera</option></select><label for="project">Project Name</label><input type="text" name="project" required><label for="company">Client Company</label><input type="text" name="company"><label for="contact">Client Contact Name</label><input type="text" name="contact"><label for="clientEmail">Contact Email</label><input type="text" name="clientEmail"><label for="clientPhone">Contact Phone</label><input type="text" name="clientPhone"><label for="description">Project Description</label><textarea name="description" type="text" placeholder="Please provide a full description of the project. This includes where to find necessary media and project background information. Any unclear information will be resolved with the client contact." style="height:200px" required></textarea><!--table id="table"><tr><th>Icon</th><th>Type</th><th>Clickable/Not Clickable</th><th>Latitude/Longitude (optional)</th><th>Display Information (if clickable)</th><th>Other Descriptional Information (Media URLS,Positional Info,etc.)</th></tr></table><input type="submit" value="Submit" name="submit"><p style="color: white;"><?=$thankyou ?></p></form--><table id="formTable" class="table" style=""><tr id="formTable_0"><td id="formTable_0_0"></td><td id="formTable_0_1"><p style="">Icon Name</p></td><td id="formTable_0_2"><p style="">Icon Type</p></td><td id="formTable_0_3"><p style="">Clickable / Not Clickable</p></td><td id="formTable_0_4"><p style="">Icon Text Content (optional)</p></td><td id="formTable_0_5"><p style="">Icon Image Description / URL (optional)</p></td><td id="formTable_0_6"><p style="">Latitude/Longitude (optional)</p></td><td id="formTable_0_7"><p style="">Display Information (if clickable)</p></td><td id="formTable_0_8"><p style="">Other Descriptional Information (Media URLS,Positional Info,etc.)</p></td></tr><tr id="formTable_1"><td id="formTable_1_0"></td><td id="formTable_1_1"><p id="addButton" class="button buttonRed" style="">Add New Icon +</p></td></tr></table><input type="submit" value="Submit" name="submit"><p style="color: white;"><?=$thankyou ?></p></form></div></div></div></div></body></html>