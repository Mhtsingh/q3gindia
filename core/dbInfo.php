<?php

date_default_timezone_set('Asia/Kolkata');

function connect_database() {
	$fetchType = "array";
	$dbHost    = "q3gindia.com.mysql";
	$dbLogin   = "q3gindia_comq3";
	$dbPwd     = "q3gindia_comq3";
	$dbName    = "q3gindia_comq3";
        
//        $dbHost    = "localhost";
//	$dbLogin   = "root";
//	$dbPwd     = "";
//	$dbName    = "q3";
	$con       = mysqli_connect($dbHost, $dbLogin, $dbPwd, $dbName);
	if (!$con) {
		die("Database Connection failes" . mysqli_connect_errno());
	}
	return ($con);
}
?>
