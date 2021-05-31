<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

include "core/dbInfo.php";
include_once "core/dbFunctions.php";
include_once "core/core_classes.php";
include_once "core/get_classes.php";
include_once "core/insert_classes.php";
include_once "core/update_classes.php";


	//parameters_check();


$o = new stdClass();
$o1 = new stdClass();
$o2 = new stdClass();
$o3 = new stdClass();
$o4 = new stdClass();
$o5 = new stdClass();
$o6 = new stdClass();
$o7 = new stdClass();
$o8 = new stdClass();
$o9 = new stdClass();

$factory = new TypeFactory($dbName);
$insertor = new TypeInsertor($dbName);
$updater = new TypeUpdater($dbName);

if (isset($_POST['updte'])) {
	$updte = $_POST['updte'];
} else {
	$updte = 0;
}

$fetchType = "array";

?>