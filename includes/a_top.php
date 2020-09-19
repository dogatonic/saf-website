<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Chicago');

$sIP = $_SERVER['REMOTE_ADDR'];
$bDebug = ($sIP == '24.28.67.98') ? true : false;

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
?>