<?php
require('dbinfo.php');
	$username = $_GET['username'];
	$hash = $_GET['hash'];
	$query4 = "UPDATE registration1 SET activation=1 WHERE username='$username' AND hash='$hash'";
	$result = mysqli_query($connection,$query4);
	if (!$result)
	{
		die("database connection failed " . mysqli_error($connection));
	}
	else
	{
		echo "PLEASE CHECK YOUR MAIL!";
		session_unset();
		session_destroy();
		header('Location: login.php');
	}
?>