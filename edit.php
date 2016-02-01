<?php
require('dbinfo.php');
require'hr.php';
session_start();
//adding here
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


		if($_POST['edit'])
		{
			$errormessage="";
			$errormessage1 ="";
			$max=6;
			$maxm=10;
			
			$yo=$_POST['yo'];
			
			//for city
			if(!isset($_POST['city']) || empty($_POST['city']))
			{
				$errormessage .= "city not set!<br>";
			}
			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['city']))
 			{
 				$errormessage .= "CITY CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
			else 
				$city = $_POST['city'];

			//for office city
			if(!isset($_POST['ocity']) || empty($_POST['ocity']))
			{
				$errormessage .= "office city not set!<br>";
			}
			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["ocity"]))
 			{
 				$errormessage .= "OFFICE CITY CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
			else 
				$ocity = $_POST['ocity'];

			//for firstname	
			if(!isset($_POST['fname']) || empty($_POST['fname']))
			{
				$errormessage .= "first name not set!<br>";
			}
			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["fname"]))
 			{
 				$errormessage .= "FIRSTNAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
			else 
				$fname = $_POST['fname'];

			//for middle name
			if(!isset($_POST['mname']) || empty($_POST['mname']))
			{
				$errormessage .= "middle name not set!<br>";
			}
			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["mname"]))
 			{
 				$errormessage .= "MIDDLE NAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
			else 
				$mname = $_POST['mname'];

			//for last name 
			if(!isset($_POST['lname']) || empty($_POST['lname']))
			{
				$errormessage .= "last name not set!<br>";
			}
			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["lname"]))
 			{
 				$errormessage .= "LAST NAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
			else 
				$lname = $_POST['lname'];

			//for username
			if(!isset($_POST['username']) || empty($_POST['username']))
			{
				$errormessage .= "user name not set!<br>";
			}
			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["username"]))
 			{
 				$errormessage .= "USERNAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
			else 
				$username = $_POST['username'];

			//for password
			if(!isset($_POST['password']) || empty($_POST['password']))
			{
				$errormessage .= "password not set!<br>";
			}
			else
				{
					if (strlen($_POST["password"]) < $max) 
		 			{
		 				$password=$_POST["password"];
		 			} 
		 			else
		 			{
		 				$errormessage .="PASSWORD TOO LONG,<br>";
		 			}
		 		}

		 	//for date of birth
			if(!isset($_POST['dob']) || empty($_POST['dob']))
			{
				$errormessage .= "date of birth not set!<br>";
			}
			else 
				$dob = $_POST['dob'];

			//for marital status
			if(!isset($_POST['maritalstatus']) || empty($_POST['maritalstatus']))
			{
				$errormessage .= "maritalstatus not set!<br>";
			}
			else 
				$maritalstatus = $_POST['maritalstatus'];

			
			//for employment
			if(!isset($_POST['employment']) || empty($_POST['employment']))
			{
				$errormessage .= "employment not set!<br>";
			}
			else 
				$employment = $_POST['employment'];

			//for employer
				if(!isset($_POST['employer']) || empty($_POST['employer']))
				{
					$errormessage .= "employer not set!<br>";
				}
				else 
					$employer = $_POST['employer'];

			//for phonenumber
			if(!isset($_POST['phonenumber']) || empty($_POST['phonenumber']))
			{
				$errormessage .= "phonenumber not set!<br>";
			}
			elseif(!preg_match("/^[0-9 ]*$/",$_POST['phonenumber']))
 			{
 				$errormessage .= "PHONE NUMBER CAN ONLY CONTAIN NUMBERS<br>";
 			}
			elseif (strlen($_POST["phonenumber"]) == $maxm) 
		 			{
		 				$phonenumber=$_POST["phonenumber"];
		 			}
			else 
				$phonenumber = $_POST['phonenumber'];

			//for street
			if(!isset($_POST['street']) || empty($_POST['street']))
			{
				$errormessage .= "street not set!<br>";
			}
			else 
				$street = $_POST['street'];

			//for office street
			if(!isset($_POST['ostreet']) || empty($_POST['ostreet']))
			{
				$errormessage .= "office street not set!<br>";
			}
			else 
				$ostreet = $_POST['ostreet'];

			//for state 
			if(!isset($_POST['state']) || empty($_POST['state']))
			{
				$errormessage .= " state not set!<br>";
			}
			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["state"]))
 			{
 				$errormessage .= "STATE CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
			else 
				$state= $_POST['state'];

			//for office state
			if(!isset($_POST['ostate']) || empty($_POST['ostate']))
			{
				$errormessage .= "office state not set!<br>";
			}
			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["ostate"]))
 			{
 				$errormessage .= " OFFICE STATE CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
			else 
				$ostate = $_POST['ostate'];

			//for zip
			if(!isset($_POST['zipp']) || empty($_POST['zipp']))
			{
				$errormessage .= "zip not set!<br>";
			}
			else 
				$zipp = $_POST['zipp'];

			//for office zip
			if(!isset($_POST['ozipp']) || empty($_POST['ozipp']))
			{
				$errormessage .= "office zip not set!<br>";
			}
			else 
				$ozipp = $_POST['ozipp'];

			//for mobile number
			if(!isset($_POST['mobilenumber']) || empty($_POST['mobilenumber']))
			{
				$errormessage .= "mobilenumber not set!<br>";
			}
			elseif(!preg_match("/^[0-9 ]*$/",$_POST['mobilenumber']))
 			{
 				$errormessage .= "MOBILE NUMBER CAN ONLY CONTAIN NUMBERS<br>";
 			}
			elseif (strlen($_POST["mobilenumber"]) == $maxm) 
 			{
 				$mobilenumber=$_POST["mobilenumber"];

 			}
			else 
				$mobilenumber = $_POST['mobilenumber'];

			//for office mobilenumber
			if(!isset($_POST['omobilenumber']) || empty($_POST['omobilenumber']))
			{
				$errormessage .= "office mobilenumber not set!<br>";
				
			}
			elseif(!preg_match("/^[0-9 ]*$/",$_POST['omobilenumber']))
 			{
 				$errormessage .= "OFFICE MOBILE NUMBER CAN ONLY CONTAIN NUMBERS<br>";
 			}
			elseif (strlen($_POST["omobilenumber"]) == $maxm) 
 			{
 				$omobilenumber=$_POST["omobilenumber"];

 			}
			else 
				$omobilenumber = $_POST['omobilenumber'];

			//for landlinenumber
			if(!isset($_POST['landlinenumber']) || empty($_POST['landlinenumber']))
			{
				$errormessage .= "landlinenumber not set!";
			}
			elseif(!preg_match("/^[0-9 ]*$/",$_POST['landlinenumber']))
 			{
 				$errormessage .= "LANDLINE NUMBER CAN ONLY CONTAIN NUMBERS<br>";
 			}
			elseif (strlen($_POST["landlinenumber"]) == $maxm) 
 			{
 				$landlinenumber=$_POST["landlinenumber"];
 			}
			else 
				$landlinenumber = $_POST['landlinenumber'];

			//for office landline number
			if(!isset($_POST['olandlinenumber']) || empty($_POST['olandlinenumber']))
			{
				$errormessage .= "office landlinenumber not set!<br>";
			}
			elseif(!preg_match("/^[0-9 ]*$/",$_POST['olandlinenumber']))
 			{
 				$errormessage .= "OFFICE LANDLINE NUMBER CAN ONLY CONTAIN NUMBERS<br>";
 			}
			elseif (strlen($_POST["olandlinenumber"]) == $maxm) 
 			{
 				$olandlinenumber=$_POST["olandlinenumber"];
 			}
			else 
				$olandlinenumber = $_POST['olandlinenumber'];

			//fax
			if(!isset($_POST['fax']) || empty($_POST['fax']))
			{
				$errormessage .= "fax not set!";
			}
			elseif(!preg_match("/^[0-9 ]*$/",$_POST["fax"]))
 			{
 				$errormessage .= "<br>FAX MUST CONTAIN ONLY NUMBERS</br>";
 			}
			else 
				$fax = $_POST['fax'];

			//for office fax
			if(!isset($_POST['ofax']) || empty($_POST['ofax']))
			{
				$errormessage .= "office fax not set!";
			}
			elseif(!preg_match("/^[0-9 ]*$/",$_POST["ofax"]))
 			{
 				$errormessage .= "<br> OFFICE FAX MUST CONTAIN ONLY NUMBERS</br>";
 			}
			else 
				$ofax = $_POST['ofax'];

			//for email id
			if(!isset($_POST['emailid']) || empty($_POST['emailid']))
			{
				$errormessage .= "emailid not set!";
			}
			elseif(!preg_match('/^[a-z0-9_-]+@[a-z0-9._-]+\.[a-z]+$/i', $_POST['emailid']))
 			{
 				$errormessage .= "<br> EMAIL ID MUST CONTAIN ONLY NUMBERS</br>";
 			}
			else 
				$emailid = $_POST['emailid'];

			//for office email id
			if(!isset($_POST['oemailid']) || empty($_POST['oemailid']))
			{
				$errormessage .= "office emailid not set!<br>";
			}
			elseif(!preg_match('/^[a-z0-9_-]+@[a-z0-9._-]+\.[a-z]+$/i', $_POST['oemailid']))
 			{
 				$errormessage .= "<br> OFFICE EMAIL ID MUST CONTAIN ONLY NUMBERS</br>";
 			}
			else 
				$oemailid = $_POST['oemailid'];
					
			//for photo 				
 			$target_dir = "/var/www/html/assignment/mindfire/img/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$fileToUpload=basename($_FILES["fileToUpload"]["name"]);				
			//for image info
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" && $_FILES["fileToUpload"]["size"] !== 0)
			{

				$errormessage .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
			if(empty($errormessage))
			{
				
	    		if($_FILES["fileToUpload"]["size"] === 0)
				{			
					$query4= "UPDATE registration1 SET password='$password',fname='$fname',mname='$mname',lname='$lname',options='$options',dob='$dob',maritalstatus='$maritalstatus',employment='$employment',employer='$employer',phonenumber='$phonenumber',street='$street',ostreet='$ostreet',city='$city',ocity='$ocity',state='$state',ostate='$ostate',zipp='$zipp',ozipp='$ozipp',mobilenumber='$mobilenumber',omobilenumber='$omobilenumber',landlinenumber='$landlinenumber',olandlinenumber='$olandlinenumber',fax='$fax',ofax='$ofax',emailid='$emailid',oemailid='$oemailid',yo='$yo' WHERE username='$username'";

				}									
				else
				{			
					$query4= "UPDATE registration1 SET password='$password',fname='$fname',mname='$mname',lname='$lname',options='$options',dob='$dob',maritalstatus='$maritalstatus',employment='$employment',employer='$employer',phonenumber='$phonenumber',street='$street',ostreet='$ostreet',city='$city',ocity='$ocity',state='$state',ostate='$ostate',zipp='$zipp',ozipp='$ozipp',mobilenumber='$mobilenumber',omobilenumber='$omobilenumber',landlinenumber='$landlinenumber',olandlinenumber='$olandlinenumber',fax='$fax',ofax='$ofax',emailid='$emailid',oemailid='$oemailid',yo='$yo',fileToUpload='$fileToUpload' WHERE username='$username'";
					
				}
				if (!$result=mysqli_query($connection,$query4))
				{
					die("database connection failed " . mysqli_error($connection));
				}
				else
				{				
					header("Location: profile.php");
					echo "SUCCESSFUL UPDATE!"; 
				}							
			}
		}
?>
	<h1 class="well">DO YOU WANT TO EDIT YOUR PROFILE?</h1>
		<div class="row">
			<div class="col-md-12">
				<div id="message" class="jumbotron">
					<?php

						// if errors exit then show the div and the errors
						if ($errormessage) {
						echo "<br><label class='myLabel'>Please Fix the following errors: <br>$errormessage</label><br>";
						                           
						echo '<style type="text/css">

								 #message { 
						            display: block;
						                        }
						        </style>';
						          }
						                     
						                else {
						                	echo '<style type="text/css">
						                            #message { 
						                	display: none; 
						                }
						            </style>';
						        }

				    ?>
			    </div>
			</div>
		</div>
		<div class="col-lg-12 well">						
			<form action="edit.php" method="post"  enctype="multipart/form-data">											
				<img id="profilePic"src="img/<?php echo  $profile['fileToUpload']; ?>" >
					<input type="file" name="fileToUpload" id="fileToUpload" ><br>
						<hr>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>USERNAME</label>
								<input class="form-control" type="text" id="username" name="username" value="<?php echo $profile['username'] ?>" >
								<div id="id1"></div>
							</div>
							<div class="col-sm-4 form-group">
								<label>PASSWORD</label>
								<input class="form-control" type="password" id="password" name="password" value="<?php echo $profile['password'] ?>" >
								<div id="id2"></div>
							</div>
							<div class="col-sm-4 form-group">													
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>FIRST NAME</label>
								<input class="form-control" type="text" name="fname" id="fname" value="<?php echo $profile['fname'] ?>" >
								<div id="id3"></div>
							</div>					
							<div class="col-sm-4 form-group">
								<label>MIDDLE NAME</label>
								<input class="form-control" type="text" name="mname"id="mname" value="<?php echo $profile['mname'] ?>">
								<div id="id4"></div>
							</div>						
							<div class="col-sm-4 form-group">
								<label>LAST NAME</label>
								<input class="form-control" type="text" name="lname" id="lname" value="<?php echo $profile['lname'] ?>">
								<div id="id5"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<?php if($profile['options']=="male")
													//?//php echo $profile['options']
										echo "<label>GENDER:MALE</label>";
								      else 
										echo "<label>GENDER:FEMALE</label>";
								?> 					
							</div> 
							<div class="col-sm-4 form-group">
								<label>MARITAL STATUS</label>
								<select class="form-control" id="maritalstatusselector" name="maritalstatus">
									<option >Single</option> 
									<option>Married</option>
									<option>Separated</option>
									<option>Divorced</option>
									<option>Widowed</option>
								</select>
							</div>
							<div class="col-sm-4 form-group">
								<label>DATE OF BIRTH</label> 
						    	<div class='input-group date'>
						         	<input type="date" class="form-control" id="datePicker" name="dob" value="<?php echo $profile['dob'] ?>">
					   			</div>
				        	</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>EMPLOYMENT</label>
								<select class="form-control" id="employment" class="employment" name="employment">
							   		<option>Student</option>
									<option>Self-employed</option>
							        <option>Unemployed</option>
								</select>
							</div>
							<div class="col-sm-4 form-group">
								<label>EMPLOYER (if employed)</label>
								<input class="form-control" type="text" value="<?php echo $profile['employer'] ?>" name="employer">
								<div id="id6"></div>
							</div>
							<div class="col-sm-4 form-group">
								<label>PHONE NUMBER</label>
								<input class="form-control" type="text" id="phonenumber" value="<?php echo $profile['phonenumber'] ?>" name="phonenumber">
								<div id="id7"></div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-6 form-group">
							<h4><strong>RESIDENTIAL ADDRESS</strong></h4>
							</div>
							<div class="col-sm-6 form-group">
							<h4><strong>OFFICE ADDRESS</strong></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>	STREET</label>
									<input class="form-control" type="text" id="street" value="<?php echo $profile['street'] ?>" name="street">
									<div id="id8"></div>
							</div>
							<div class="col-sm-6 form-group">
								<label>	STREET</label>
									<input class="form-control" type="text" id="ostreet" value="<?php echo $profile['ostreet'] ?>" name="ostreet">
									<div id="id9"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>	CITY</label>
								<input class="form-control" type="text" id="city" value="<?php echo $profile['city'] ?>" name="city">
								<div id="id10"></div>
							</div>
							<div class="col-sm-6 form-group">
								<label>	CITY</label>
								<input class="form-control" type="text" id="ocity" value="<?php echo $profile['ocity'] ?>" name="ocity">
								<div id="id11"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>	STATE</label>
								<input class="form-control" type="text" id="state" value="<?php echo $profile['state'] ?>" name="state">
								<div id="id12"></div>
							</div>
							<div class="col-sm-6 form-group">
								<label>	STATE</label>
								<input class="form-control" type="text" id="ostate" value="<?php echo $profile['ostate'] ?>" name="ostate">
								<div id="id13"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>	ZIP</label>
								<input class="form-control" type="number" id="zipp" value="<?php echo $profile['zipp'] ?>" name="zipp">
								<div id="id14"></div>
							</div>
							<div class="col-sm-6 form-group">
								<label>	ZIP</label>
								<input class="form-control" type="number" id="ozipp" value="<?php echo $profile['ozipp'] ?>" name="ozipp">
								<div id="id15"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>	MOBILE NUMBER</label>
								<input class="form-control" type="text" id="mobilenumber" value="<?php echo $profile['mobilenumber'] ?>" name="mobilenumber">
								<div id="id16"></div>
							</div>
							<div class="col-sm-6 form-group">
								<label>	MOBILE NUMBER</label>
								<input class="form-control" type="text" id="omobilenumber" value="<?php echo $profile['omobilenumber'] ?>" name="omobilenumber">
								<div id="id17"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>	LANDLINE NUMBER</label>
								<input class="form-control" type="text" id="landlinenumber" value="<?php echo $profile['landlinenumber'] ?>" name="landlinenumber">
								<div id="id18"></div>
							</div>
							<div class="col-sm-6 form-group">
								<label>	LANDLINE NUMBER</label>
								<input class="form-control" type="text" id="olandlinenumber" value="<?php echo $profile['olandlinenumber'] ?>" name="olandlinenumber">
								<div id="id19"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>	FAX</label>
								<input class="form-control" type="text"id="fax" value="<?php echo $profile['fax'] ?>" name="fax">
								<div id="id20"></div>
							</div>
							<div class="col-sm-6 form-group">
								<label>	FAX</label>
								<input class="form-control" type="text" id="ofax" value="<?php echo $profile['ofax'] ?>" name="ofax">
								<div id="id21"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>	EMAIL ID</label>
								<input class="form-control" type="email" id="emailid" value="<?php echo $profile['emailid'] ?>" name="emailid">
								<div id="id22"></div>
							</div>
							<div class="col-sm-6 form-group">
								<label>	EMAIL ID</label>
								<input class="form-control" type="email" id="oemailid" value="<?php echo $profile['oemailid'] ?>" name="oemailid">
								<div id="id23"></div>
							</div>
						</div>
						<label for="comment">More about you:</label>
						<textarea class="form-control" rows="5" id="more" name="yo" placeholder="update status!" ><?php echo $profile['yo']?></textarea>
						<br>
						 <button type="submit" class="btn btn-info" value="edit" id="edit" name="edit">EDIT</button>
								 		
					</form>
				</div>
			</div>

<?php
}
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
