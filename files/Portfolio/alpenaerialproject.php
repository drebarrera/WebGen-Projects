$txt_url=isset($_POST["txt_url"]) ? $_POST["txt_url"]: null;
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
	if ($name == 'Client' || $name == 'Steve Kohl' || $name == 'Asher Noel' || $name == 'Andres Barrera'){
	    file_put_contents('../alpenaerial/'.str_replace(' ','_',$company).'-'.str_replace(' ','_',$project).'.txt', $infoStr.$txtInfo);
        $mailBody="Admin: $name\nProject: $project\nCompany: $company\nClient Contact: $contact\nContact Email: $clientEmail\nContact Phone: $clientPhone\n\nProject Description:\n$description\nURL: $url\n\n$visitInfo";
	    mail($recipient, $subject, $mailBody, "From: $name <dreebarrera@gmail.com>");
	    $thankYou="<p>Thank you! Your message has been sent.</p>";
	}
}