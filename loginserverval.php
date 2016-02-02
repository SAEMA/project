<?php 
	session_start();
	require('dbinfo.php');

	$db=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


	if(!$db)
	{
		die("no db connection");
	}

	
		//$_SESSION["idi"]="";
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query2="SELECT * FROM registration1 WHERE username='$username' AND password='$password'";
		$result=mysqli_query($db,$query2);
		if($result && $rows=mysqli_fetch_assoc($result))
		{

			$_SESSION["username"]=$username;
			$_SESSION["idi"]='success';

		}
		else { 
			$_SESSION["idi1"] = '<div class="well" ><div class="saema"><H4>USERNAME PASSWORD DO NOT MATCH!</H4></div></div>';}		
		
		echo json_encode($_SESSION);
		
	
		//echo json_encode($_SESSION);
	
?>