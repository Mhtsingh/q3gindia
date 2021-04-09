<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
//error_reporting(E_ERROR | E_PARSE);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once "mails/dbFunctions.php";

if (isset($_POST['updte'])) {
	$updte = $_POST['updte'];
} else {
	$updte = 0;
}

$fetchType = "array";

?>