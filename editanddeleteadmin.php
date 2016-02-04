<?php
require 'dbinfo.php';
	
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];

	if($_POST['oper'] == 'edit')
	{			
		$query4 = "UPDATE registration1 SET fname='$fname',mname='$mname',lname='$lname' WHERE id='$id'";
	}
	elseif ($_POST['oper'] == 'del') 
	{
		$query4 = "DELETE FROM registration1 WHERE id='$id'";								
	}									
	if (!$result = mysqli_query($connection,$query4))
	{
		die("database connection failed " . mysqli_error($connection));
	}
	
?>