<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Chicago');

$sIP = $_SERVER['REMOTE_ADDR'];
// $sIP = $_SERVER['HTTP_X_FORWARDED_FOR'];

$bDebug = ($sIP == '72.177.25.181') ? true : false;//  24.28.67.98

$sPageInclude = 'home';// set this as the default right away
parse_str($_SERVER['QUERY_STRING'], $arrPex);
$sApex = (empty($arrPex['apex']))? 'home' : $arrPex['apex'];
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
$arrBDnights[1] = 'January 25th';
$arrBDnights[2] = 'February 25th';
$arrBDnights[3] = 'March 25th';
$arrBDnights[4] = 'April 29th';
$arrBDnights[5] = 'May 27th';

$arrBDnights[6] = 'June 25th';
$arrBDnights[7] = 'July 29th';
$arrBDnights[8] = 'August 26th';
$arrBDnights[9] = 'September 30th';
$arrBDnights[10] = 'October 28th';
$arrBDnights[11] = 'November 25th';
$arrBDnights[12] = 'December 30st';

?>