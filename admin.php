<?php
session_start();
//echo "hello";
require 'hr.php';


//select all data
// if($username = $_SESSION["username"])
// {
// 	//counting 
// 	$query = "SELECT COUNT(*) AS num from registration1 where activation != '0'";
// 	$result = mysqli_query($connection,$query);
// 	$counted = mysqli_fetch_assoc($result);
// 	$base = 1;
// 	while ($counted['num'] != 1)
// 	{
// 		//echo "rt";
		
// 		$query = "SELECT * FROM registration1 WHERE id = $base";	
// 		if ($result=mysqli_query($connection,$query))
// 		{
// 			while($row=mysqli_fetch_assoc($result))
// 			{
// 				$profile=$row;
		?>
			
 				

 			<div class = "container">
 			<div class ="jumbotron">
 			HEY THERE MR ADMIN ! DO YOU WANT TO INSPECT DATA BASE?
 			</div>
 			<br>
 			<table id="list_records"></table>
			<div id="perpage"></div><br />

 			
 			</div>
 			<?php
// 			//echo "hello";
// 			$base =$base+1;
// 			}
		
// 		//JUMBOTRON FOR DISPLAYING THE DATA


// 		}


// 		// $counted['num'] = $counted['num']-1;
// 		// echo $counted['num'];
	//}		
 	//}
?>




?>
<?php
	require 'fr.php';

?>