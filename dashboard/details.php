		<?php
		session_start();
		require 'dbinfo.php';

		require 'hr.php';


		if(mysqli_connect_errno())
		{
			die("database connection failed:" .mysqli_connect_error() . "(" . mysqli_connect_errno(). ")");
		}
		?>

		<?php

		if($_POST['submit'])
		{
				$errormessage="";
			$errormessages="<h4>PLEASE FILL THE FOLLOWING DETAILS CAREFULLY!</h4>";
			$max=6;
			$temp="";
			$temp2="";
			$maxm=10;


			$target_dir = "/var/www/html/assignment/mindfire/img/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$fileToUpload=basename($_FILES["fileToUpload"]["name"]);
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


 			if(!isset($_POST["username"]) || empty($_POST["username"]))
 			{
 				$errormessage .= "USERNAME NOT SET,";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["username"]))
 			{
 				$errormessage .= "USERNAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,";
 			}
 			else 
 				$username=$_POST["username"];
 			
 			if(!isset($_POST["password"]) || empty($_POST["password"]))
 			{
 				$errormessage .= "PASSWORD MUST BE FILLED,";
 			}

 			if (strlen($_POST["password"]) < $max) 
 			{
 				$password=$_POST["password"];

 			} else {
 				$errormessage .="PASSWORD TOO LONG,";
 			}

 			if(isset($_POST["retypepassword"]) || !empty($_POST["retypepassword"]))
 			{				
 				if($_POST["retypepassword"]===$password)
 				{
 					$retypepassword=$_POST["retypepassword"]; 
					//echo "yay";
 				} else {
 					$errormessage .="RETYPED PASSWORD IS WRONG!,";
 				}
 			}
 			else 
 				$errormessage .="RETYPE PASSWORD MUST BE FILLED,";



 			if(!isset($_POST["fname"]) || empty($_POST["fname"]))
 			{
 				$errormessage .= "FIRST NAME MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["fname"]))
 			{
 				$errormessage .= "FIRSTNAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,";
 			}
 			else 
 				$fname=$_POST["fname"];


 			if(!isset($_POST["mname"]) || empty($_POST["mname"]))
 			{
 				$errormessage .= "MIDDLE NAME MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["mname"]))
 			{
 				$errormessage .= "MIDDLE NAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,";
 			}
 			else 
 				$mname=$_POST["mname"];


 			if(!isset($_POST["lname"]) || empty($_POST["lname"]))
 			{
 				$errormessage .= "LAST NAME MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["lname"]))
 			{
 				$errormessage .= "LAST NAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,";
 			}
 			else 
 				$lname=$_POST["lname"];
 			
 			if(!isset($_POST["options"]) || empty($_POST["options"]))
 			{
 				$errormessage .= "GENDERMUST BE CHECKED,";

 			}
 			else
 				$option=$_POST["options"];

 			if(!isset($_POST["dob"]) || empty($_POST["dob"]))
 			{
 				$errormessage .= "DATE OF BIRTH MUST BE FILLED,";
 			}
 			else
 				$dob=$_POST["dob"];


 			$maritalstatus=$_POST["maritalstatus"];
 			$employment=$_POST["employment"];
 			$employer=$_POST["employer"];


 			if(!isset($_POST["phonenumber"]) || empty($_POST["phonenumber"]))
 			{
 				$errormessage .= "PHONE NUMBER MUST BE FILLED,";
 			}
			elseif (strlen($_POST["phonenumber"]) == $maxm) 
		 			{
		 				$phonenumber=$_POST["phonenumber"];

		 			}
 			else
 				
 				$errormessage .= "<br>PHONE NUMBER MUST BE 10 NUMBERS</br>";

 			if(!isset($_POST["street"]) || empty($_POST["street"]))
 			{
 				$errormessage .= "STREET MUST BE FILLED,";
 			}
 			else
 				$street=$_POST["street"];

 			if(!isset($_POST["ostreet"]) || empty($_POST["ostreet"]))
 			{
 				$errormessage .= "OFFICE STREET MUST BE FILLED,";
 			}
 			else
 				$ostreet=$_POST["ostreet"]; 

 			if(!isset($_POST["city"]) || empty($_POST["city"]))
 			{
 				$errormessage .= "CITY MUST BE FILLED,";
 			}
 			else
 				$city=$_POST["city"]; 	


 			if(!isset($_POST["ocity"]) || empty($_POST["ocity"]))
 			{
 				$errormessage .= "OFFICE CITY MUST BE FILLED,";
 			}
 			else
 				$ocity=$_POST["ocity"]; 			


 			if(!isset($_POST["state"]) || empty($_POST["state"]))
 			{
 				$errormessage .= " STATE MUST BE FILLED,";
 			}
 			else
 				$state=$_POST["state"]; 	


 			if(!isset($_POST["ostate"]) || empty($_POST["ostate"]))
 			{
 				$errormessage .= "OFFICE STATE MUST BE FILLED,";
 			}
 			else
 				$ostate=$_POST["ostate"]; 

 			if(!isset($_POST["zipp"]) || empty($_POST["zipp"]))
 			{
 				$errormessage .= " ZIP MUST BE FILLED,";
 			}
 			else
 				$zip=$_POST["zipp"]; 	


 			if(!isset($_POST["ozipp"]) || empty($_POST["ozipp"]))
 			{
 				$errormessage .= "OFFICE ZIP MUST BE FILLED,";
 			}
 			else
 				$ozip=$_POST["ozipp"]; 


 			if(!isset($_POST["mobilenumber"]) || empty($_POST["mobilenumber"]))
 			{
 				$errormessage .= " MOBILE NUMBER MUST BE FILLED,";
 			}
 			elseif (strlen($_POST["mobilenumber"]) == $maxm) 
 			{
 				$mobilenumber=$_POST["mobilenumber"];

 			}
 			else
 					
 				$errormessage .= "<br> MOBILE NUMBER MUST BE 10 NUMBERS</br>";

 			if(!isset($_POST["omobilenumber"]) || empty($_POST["omobilenumber"]))
 			{
 				$errormessage .= "OFFICE MOBILE NUMBER MUST BE FILLED,";
 			}
 			elseif (strlen($_POST["omobilenumber"]) == $maxm) 
 			{
 				$omobilenumber=$_POST["omobilenumber"];

 			}
 			else
 					
 				$errormessage .= "<br>OFFICE MOBILE NUMBER MUST BE 10 NUMBERS</br>";

 			if(!isset($_POST["landlinenumber"]) || empty($_POST["landlinenumber"]))
 			{
 				$errormessage .= " LANDLINE NUMBER MUST BE FILLED,";
 			}
 			elseif (strlen($_POST["landlinenumber"]) == $maxm) 
 			{
 				$landlinenumber=$_POST["landlinenumber"];

 			}
 			else
 					
 				$errormessage .= "<br>LANDLINE NUMBER MUST BE 10 NUMBERS</br>";
 	


 			if(!isset($_POST["olandlinenumber"]) || empty($_POST["olandlinenumber"]))
 			{
 				$errormessage .= "OFFICE LANDLINE NUMBER MUST BE FILLED,";
 			}
 			elseif (strlen($_POST["olandlinenumber"]) == $maxm) 
 			{
 				$olandlinenumber=$_POST["olandlinenumber"];

 			}
 			else
 					
 				$errormessage .= "<br>OFFICE LANDLINE NUMBER MUST BE 10 NUMBERS</br>";


 			if(!isset($_POST["fax"]) || empty($_POST["fax"]))
 			{
 				$errormessage .= " FAX NUMBER MUST BE FILLED,";
 			}

 			elseif(!preg_match("/^[0-9 ]*$/",$_POST["fax"]))
 			{
 				$errormessage .= "<br>FAX MUST CONTAIN ONLY NUMBERS</br>";
 			}


 			else
 				$fax=$_POST["fax"]; 	


 			if(!isset($_POST["ofax"]) || empty($_POST["ofax"]))
 			{
 				$errormessage .= "OFFICE FAX NUMBER MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[0-9 ]*$/",$_POST["ofax"]))
 			{
 				$errormessage .= "<br> OFFICE FAX MUST CONTAIN ONLY NUMBERS</br>";
 			}
 			else
 				$ofax=$_POST["ofax"];

 			if(!isset($_POST["emailid"]) || empty($_POST["emailid"]))
 			{
 				$errormessage .= " EMAIL ID MUST BE FILLED,";
 			}
 			else
 				$emailid=$_POST["emailid"]; 	


 			if(!isset($_POST["oemailid"]) || empty($_POST["oemailid"]))
 			{
 				$errormessage .= "OFFICE EMAIL ID MUST BE FILLED,";
 			}
 			else
 				$oemailid=$_POST["oemailid"];

 			$yo=$_POST["yo"];

 			//display errors if any
 			if(empty($errormessage))
 			{

 				$query = "INSERT INTO registration1 (username,password,fname,mname,lname,options,dob,maritalstatus,employment,employer,phonenumber,street,ostreet,city,ocity,state,ostate,zipp,ozipp,mobilenumber,omobilenumber,landlinenumber,olandlinenumber,fax,ofax,emailid,oemailid,yo,fileToUpload) 
 				VALUES ('$username','$password','$fname','$mname','$lname','$option','$dob','$maritalstatus','$employment','$employer','$phonenumber','$street','$ostreet','$city','$ocity','$state','$ostate','$zip','$ozip','$mobilenumber','$omobilenumber','$landlinenumber','$olandlinenumber','$fax','$ofax','$emailid','$oemailid','$yo','$fileToUpload')";
				//$result = mysqli_query($connection,$query);
 				if (!mysqli_query($connection,$query))
 				{
 					die("database connection failed " . mysqli_error($connection));
 				}
 				else
 					{ 			$_SESSION['username']=$username;
 				$_SESSION['emailid']=$emailid;
 				$_SESSION['subject']="Account activation";
 				$_SESSION['message']="http://localhost/assignment/mindfire/activation.php?username=" . $username;
 				header("Location: mail.php");


 			}
 		}

 	}

 	?>

 				

</head>
<body>
	<div class="container">

		<h1 class="well">REGISTRATION FORM</h1>

		<!-- This div is used to display messages to the user -->
		<div class="row">
			<div class="col-md-12">
				<div id="message" class="jumbotron">
					<?php

						                        // if errors exit then show the div and the errors
					if ($errormessage) {
						echo "<br><label class='myLabel'>Please Fix the following errors: $errormessage</label><br>";
						                          
						 echo '<style type="text/css">

						 #message { 
						               display: block;
						                        }
						        </style>';
						          }

						                         // if errors doesnot exit then hide the div
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

						<form action="details.php" method="post" enctype="multipart/form-data" name="myform" onsubmit="return confirm('Do you really want to confirm?')">




							<div class="row">
								<div class="col-md-12">
									<input type="file" name="fileToUpload" id="fileToUpload"><br>
									<!--<input type="submit" value="Upload Image" name="submit"> -->

								</div>	
							</div><hr>






							<div class="row">
								<div class="col-sm-4 form-group">
									<label>USERNAME</label>
									<input class="form-control" id="usr" type="text" name="username" maxlength=20 required placeholder="Enter username Name Here.." value="<?php echo $_POST['username'] ?>" onchange= "caps()" required><p id="id1"></p>
								</div>


								<div class="col-sm-4 form-group">
									<label>PASSWORD</label>
									<input class="form-control" type="password" name="password" required placeholder="Password must be max 5 characters ." value="<?php echo $_POST['password']?>">
								</div>



								<div class="col-sm-4 form-group">
									<label>RETYPE PASSWORD</label>
									<input class="form-control" type="password" name="retypepassword" required placeholder="RETYPE PASSWORD Here.." >
								</div>
							</div>




							<div class="row">
								<div class="col-sm-4 form-group">
									<label>FIRST NAME</label>
									<input class="form-control" type="text" name="fname" maxlength=10 required placeholder="Enter firstname Name Here.." id="fname" onchange="myfname()" value="<?php echo $_POST['fname']?>" ><p id="id2"></p>

								</div>


								<div class="col-sm-4 form-group">
									<label>MIDDLE NAME</label>
									<input class="form-control" type="text" name="mname" maxlength=10 required placeholder="Enter middle name Here.." id="mname" onchange="mymname()" value="<?php echo $_POST['mname']?>"><p id="id3"></p>
								</div>



								<div class="col-sm-4 form-group">
									<label>LAST NAME</label>
									<input class="form-control" type="text" name="lname" maxlength=10 required placeholder="Enter last name Here.." id="lname" onchange="mylname()" value="<?php echo $_POST['lname']?>" ><p id="id4"></p>
								</div>
							</div>



							<div class="row">
								<div class="col-sm-4 form-group">
									<label>GENDER</label>

									<div class="radio">
										<label><input type="radio" name="options" value="male"> Male</male></label>




										<label><input type="radio" name="options" value="female">Female</male></label>
									</div>
								</div>

								<div class="col-sm-4 form-group">

									<label>MARITAL STATUS</label>
									<select class="form-control" id="maritalstatusselector" name="maritalstatus">
										<option>Single</option> 
										<option>Married</option>
										<option>Separated</option>
										<option>Divorced</option>
										<option>Widowed</option>
									</select>
								</div>

								<div class="col-sm-4 form-group">
									<label>DATE OF BIRTH</label> 
									<div class='input-group date'>
										<input type="date" class="form-control" id="datePicker" name="dob" required value="<?php echo $_POST['dob']?>">
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
									<input class="form-control" type="text" placeholder="Enter employer Here.." name="employer" onchange="emp()" id="employer" value="<?php echo $_POST['employer']?>"><p id="id6"></p>
								</div>



								<div class="col-sm-4 form-group">
									<label>PHONE NUMBER</label>
									<input class="form-control" type="text" maxlength=10 placeholder="Enter phone number Here.." name="phonenumber" id="phonenumber" onchange="myfne()" required value="<?php echo $_POST['phonenumber']?>"><p id="id5"></p>
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
									<input class="form-control" type="text" maxlength=20 placeholder="Enter street Name Here.." name="street" required value="<?php echo $_POST['street']?>">
								</div>

								<div class="col-sm-6 form-group">
									<label>	STREET</label>
									<input class="form-control" type="text" maxlength=20 placeholder="Enter office street Name Here.." name="ostreet" required value="<?php echo $_POST['ostreet']?>">
								</div>

							</div>

							<div class="row">
								<div class="col-sm-6 form-group">
									<label>	CITY</label>
									<input class="form-control" type="text" maxlength=20 placeholder="Enter city Name Here.." name="city" id="city" onchange="mycity()" required value="<?php echo $_POST['city']?>"><p id="id7"></p>
								</div>

								<div class="col-sm-6 form-group">
									<label>	CITY</label>
									<input class="form-control" type="text" placeholder="Enter office city Name Here.." name="ocity" id="ocity" onchange="myocity()" required value="<?php echo $_POST['ocity']?>"><p id="id8"></p>
								</div>

							</div>

							<div class="row">
								<div class="col-sm-6 form-group">
									<label>	STATE</label>
									<input class="form-control" type="text" maxlength=20 placeholder="Enter state Name Here.." name="state" id="state" onchange="mystate()" required value="<?php echo $_POST['state']?>"><p id="id9"></p>
								</div>

								<div class="col-sm-6 form-group">
									<label>	STATE</label>
									<input class="form-control" type="text" maxlength=20 placeholder="Enter office state Name Here.." name="ostate" id="ostate"  onchange="myostate()" required value="<?php echo $_POST['ostate']?>"><p id="id10"></p>
								</div>

							</div>

							<div class="row">
								<div class="col-sm-6 form-group">
									<label>	ZIP</label>
									<input class="form-control" type="number" maxlength=20 placeholder="Enter zip Name Here.." name="zipp" id="zipp" onchange="myzipp()" required value="<?php echo $_POST['zipp']?>"><p id="id11"></p>
								</div>

								<div class="col-sm-6 form-group">
									<label>	ZIP</label>
									<input class="form-control" type="number" maxlength=20 placeholder="Enter office zip Name Here.." name="ozipp" id ="ozipp" onchange="myozipp()" required value="<?php echo $_POST['ozipp']?>"><p id="id12"></p>
								</div>

							</div>


							<div class="row">
								<div class="col-sm-6 form-group">
									<label>	MOBILE NUMBER</label>
									<input class="form-control" type="text" maxlength=10 placeholder="Enter mobile number Name Here.." id="mobilenumber" onchange = "mymob()" name="mobilenumber" required value="<?php echo $_POST['mobilenumber']?>"><p id="id13"></p>
								</div>

								<div class="col-sm-6 form-group">
									<label>	MOBILE NUMBER</label>
									<input class="form-control" type="text" maxlength=10 placeholder="Enter office mobilenumber Name Here.." name="omobilenumber" id="omobilenumber" onchange = "myomob()" required value="<?php echo $_POST['omobilenumber']?>"><p id="id14"></p>
								</div>

							</div>


							<div class="row">
								<div class="col-sm-6 form-group">
									<label>	LANDLINE NUMBER</label>
									<input class="form-control" type="text" maxlength=10 placeholder="Enter landline number Name Here.." id="landlinenumber" onchange ="mylandline()" name="landlinenumber" required value="<?php echo $_POST['landlinenumber']?>"><p id="id15"></p>
								</div>

								<div class="col-sm-6 form-group">
									<label>	LANDLINE NUMBER</label>
									<input class="form-control" type="text" maxlength=10 placeholder="Enter office landline number Name Here.." id="olandlinenumber" onchange="myolandline()" name="olandlinenumber" required value="<?php echo $_POST['olandlinenumber']?>"><p id="id16"></p>
								</div>

							</div>


							<div class="row">
								<div class="col-sm-6 form-group">
									<label>	FAX</label>
									<input class="form-control" type="text" maxlength=20 placeholder="Enter fax Name Here.." name="fax" id="fax" onchange ="myfax()" required value="<?php echo $_POST['fax']?>"><p id="id17"></p>
								</div>

								<div class="col-sm-6 form-group">
									<label>	FAX</label>
									<input class="form-control" type="text" maxlength=20 placeholder="Enter company fax Name Here.." id="ofax" onchange="myofax()" name="ofax" required value="<?php echo $_POST['ofax']?>"><p id="id18"></p>
								</div>

							</div>

							<div class="row">
								<div class="col-sm-6 form-group">
									<label>	EMAIL ID</label>
									<input class="form-control" type="email" maxlength=50 placeholder="Enter EMAIL ID Here.." name="emailid" required value="<?php echo $_POST['emailid']?>">
								</div>

								<div class="col-sm-6 form-group">
									<label>	EMAIL ID</label>
									<input class="form-control" type="email" maxlength=50 placeholder="Enter company EMAIL ID Here.." name="oemailid" required value="<?php echo $_POST['oemailid']?>">
								</div>

							</div>


							<label for="comment">More about you:</label>
							<textarea class="form-control" rows="5" id="more" name="yo"><?php echo $_POST['yo']?></textarea>

							<div class="checkbox">
								<label><input type="checkbox"> I AGREE </label>
							</div>
							<div class="row">
							<button type="submit" name="submit" class="btn btn-info" onclick="return validfrom();"value="submit">Submit</button>
							
							</div>
						</form>
					</div> </div>

				</body>

				</html>


<?php
 	//close the connection
 	require 'fr.php';
	mysqli_close($connection);
?>


				

