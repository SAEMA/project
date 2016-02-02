<?php
require("dbinfo.php");

	$error=array();
	$query="SELECT COUNT(*) AS oemail from registration1 where oemailid = '{$_POST["oemail"]}'";
	$result=mysqli_query($connection,$query);
	$getoemailid=mysqli_fetch_assoc($result);

	if($getoemailid['oemail'] == 1)
	{
		$error['oemailid'] = "1";	
	}		
	else
	{
		$error['oemailid'] = "0";
	}
	echo json_encode($error);
?>