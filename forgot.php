<?php	
require('dbinfo.php');
require 'hr.php';
?>
<?php	
	if($_POST['submit'])
	{	$errormessage="";
		$username=$_POST['username'];
		$emailid=$_POST['emailid'];		
			$query = "SELECT password,emailid FROM registration1 WHERE username='$username' AND emailid='$emailid'";
			if (!mysqli_query($connection,$query))
			{
				die("database connection failed " . mysqli_error($connection));
			}
			else
			{ 	
				$result=mysqli_query($connection,$query);
				if($result && $row=mysqli_fetch_assoc($result))
				{
					$_SESSION['username']=$username;
					$_SESSION['emailid']=$emailid;
					$_SESSION['password']=$row['password'];
					$_SESSION['subject']="RECOVER PASSWORD";
					$msg = 'Hi Your username is ' . $username . " password is " . $row['password'];
					$_SESSION['message']=$msg;
					header("Location: mail.php");
				}
				else
					$errormessage ="your username and emaild do not match!";
			}
	}		
?>

<h4 class="well">ENTER USERNAME AND EMAIL ID<br><?php if($errormessage)
{echo $errormessage;}
?></h4>

<form method="post" action="forgot.php">	
<!--<label>USERNAME</label><br>-->
<input class="form-control" type="text" name="username" placeholder="Enter username Name Here.." ><br>
<!--<label>EMAIL ID</label><br>-->
<input class="form-control" type="email" name="emailid" placeholder="Enter email id Here.." ><br>
<button type="submit" class="btn btn-info" value="submit" name="submit">Submit</button><br>
</form>
</div><br>
<?php 
require('fr.php');
?>