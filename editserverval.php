<?php
session_start();
require('dbinfo.php');
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
			elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST["employer"]))
 			{
 				$errormessage .= "EMPLOYER NAME CAN ONLY CONTAIN ALPHABETS A-Z or a-z,<br>";
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
			elseif(!preg_match("/^[a-z0-9_-]+@[a-z0-9._-]+\.[a-z]+$/i", $_POST['emailid']))
 			{
 				$errormessage .= "<br> EMAIL ID MUST BE OF PROPER FORMAT!</br>";
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
			//checking for correct input type of image
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" && $_FILES["fileToUpload"]["size"] !== 0)
			{
				$errormessage .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
			if(empty($errormessage))
			{	
	    		if($_FILES["fileToUpload"]["size"] === 0)
				{			
					$query4 = "UPDATE registration1 SET password='$password',fname='$fname',mname='$mname',lname='$lname',options='$options',dob='$dob',maritalstatus='$maritalstatus',employment='$employment',employer='$employer',phonenumber='$phonenumber',street='$street',ostreet='$ostreet',city='$city',ocity='$ocity',state='$state',ostate='$ostate',zipp='$zipp',ozipp='$ozipp',mobilenumber='$mobilenumber',omobilenumber='$omobilenumber',landlinenumber='$landlinenumber',olandlinenumber='$olandlinenumber',fax='$fax',ofax='$ofax',emailid='$emailid',oemailid='$oemailid',yo='$yo' WHERE username='$username'";
				}									
				else
				{			
					$query4 = "UPDATE registration1 SET password='$password',fname='$fname',mname='$mname',lname='$lname',options='$options',dob='$dob',maritalstatus='$maritalstatus',employment='$employment',employer='$employer',phonenumber='$phonenumber',street='$street',ostreet='$ostreet',city='$city',ocity='$ocity',state='$state',ostate='$ostate',zipp='$zipp',ozipp='$ozipp',mobilenumber='$mobilenumber',omobilenumber='$omobilenumber',landlinenumber='$landlinenumber',olandlinenumber='$olandlinenumber',fax='$fax',ofax='$ofax',emailid='$emailid',oemailid='$oemailid',yo='$yo',fileToUpload='$fileToUpload' WHERE username='$username'";					
				}
				if (!$result = mysqli_query($connection,$query4))
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
<?php
}
else
{
	header("Location:login.php");
}
mysqli_close($connection);
?>