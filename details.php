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
			//for image
			$target_dir = "/var/www/html/assignment/mindfire/img/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$fileToUpload=basename($_FILES["fileToUpload"]["name"]);
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			//validation for image
			/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" && $_FILES["fileToUpload"]["size"] !== 0)
			{
				$errormessage .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}*/
			//for username
 			if(!isset($_POST["username"]) || empty($_POST["username"]))
 			{
 				$errormessage .= "USERNAME NOT SET,<br>";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["username"]))
 			{
 				$errormessage .= "USERNAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
 			else 
 				$username=$_POST["username"];
 			//for password
 			if(!isset($_POST["password"]) || empty($_POST["password"]))
 			{
 				$errormessage .= "PASSWORD MUST BE FILLED,<br>";
 			}
 			if (strlen($_POST["password"]) < $max) 
 			{
 				$password=$_POST["password"];
 			} else {
 				$errormessage .="PASSWORD TOO LONG,<br>";
 			}
 			//for reetyped password
 			if(isset($_POST["retypepassword"]) || !empty($_POST["retypepassword"]))
 			{				
 				if($_POST["retypepassword"]===$password)
 				{
 					$retypepassword=$_POST["retypepassword"]; 
 				} else {
 					$errormessage .="RETYPED PASSWORD IS WRONG!,<br>";
 				}
 			}
 			else 
 				$errormessage .="RETYPE PASSWORD MUST BE FILLED,<br>";
 			//for firstname
 			if(!isset($_POST["fname"]) || empty($_POST["fname"]))
 			{
 				$errormessage .= "FIRST NAME MUST BE FILLED,<br>";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["fname"]))
 			{
 				$errormessage .= "FIRSTNAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
 			else 
 				$fname=$_POST["fname"];
 			//for middle name
 			if(!isset($_POST["mname"]) || empty($_POST["mname"]))
 			{
 				$errormessage .= "MIDDLE NAME MUST BE FILLED,<br>";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["mname"]))
 			{
 				$errormessage .= "MIDDLE NAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
 			else 
 				$mname=$_POST["mname"];
 			//for last name
 			if(!isset($_POST["lname"]) || empty($_POST["lname"]))
 			{
 				$errormessage .= "LAST NAME MUST BE FILLED,<br>";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["lname"]))
 			{
 				$errormessage .= "LAST NAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
 			}
 			else 
 				$lname=$_POST["lname"];
 			//for gender
 			if(!isset($_POST["options"]) || empty($_POST["options"]))
 			{
 				$errormessage .= "GENDERMUST BE CHECKED,<br>";
 			}
 			else
 				$option=$_POST["options"];
 			//for date of birth
 			if(!isset($_POST["dob"]) || empty($_POST["dob"]))
 			{
 				$errormessage .= "DATE OF BIRTH MUST BE FILLED,<br>";
 			}
 			else
 				$dob=$_POST["dob"];
 			//for marital status
 			$maritalstatus=$_POST["maritalstatus"];
 			$employment=$_POST["employment"];
 			$employer=$_POST["employer"];
 			//for phonenumber
 			if(!isset($_POST["phonenumber"]) || empty($_POST["phonenumber"]))
 			{
 				$errormessage .= "PHONE NUMBER MUST BE FILLED,<br>";
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
 				$errormessage .= "<br>PHONE NUMBER MUST BE 10 NUMBERS</br>";
 			//for street
 			if(!isset($_POST["street"]) || empty($_POST["street"]))
 			{
 				$errormessage .= "STREET MUST BE FILLED,<br>";
 			}
 			elseif(!preg_match("/^[0-9A-Za-z ]*$/",$_POST['street']))
 			{
 				$errormessage .= "STREET CAN HAVE ONLY NUMBERS AND ALPHABETS<br>";
 			}
 			else
 				$street=$_POST["street"];
 			//for office street
 			if(!isset($_POST["ostreet"]) || empty($_POST["ostreet"]))
 			{
 				$errormessage .= "OFFICE STREET MUST BE FILLED,<br>";
 			}
 			elseif(!preg_match("/^[0-9A-Za-z ]*$/",$_POST['ostreet']))
 			{
 				$errormessage .= " OFIICE STREET CAN HAVE ONLY NUMBERS AND ALPHABETS<br>";
 			}
 			else
 				$ostreet=$_POST["ostreet"]; 
 			//for city
 			if(!isset($_POST["city"]) || empty($_POST["city"]))
 			{
 				$errormessage .= "CITY MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['city']))
 			{
 				$errormessage .= "CITY CAN HAVE ONLY ALPHABETS<br>";
 			}
 			else
 				$city=$_POST["city"]; 	
 			//for office city
 			if(!isset($_POST["ocity"]) || empty($_POST["ocity"]))
 			{
 				$errormessage .= "OFFICE CITY MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['ocity']))
 			{
 				$errormessage .= "OFFICE CITY CAN HAVE ONLY ALPHABETS<br>";
 			}
 			else
 				$ocity=$_POST["ocity"]; 			
 			//for state
 			if(!isset($_POST["state"]) || empty($_POST["state"]))
 			{
 				$errormessage .= " STATE MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['state']))
 			{
 				$errormessage .= "STATE CAN HAVE ONLY ALPHABETS<br>";
 			}
 			else
 				$state=$_POST["state"]; 	
 			//for office state
 			if(!isset($_POST["ostate"]) || empty($_POST["ostate"]))
 			{
 				$errormessage .= "OFFICE STATE MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['ostate']))
 			{
 				$errormessage .= "OFFICE STATE CAN HAVE ONLY ALPHABETS<br>";
 			}
 			else
 				$ostate=$_POST["ostate"];
 			//for zip
 			if(!isset($_POST["zipp"]) || empty($_POST["zipp"]))
 			{
 				$errormessage .= " ZIP MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[0-9 ]*$/",$_POST['zipp']))
 			{
 				$errormessage .= "ZIP CAN ONLY BE NUMBERS<br>";
 			}
 			else
 				$zip=$_POST["zipp"]; 	
 			//for office zip
 			if(!isset($_POST["ozipp"]) || empty($_POST["ozipp"]))
 			{
 				$errormessage .= "OFFICE ZIP MUST BE FILLED,";
 			}
 			elseif(!preg_match("/^[0-9 ]*$/",$_POST['ozipp']))
 			{
 				$errormessage .= " OFFICE ZIP CAN ONLY BE NUMBERS<br>";
 			}
 			else
 				$ozip=$_POST["ozipp"]; 
 			//for mobile number
 			if(!isset($_POST["mobilenumber"]) || empty($_POST["mobilenumber"]))
 			{
 				$errormessage .= " MOBILE NUMBER MUST BE FILLED,";
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
 				$errormessage .= "<br> MOBILE NUMBER MUST BE 10 NUMBERS</br>";
 			//for office mobilenumber
 			if(!isset($_POST["omobilenumber"]) || empty($_POST["omobilenumber"]))
 			{
 				$errormessage .= "OFFICE MOBILE NUMBER MUST BE FILLED,";
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
 				$errormessage .= "<br>OFFICE MOBILE NUMBER MUST BE 10 NUMBERS</br>";
 			//for landline number
 			if(!isset($_POST["landlinenumber"]) || empty($_POST["landlinenumber"]))
 			{
 				$errormessage .= " LANDLINE NUMBER MUST BE FILLED,";
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
 				$errormessage .= "<br>LANDLINE NUMBER MUST BE 10 NUMBERS</br>";
 			//for office landline number
 			if(!isset($_POST["olandlinenumber"]) || empty($_POST["olandlinenumber"]))
 			{
 				$errormessage .= "OFFICE LANDLINE NUMBER MUST BE FILLED,";
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
 				$errormessage .= "<br>OFFICE LANDLINE NUMBER MUST BE 10 NUMBERS</br>";
 			//FOR FAX
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
 			//FOR OFFICE FAX
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
 			//for email id
 			if(!isset($_POST["emailid"]) || empty($_POST["emailid"]))
 			{
 				$errormessage .= " EMAIL ID MUST BE FILLED,";
 			}
 			elseif(!preg_match('/^[a-z0-9_-]+@[a-z0-9._-]+\.[a-z]+$/i', $_POST['emailid']))
 			{
 				$errormessage .= "<br> EMAIL ID MUST BE OF THE CORRECT FORMAT!</br>";
 			}
 			else
 			{	
				$query = "SELECT COUNT(*) AS email from registration1 where emailid = '{$_POST["emailid"]}'";
				$result = mysqli_query($connection,$query);
				$getemailid = mysqli_fetch_assoc($result);
				if($getemailid['email']==1)
				{
					$errormessage .= "<br> EMAIL ID HAS ALREADY BEEN TAKEN!</br>";	
				}		
				else
 				$emailid = $_POST["emailid"]; 	
 			}
 			//for office email id
 			if(!isset($_POST["oemailid"]) || empty($_POST["oemailid"]))
 			{
 				$errormessage .= "OFFICE EMAIL ID MUST BE FILLED,";
 			}
 			elseif(!preg_match('/^[a-z0-9_-]+@[a-z0-9._-]+\.[a-z]+$/i', $_POST['oemailid']))
 			{
 				$errormessage .= "<br> OFFICE EMAIL ID MUST BE OF THE CORRECT FORMAT!</br>";
 			}
 			else
 				$oemailid=$_POST["oemailid"];
 			//for about you
 			$yo=$_POST["yo"];
 			$hash = md5( rand(0,1000) );
 			//display errors if any
 			if(empty($errormessage))
 			{
 				$query = "INSERT INTO registration1 (hash,username,password,fname,mname,lname,options,dob,maritalstatus,employment,employer,phonenumber,street,ostreet,city,ocity,state,ostate,zipp,ozipp,mobilenumber,omobilenumber,landlinenumber,olandlinenumber,fax,ofax,emailid,oemailid,yo,fileToUpload) 
 				VALUES ('$hash','$username','$password','$fname','$mname','$lname','$option','$dob','$maritalstatus','$employment','$employer','$phonenumber','$street','$ostreet','$city','$ocity','$state','$ostate','$zip','$ozip','$mobilenumber','$omobilenumber','$landlinenumber','$olandlinenumber','$fax','$ofax','$emailid','$oemailid','$yo','$fileToUpload')";
 				if (!mysqli_query($connection,$query))
 				{
 					die("database connection failed " . mysqli_error($connection));
 				}
 				else
 				{
	 				$_SESSION['username']=$username;
	 				$_SESSION['emailid']=$emailid;
	 				$_SESSION['subject']="Account activation";
	 				$_SESSION['message']="http://localhost/newproject/project/activation.php?username=" . $username ."&hash" . $hash;
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
				<form action="details.php" method="post" enctype="multipart/form-data" name="myform">
					<div class="row">
						<div class="col-md-12">
							<input type="file" name="fileToUpload" id="fileToUpload"><br>
							 <img id="image" src="" alt="image preview here" height="150" width="150" />
						</div>	
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-4 form-group">
							<span class="glyphicon glyphicon-user"></span>
							<label>USERNAME</label>
							<input class="form-control" id="usr" type="text" name="username" maxlength=20 required placeholder="Enter username Name Here.." value="<?php echo $_POST['username'] ?>" onchange= "caps()" required><p id="id1"></p>
						</div>
						<div class="col-sm-4 form-group">
							<label>PASSWORD</label>
							<input class="form-control" type="password" name="password" id="password" maxlength= 5 required placeholder="Password must be max 5 characters ." value="<?php echo $_POST['password']?>"><p id="id23"></p>
						</div>
						<div class="col-sm-4 form-group">
							<label>RETYPE PASSWORD</label>
							<input class="form-control" type="password" name="retypepassword" maxlength= 5 id="retypepassword" onchange="pwd()" required placeholder="RETYPE PASSWORD Here.." ><p id="id24"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label>FIRST NAME</label>
							<input class="form-control" type="text" name="fname" maxlength=10 required placeholder="Enter firstname Name Here.." id="fname" onchange="myname('id2','fname')" value="<?php echo $_POST['fname']?>" ><p id="id2"></p>
						</div>
						<div class="col-sm-4 form-group">
							<label>MIDDLE NAME</label>
							<input class="form-control" type="text" name="mname" maxlength=10 required placeholder="Enter middle name Here.." id="mname" onchange="myname('id3','mname')" value="<?php echo $_POST['mname']?>"><p id="id3"></p>
						</div>
						<div class="col-sm-4 form-group">
							<label>LAST NAME</label>
							<input class="form-control" type="text" name="lname" maxlength=10 required placeholder="Enter last name Here.." id="lname" onchange="myname('id4','lname')" value="<?php echo $_POST['lname']?>" ><p id="id4"></p>
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
							<span class="glyphicon glyphicon-calendar"></span>
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
							<span class="glyphicon glyphicon-phone-alt"></span>
							<label>PHONE NUMBER</label>
							<input class="form-control" type="text" maxlength=10 placeholder="Enter phone number Here.." name="phonenumber" id="phonenumber" onchange="myfne('id5','phonenumber')" required value="<?php echo $_POST['phonenumber']?>"><p id="id5"></p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-home"></span>
							<h4><strong>RESIDENTIAL ADDRESS</strong></h4>
						</div>
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-home"></span>
							<h4><strong>OFFICE ADDRESS</strong></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-road"></span>
							<label>	STREET</label>
								<input class="form-control" type="text" maxlength=20 onchange="mystreet('id20','street')" id="street" placeholder="Enter street Name Here.." name="street" required value="<?php echo $_POST['street']?>"><p id="id20"></p>
						</div>
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-road"></span>
							<label>	STREET</label>
								<input class="form-control" type="text" maxlength=20 onchange="mystreet('id21','ostreet')" id="ostreet" placeholder="Enter office street Name Here.." name="ostreet" required value="<?php echo $_POST['ostreet']?>"><p id="id21"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-road">
							<label>	CITY</label>
							<input class="form-control" type="text" maxlength=20 placeholder="Enter city Name Here.." name="city" id="city" onchange="myname('id7','city')" required value="<?php echo $_POST['city']?>"><p id="id7"></p>
						</div>
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-road">
							<label>	CITY</label>
							<input class="form-control" type="text" placeholder="Enter office city Name Here.." name="ocity" id="ocity" onchange="myname('id8','ocity')" required value="<?php echo $_POST['ocity']?>"><p id="id8"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-globe"></span>
							<label>	STATE</label>
							<input class="form-control" type="text" maxlength=20 placeholder="Enter state Name Here.." name="state" id="state" onchange="myname('id9','state')" required value="<?php echo $_POST['state']?>"><p id="id9"></p>
						</div>
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-globe"></span>
							<label>	STATE</label>
							<input class="form-control" type="text" maxlength=20 placeholder="Enter office state Name Here.." name="ostate" id="ostate"  onchange="myname('id10','ostate')" required value="<?php echo $_POST['ostate']?>"><p id="id10"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-send"></span>
							<label>	ZIP</label>
							<input class="form-control" type="number" maxlength=20 placeholder="Enter zip Name Here.." name="zipp" id="zipp" onchange="myzipp('id11','zipp')" required value="<?php echo $_POST['zipp']?>"><p id="id11"></p>
						</div>
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-send"></span>
							<label>	ZIP</label>
							<input class="form-control" type="number" maxlength=20 placeholder="Enter office zip Name Here.." name="ozipp" id ="ozipp" onchange="myzipp('id12','ozipp')" required value="<?php echo $_POST['ozipp']?>"><p id="id12"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-phone">
							<label>	MOBILE NUMBER</label>
							<input class="form-control" type="text" maxlength=10 placeholder="Enter mobile number Name Here.." id="mobilenumber" onchange = "myfne('id13','mobilenumber')" name="mobilenumber" required value="<?php echo $_POST['mobilenumber']?>"><p id="id13"></p>
						</div>
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-phone">
							<label>	MOBILE NUMBER</label>
							<input class="form-control" type="text" maxlength=10 placeholder="Enter office mobilenumber Name Here.." name="omobilenumber" id="omobilenumber" onchange = "myfne('id14','omobilenumber')" required value="<?php echo $_POST['omobilenumber']?>"><p id="id14"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-phone-alt"></span>
							<label>	LANDLINE NUMBER</label>
							<input class="form-control" type="text" maxlength=10 placeholder="Enter landline number Name Here.." id="landlinenumber" onchange ="myfne('id15','landlinenumber')" name="landlinenumber" required value="<?php echo $_POST['landlinenumber']?>"><p id="id15"></p>
						</div>
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-phone-alt"></span>
							<label>	LANDLINE NUMBER</label>
							<input class="form-control" type="text" maxlength=10 placeholder="Enter office landline number Name Here.." id="olandlinenumber" onchange="myfne('id16','olandlinenumber')" name="olandlinenumber" required value="<?php echo $_POST['olandlinenumber']?>"><p id="id16"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-send"></span>
							<label>	FAX</label>
							<input class="form-control" type="text" maxlength=7 placeholder="Enter fax Name Here.." name="fax" id="fax" onchange ="myfax('id17','fax')" required value="<?php echo $_POST['fax']?>"><p id="id17"></p>
						</div>
						<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-send"></span>
							<label>	FAX</label>
							<input class="form-control" type="text" maxlength=7 placeholder="Enter company fax Name Here.." id="ofax" onchange="myfax('id18','ofax')" name="ofax" required value="<?php echo $_POST['ofax']?>"><p id="id18"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<span class ="glyphicon glyphicon-envelope"></span>
							<label>	EMAIL ID</label>
							<input class="form-control" type="email" maxlength=50 placeholder="Enter EMAIL ID Here.." name="emailid" id="emailid" onchange="email('id19','emailid')" required value="<?php echo $_POST['emailid']?>"><p id="id19"></p>
						</div>
						<div class="col-sm-6 form-group">
							<span class ="glyphicon glyphicon-envelope"></span>
							<label>	EMAIL ID</label>
							<input class="form-control" type="email" maxlength=50 placeholder="Enter company EMAIL ID Here.." name="oemailid" id="oemailid" onchange="email('id22','oemailid')" required value="<?php echo $_POST['oemailid']?>"><p id="id22"></p>
						</div>
					</div>
					<span class="glyphicon glyphicon-pencil"></span>
					<label for="comment">More about you:</label>
					<textarea class="form-control" rows="5" id="more" name="yo"><?php echo $_POST['yo']?></textarea>
					<div class="checkbox">
						<label><input type="checkbox"> I AGREE </label>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<button type="submit" name="submit" id="submit" class="btn btn-info" value="submit">Submit</button>				
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
<?php
 	//closing the connection
 	require 'fr.php';
	mysqli_close($connection);
?>


				

