<?php

require_once("../env.php");
require_once("../includes/dbconn.php");

date_default_timezone_set('America/Chicago');

// DEFAULT message
$okMessage = "Received status and set in DB";
$responseArray = array('type' => 'success', 'message' => $okMessage);


if(true){

	$status = $_GET['status'];
	$id = $_GET['id'];
	//	                    _ 
	//	  _____ _ _ ___ ___| |
	//	 |     | | |_ -| . | |
	//	 |_|_|_|_  |___|_  |_|
	//	       |___|     |_|  

	//  INSERT INTO webform_data(type, name, email, phone, message) VALUES ("membership", "namo","emailo","phoneo","messageo")
	try {
		$stmt = $mysqli->prepare("UPDATE webform_data SET status=? WHERE id=? LIMIT 1");
		if($stmt){
			$stmt->bind_param("ss", $status, $id);
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