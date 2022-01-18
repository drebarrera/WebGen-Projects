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
				$txtInfo .= ',';
				$ind++;
			}
			else{
				$txtInfo .= '\n';
				$ind = 0;
			}	
		}
	}

	$url = 'https://www.drebarrera.com/alpenaerial/'.str_replace(' ','',$company).'-'.str_replace(' ','',$project).'.txt';
	file_put_contents('../alpenaerial/'.str_replace(' ','',$company).'-'.str_replace(' ','',$project).'.txt', $txtInfo);
        	$mailBody="Admin: $name\nProject: $project\nCompany: $company\nClient Contact: $contact\nContact Email: $clientEmail\nContact Phone: $clientPhone\n\nProject Description:\n$description\nURL: $url\n\n$visitInfo";
		mail($recipient, $subject, $mailBody, "From: $name <dreebarrera@gmail.com>");
		$thankYou="<p>Thank you! Your message has been sent.</p>";
}

