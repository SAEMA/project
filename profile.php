<?php
require('dbinfo.php');
session_start();
require 'hr.php';
//print_r($_SESSION);
if($username=$_SESSION["username"])
{
	//selectingall
	$query = "SELECT * FROM registration1 WHERE username='$username'";
	
	if (!$result=mysqli_query($connection,$query))
	{
		die("database connection failed " . mysqli_error($connection));
	}
	else
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$profile=$row;
			
		}
	}
?>	
	<h1 class="well">YOUR PROFILE</h1>
		<div class="col-lg-12 well">				
			<form action="profile.php" method="post" enctype="multipart/form-data">																
				<div class="col-lg-12 form-group">							
					<img id="profilePic" src="img/<?php echo $profile['fileToUpload']; ?>">
					<br>
					<hr>
					<div class="row">
						<div class="col-lg-4 ">
							<label>USERNAME:<?php echo $profile['username'] ?> </label>								
						</div>							
						<div class="col-lg-4 ">
							<label><?php //echo $profile['password'] ?> </label>															
						</div>									
						<div class="col-lg-4 ">
							<label>FIRST NAME:<?php echo $profile['fname'] ?> </label>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-4 ">
							<label>MIDDLE NAME:<?php echo $profile['mname'] ?> </label>
						</div>														
						<div class="col-lg-4 ">
							<label>LAST NAME:<?php echo $profile['lname'] ?> </label>		
						</div>
						<div class="col-lg-4 ">
							<?php if($profile['options']==="male")
								//?//php echo $profile['options']
							     	echo "<label>GENDER:MALE</label>";
									else 
									echo "<label>GENDER:FEMALE</label>";
							?> 												 
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-4 ">
							<label> MARITAL STATUS:<?php echo $profile['maritalstatus'] ?> </label>
						</div>
						<div class="col-lg-4 ">
							<label> DATE OF BIRTH:<?php echo $profile['dob'] ?> </label>
						</div>
						<div class="col-lg-4 ">
							<label> EMPLOYMENT:<?php echo $profile['employment'] ?> </label>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-4 ">
							<label> EMPLOYER:<?php echo $profile['employer'] ?> </label>
						</div>
						<div class="col-lg-4 ">
							<label> PHONE NUMBER:<?php echo $profile['phonenumber'] ?> </label>
						</div>
						<div class="col-lg-4 ">
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6 ">
							<h3>RESIDENTIAL ADDRESS</h3>
						</div>
						<div class="col-lg-6 ">
							<h3>OFFICE ADDRESS</h3>
						</div>
					</div>															
					<div class="row">
						<div class="col-lg-6 ">
							<label> STREET:<?php echo $profile['street'] ?> </label>
						</div>
						<div class="col-lg-6 ">
							<label> STREET:<?php echo $profile['ostreet'] ?> </label>
						</div>
					</div>	
					<br>
					<div class="row">
						<div class="col-lg-6 ">
							<label> CITY:<?php echo $profile['city'] ?> </label>
						</div>
						<div class="col-lg-6 ">
							<label> CITY:<?php echo $profile['ocity'] ?> </label>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-6 ">
							<label> STATE:<?php echo $profile['state'] ?> </label>
						</div>
						<div class="col-lg-6 ">
							<label> STATE:<?php echo $profile['ostate'] ?> </label>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-6 ">
							<label> ZIP:<?php echo $profile['zipp'] ?> </label>
						</div>
						<div class="col-lg-6 ">
							<label> ZIP:<?php echo $profile['ozipp'] ?> </label>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-6 ">
							<label> MOBILE NUMBER:<?php echo $profile['mobilenumber'] ?> </label>
						</div>
						<div class="col-lg-6 ">
							<label> MOBILE NUMBER:<?php echo $profile['omobilenumber'] ?> </label>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-6 ">
							<label> LANDLINE NUMBER:<?php echo $profile['landlinenumber'] ?> </label>
						</div>
						<div class="col-lg-6 ">
							<label> LANDLINE NUMBER:<?php echo $profile['olandlinenumber'] ?> </label>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-6 ">
							<label> FAX:<?php echo $profile['fax'] ?> </label>
						</div>
						<div class="col-lg-6 ">
							<label >FAX:<?php echo $profile['ofax'] ?> </label>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-6 ">
							<label> EMAIL ID:<?php echo $profile['emailid'] ?> </label>
						</div>
						<div class="col-lg-6 ">
							<label> EMAIL ID:<?php echo $profile['oemailid'] ?> </label>
						</div>
					</div>
					<br>
						<label> ABOUT YOU:<?php echo $profile['yo'] ?> </label>										
					<br>								
				</div>
			</form>
			<br>
		</div>
	</div>
<?php  } 
else
{
	header("Location:login.php");
}
?>
<?php
 	//close the connection
 	require 'fr.php';
 	mysqli_close($connection);
?>
