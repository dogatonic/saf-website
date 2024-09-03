<?php

//  NOTE: I have combined 2 or more older files into one, so there is still a little bit of "mixing up" up some variable like ($t, $e, etc & $_POST). Will clean up later.

require_once("../env.php");
require_once("../includes/dbconn.php");
require_once "Mail.php";

date_default_timezone_set('America/Chicago');
define("FILE_ELECTION_FORM", '../noncom/electionBallots.txt');
define("FILE_ELECTION_LOG", '../noncom/electionLog.txt');
define("FILE_HEYNOW_LOG", '../noncom/heynow_log');

function loggy($msg){
	$logline = "\r\n" . date('l jS \of F Y h:i:s A') . "\r\n";
	$logline .= $msg;
	$logline .= "\r\n========================\r\n";
	file_put_contents(FILE_HEYNOW_LOG, $logline, FILE_APPEND);
}
// loggy("heynow trying to do election_form_process");

// DEFAULT message
$okMessage = "Thank you for Voting!";
$responseArray = array('type' => 'success', 'message' => $okMessage);

// values for email & mysql
$t = $_POST['type'] ?? "unknown type";
$n = $_POST['name'] ?? "no name";
$e = $_POST['email'] ?? "no email";
$p = $_POST['phone'] ?? "no phone";
$arrBallot = $_POST['ballot'] ?? "no ballot";

$bPassesEmailTest = true;
// CHECK THE EMAIL FIRST !!!!!!!!
try {
	// $string = "SELECT * FROM webform_data WHERE type = '$t' AND email = '$e'";
	$sMysql = "SELECT * FROM webform_data WHERE type = '$t' AND email = '$e'";
	$stmt = $mysqli->prepare("SELECT * FROM webform_data WHERE type = ? AND email = ?");
	if($stmt){
		$stmt->bind_param("ss", $t, $e);
		$stmt->execute();
		$stmt->store_result();
		$sRowsFound = $stmt->num_rows;
		// $responseArray['num_rows'] = $sRowsFound;
		// $responseArray['mysql'] = $sMysql;
		if($sRowsFound > 0){
			// TROUBLE!
			$bPassesEmailTest = false;
			$responseArray['type'] = 'danger';
			$responseArray['email'] = $e;
			$responseArray['message'] = 'The email address entered has already been used to cast a ballot! Please check with the SAF office.';

			$formData = "\r\n" . date('l jS \of F Y h:i:s A') . "\r\n";
			$formData .= print_r($responseArray,1);
			$formData .= "========================\r\n";
			file_put_contents(FILE_ELECTION_LOG, $formData, FILE_APPEND);
		}
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

if($bPassesEmailTest){

	$ballot_AmpSV = ""; // Ampersand Separated Values
	$ballot_CSV = ""; // Ampersand Separated Values
	foreach($arrBallot as $value){
		$ballot_AmpSV .= $value . "&";
		$ballot_CSV .= $value . ", ";
	}
	
	// cleanup trailing characters
	if(substr($ballot_AmpSV, -1) == "&") $ballot_AmpSV = substr($ballot_AmpSV, 0, -1);
	$ballot_CSV = trim($ballot_CSV);
	if(substr($ballot_CSV, -1) == ",") $ballot_CSV = substr($ballot_CSV, 0, -1);

	//		  __ _       _      __ _ _      
	//	     / _| |     | |    / _(_) |     
	//		| |_| | __ _| |_  | |_ _| | ___ 
	//		|  _| |/ _` | __| |  _| | |/ _ \
	//		| | | | (_| | |_  | | | | |  __/
	//		|_| |_|\__,_|\__| |_| |_|_|\___|
	// For Flat File
	$fields = array('type' => 'Type:', 'name' => 'Name:', 'email' => 'Email:', 'phone' => 'Phone:');							   						   
	try {

		$formData = "\r\n" . date('l jS \of F Y h:i:s A') . "\r\n";
		foreach ($_POST as $key => $value) {
			// If the field exists in the $fields array, include it in the email
			if (isset($fields[$key])) {
				$formData .= "$fields[$key] $value\r\n";
			}
		}
		$flatFileData = $formData;
		$flatFileData .= "VOTES: " . $ballot_CSV . "\r\n";
		$flatFileData .= "========================\r\n";

		file_put_contents(FILE_ELECTION_FORM, $flatFileData, FILE_APPEND);


	} catch (\Exception $e) {
		$errMessage = "Error. There was a problem.";
		$responseArray = array('type' => 'error_flat_file', 'message' => $errMessage);
	}

	//	                    _ 
	//	  _____ _ _ ___ ___| |
	//	 |     | | |_ -| . | |
	//	 |_|_|_|_  |___|_  |_|
	//	       |___|     |_|  

	$anStatus = '1';
	$anBallot = $ballot_AmpSV;
	// DEBUG log
	// $logBinds = implode(", ", array($t, $anStatus, $n, $e, $p, $anBallot));
	// loggy($logBinds);
	try {
		$stmt = $mysqli->prepare("INSERT INTO webform_data (type, status, name, email, phone, message) VALUES (?, ?, ?, ?, ?, ?)");
		if($stmt){
			$stmt->bind_param("ssssss", $t, $anStatus, $n, $e, $p, $anBallot);
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

	$replyTo = MAIL_FROM_ADDRESS;
	$arrMailRecievers = array("dogatonic@gmail.com", "audit@safaustin.org");
	$subject = 'SAF Ballot Cast 2024';
	// $addressedTo = "mail@matttucker.com"; // MAIL_TO_ADDRESS
	$body = $flatFileData;
	
	$smtp = Mail::factory('smtp', array(
		'host' => MAIL_SMTP_HOST, 
		'port' => MAIL_SMTP_PORT,
		'auth' => true,
		'username' => MAIL_USER,
		'password' => MAIL_WORDPASS
	));

	foreach($arrMailRecievers as $addressedTo){
		$headers = array(
			'From' => 'OnlineVote of: ' . $n . " <" . MAIL_FROM_ADDRESS . ">",
			'To' => $addressedTo,
			'Subject' => $subject
		);
		// SEND the email here!
		$mail = $smtp->send($addressedTo, $headers, $body);
	}

	// SEND the email here!
	// $mail = $smtp->send($addressedTo, $headers, $body);

	// TUCKER: Sept 2024, not sure why I had this here.
	// $successMessage = 'Email Message successfully sent I guess!';
	// if (PEAR::isError($mail)) {
	// 	// echo($mail->getMessage() . "<br>");
	// } else {
	// 	// echo($successMessage);
	// }

}// END: if($bPassesEmailTest)...


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