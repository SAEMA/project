<?php
require("dbinfo.php");

	$error=array();
	$query="SELECT COUNT(*) AS email from registration1 where emailid = '{$_POST["email"]}'";
	$result=mysqli_query($connection,$query);
	$getemailid=mysqli_fetch_assoc($result);

	if($getemailid['email'] == 1)
	{
		$error['emailid'] = "1";	
	}		
	else
	{
		$error['emailid'] = "0";
	}
	echo json_encode($error);
?>