<?php

require('dbinfo.php');
$username=$_GET['username'];

	$query4= "UPDATE registration1 SET activation=1 WHERE username='$username'";
	$result=mysqli_query($connection,$query4);

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