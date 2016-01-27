<?php  
	require 'hr.php';
?>

<?php 
	session_start();
	require('dbinfo.php');

	$db=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


	if(!$db)
	{
		die("no db connection");
	}

	if($_POST['login'])
	{

	$username=$_POST['username'];
	$password=$_POST['password'];
	$query2="SELECT * FROM registration1 WHERE username='$username' AND password='$password'";
	$result=mysqli_query($db,$query2);
	if($result && $rows=mysqli_fetch_assoc($result))
	{

		$_SESSION["username"]=$username;
		header("Location: profile.php");
	}
	else echo '<div class="well" ><div class="saema"><H4>USERNAME PASSWORD DO NOT MATCH!</H4></div></div>;';

	}

 ?>



				<h1 class="well">LOGIN FORM</h1>
				<div class="col-md-12 well">


					<form method="post">
						<?php if($_SESSION['id'])
						echo "PLEASE CHECK YOUR MAIL!";

						?>

						<?php if($_SESSION['ids'])
						echo "PLEASE CHECK YOUR MAIL and CLICK THE LINK THERE!";
						
						?>


						

						<div class="row">
							<div class="col-md-4 form-group">
								<label>USERNAME</label>
								<input class="form-control" type="text" name="username" required placeholder="Enter username Name Here.." >
							</div>


							<div class="col-md-4 form-group">
								<label>PASSWORD</label>
								<input class="form-control" type="password" name="password" maxlength=5 required placeholder="Password must be max 5 characters ." >
							</div>

						</div>
						<button type="submit" class="btn btn-info" name="login" value="submit">Submit</button>
						<a href="forgot.php">FORGOT PASSWORD?</a>

					</form>	


				</div>
				
				<h2>.</h2>
				<h2 class="well">SIGN UP!</h2>
				<div class="col-md-12 well">

					<form action="details.php" method="post">


						<button type="submit" class="btn btn-info" value="submit">SIGN UP</button>

					</form>
				</div> 
			</div>


		</body>	
		</html>

<?php  
		require 'fr.php';

?>		

