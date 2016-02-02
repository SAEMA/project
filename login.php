<?php  
	require 'hr.php';
	session_start();
?>
	<h1 class="well">LOGIN FORM</h1>
		<div class="col-md-12 well">
			<form method="post" >
			<div id="us3"></div>
				<?php if($_SESSION['id'])
					echo "PLEASE CHECK YOUR MAIL!";
				?>
				<?php if($_SESSION['ids'])
					echo "PLEASE CHECK YOUR MAIL and CLICK THE LINK THERE!";		
				?>
					<div class="row">
						<div class="col-md-4 form-group">
							<label>USERNAME</label>
							<input class="form-control" type="text" name="username" id="usr" required placeholder="Enter username Name Here.." >
							<div id="us1"></div>
						</div>
						<div class="col-md-4 form-group">
							<label>PASSWORD</label>
							<input class="form-control" type="password" name="password" id="pwd" maxlength=5 required placeholder="Password must be max 5 characters ." >
							<div id="us2"></div>
						</div>
					</div>
					<button type="button" class="btn btn-info" name="login" id="login" value="submit">Submit</button>
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
<?php  
	require 'fr.php';
?>		

