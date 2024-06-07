<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

date_default_timezone_set('America/Chicago');

$sIP = $_SERVER['REMOTE_ADDR'];
// $sIP = $_SERVER['HTTP_X_FORWARDED_FOR'];

$bOnDev = ($_SERVER['SERVER_NAME'] == "dev.safaustin.org") ? true : false;
$bDebug = ($bOnDev && $sIP == '72.177.25.181') ? true : false;//  24.28.67.98


$sPageInclude = 'home';// set this as the default right away
parse_str($_SERVER['QUERY_STRING'], $arrPex);
$sApex = (empty($arrPex['apex']))? 'home' : $arrPex['apex'];
$sBpex = (empty($arrPex['bpex']))? '/' : $arrPex['bpex'];
switch($sApex){
    case 'about':
        $sTitle = "SAF - About";
        $sPageInclude = $sApex;
    break;
    case 'meetings':
        $sTitle = "SAF - Meetings";
        $sPageInclude = $sApex;
    break;
    case 'resources':
        $sTitle = "SAF - Resources";
        $sPageInclude = $sApex;
    break;
    case 'membership':
        $sTitle = "SAF - Membership";
        $sPageInclude = $sApex;
    break;
    case 'find_us':
        $sTitle = "SAF - Find Us";
        $sPageInclude = $sApex;
    break;
	case 'election':
        $sTitle = "SAF - 2022 Board of Trustees Election";
        $sPageInclude = $sApex;
    break;
	case 'saf_event':
        $sTitle = "SAF - Member Appreciation Dinner";
        $sPageInclude = $sApex;
    break;
    case 'saf_4th':
        $sTitle = "SAF - July 4th Celebration";
        $sPageInclude = $sApex;
    break;
    case 'home':
    default:
        $sTitle = 'Suburban Alcoholic Foundation';
        // $sPageInclude = 'home'; // we are setting a default for this prior to this SWITCH statement
}

function setActiveNav($sThisNavItemName){
    global $sApex;
    $sResult = ($sThisNavItemName == $sApex)? 'active' : '';
    echo $sResult;
}

// Birthday Night dates
require_once(__ROOT__ . "/includes/data/birthday_nights.php");


?>