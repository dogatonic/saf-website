<?php

require_once("../env.php");
require_once("../includes/dbconn.php");

date_default_timezone_set('America/Chicago');
define("FILE_MEMBERSHIP_FORM", '../noncom/membershipForm.txt');

// response is sent with AJAX/JSON
$okMessage = "Thank you! Your information has been received.";
$responseArray = array('type' => 'success', 'message' => $okMessage);

// These are the POST fields that we will track for this. The key must match the name on the HTML form input, and the value here is just a txt Moniker
$fields = array('name' => 'Name:', 'email' => 'Email:', 'phone' => 'Phone:', 'message' => 'Message:');
                    
//		  __ _       _      __ _ _      
//	     / _| |     | |    / _(_) |     
//		| |_| | __ _| |_  | |_ _| | ___ 
//		|  _| |/ _` | __| |  _| | |/ _ \
//		| | | | (_| | |_  | | | | |  __/
//		|_| |_|\__,_|\__| |_| |_|_|\___|
							   						   
try {

    $formData = "\r\n" . date('l jS \of F Y h:i:s A') . "\r\n";
    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email
        if (isset($fields[$key])) {
            $formData .= "$fields[$key] $value\r\n";
        }
    }
    $formData .= "========================\r\n";

    file_put_contents(FILE_MEMBERSHIP_FORM, $formData, FILE_APPEND);


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
		$t = "membership";
		$n = isset($_POST['name'])? $_POST['name'] : "no name";
		$e = isset($_POST['email'])? $_POST['email'] : "no email";
		$p = isset($_POST['phone'])? $_POST['phone'] : "no phone";
		$m = isset($_POST['message'])? $_POST['message'] : "no message";
		$stmt->bind_param("sssss", $t, $n, $e, $p, $m);
		$stmt->execute();
		// printf("%d row inserted.\n", $stmt->affected_rows);
	} else {
		// throw something?
		// echo "stmt error<br>";
		// print_r($stmt);
	}
} catch (\Exception $e) {
    $errMessage = "Error. There was a mysql problem.";
    $responseArray = array('type' => 'success', 'message' => $errMessage);
}

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