<?php

date_default_timezone_set('America/Chicago');
define("FILE_MEMBERSHIP_FORM", '../noncom/membershipForm.txt');

// response is sent with AJAX/JSON
$okMessage = "Thank you! Your information has been received.";
$responseArray = array('type' => 'success', 'message' => $okMessage);

// These are the POST fields that we will track for this. The key must match the name on the HTML form input, and the value here is just a txt Moniker
$fields = array('name' => 'Name:', 'email' => 'Email:', 'phone' => 'Phone:', 'message' => 'Message:');

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