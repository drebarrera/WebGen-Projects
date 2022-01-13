if($_POST["submit"]) {
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

