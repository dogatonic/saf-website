<?php

require_once("../env.php");
require_once("../includes/dbconn.php");
require_once "Mail.php";

date_default_timezone_set('America/Chicago');
define("FILE_CONTACT_FORM", '../noncom/contactForm.txt');

$okMessage = "Thank you! Message sent.";
$responseArray = array('type' => 'success', 'message' => $okMessage);



// values for email & mysql
$t = $_POST['type'] ?? "unknown source";
$n = $_POST['name'] ?? "no name";
$e = $_POST['email'] ?? "no email";
$p = $_POST['phone'] ?? "no phone";
$m = $_POST['message'] ?? "no message";

//		  __ _       _      __ _ _      
//	     / _| |     | |    / _(_) |     
//		| |_| | __ _| |_  | |_ _| | ___ 
//		|  _| |/ _` | __| |  _| | |/ _ \
//		| | | | (_| | |_  | | | | |  __/
//		|_| |_|\__,_|\__| |_| |_|_|\___|
// For Flat File
$fields = array('type' => 'Type:', 'name' => 'Name:', 'email' => 'Email:', 'phone' => 'Phone:', 'message' => 'Message:');							   						   
try {

    $formData = "\r\n" . date('l jS \of F Y h:i:s A') . "\r\n";
    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email
        if (isset($fields[$key])) {
            $formData .= "$fields[$key] $value\r\n";
        }
    }
    $formData .= "========================\r\n";

    file_put_contents(FILE_CONTACT_FORM, $formData, FILE_APPEND);


} catch (\Exception $e) {
    $errMessage = "Error. There was a problem.";
    $responseArray = array('type' => 'success', 'message' => $errMessage);
}

//	                    _ 
//	  _____ _ _ ___ ___| |
//	 |     | | |_ -| . | |
//	 |_|_|_|_  |___|_  |_|
//	       |___|     |_|  

//  INSERT INTO webform_data(type, name, email, phone, message) VALUES ("membership", "namo","emailo","phoneo","messageo")
try {
	$stmt = $mysqli->prepare("INSERT INTO webform_data (type, name, email, phone, message) VALUES (?, ?, ?, ?, ?)");
	if($stmt){
		$stmt->bind_param("sssss", $t, $n, $e, $p, $m);
		$stmt->execute();
		// printf("%d row inserted.\n", $stmt->affected_rows);
	} else {
		// throw something?
		echo "stmt error<br>";
		print_r($stmt);
	}
} catch (\Exception $e) {
    $errMessage = "Error. There was a mysql problem.";
    //$responseArray = array('type' => 'success', 'message' => $errMessage);
}

//	                      _ _                      _ 
//	                     (_) |                    | |
//	  ___ _ __ ___   __ _ _| |  ___  ___ _ __   __| |
//	 / _ \ '_ ` _ \ / _` | | | / __|/ _ \ '_ \ / _` |
//	|  __/ | | | | | (_| | | | \__ \  __/ | | | (_| |
// 	 \___|_| |_| |_|\__,_|_|_| |___/\___|_| |_|\__,_|

$subject = 'Website Form Submission';
$addressedTo = MAIL_TO_ADDRESS;
$replyTo = MAIL_FROM_ADDRESS;
$name = 'WebUser: ' . $n;// from name
$body = $formData;
$successMessage = 'Email Message successfully sent I guess!';

$headers = array(
	'From' => $name . " <" . MAIL_FROM_ADDRESS . ">",
	'To' => $addressedTo,
	'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
	'host' => MAIL_SMTP_HOST, 
	'port' => MAIL_SMTP_PORT,
	'auth' => true,
	'username' => MAIL_USER,
	'password' => MAIL_WORDPASS
));

$mail = $smtp->send($addressedTo, $headers, $body);


if (PEAR::isError($mail)) {
	// echo($mail->getMessage() . "<br>");
} else {
	// echo($successMessage);
}


//	                 _         _ _                                                   
//	                | |       (_) |                                                  
//	   __      _____| |__  ___ _| |_ ___    _ __ ___  ___ _ __   ___  _ __  ___  ___ 
//	   \ \ /\ / / _ \ '_ \/ __| | __/ _ \  | '__/ _ \/ __| '_ \ / _ \| '_ \/ __|/ _ \
//	    \ V  V /  __/ |_) \__ \ | ||  __/  | | |  __/\__ \ |_) | (_) | | | \__ \  __/
//	     \_/\_/ \___|_.__/|___/_|\__\___|  |_|  \___||___/ .__/ \___/|_| |_|___/\___|
//                   									 | |                         
//           									         |_|                         
// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}

?>