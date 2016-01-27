<?php 

session_start();

	// Report all errors
//error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
//ini_set("error_reporting", E_ALL);

	//create a database connection
	$dbhost = "localhost";
	$dbuser = "saema";
	$dbpass = "secret";
	$dbname = "aditya";
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
