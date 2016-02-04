<?php
session_start();
require'hr.php';
require'dbinfo.php';
require'editserverval.php';
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
			<form action="profile.php" method="post"  enctype="multipart/form-data">											
				<img id="image"src="img/<?php echo  $profile['fileToUpload']; ?>" width="200" height="200">
				<!--<img id="image" src="" alt="image preview here" height="150" width="150" />-->
					<input type="file" name="fileToUpload" id="fileToUpload" >
					<br>
						<hr>
						<div class="row">
							<div class="col-sm-4 form-group">
								<span class="glyphicon glyphicon-user"></span>
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
								<span class="glyphicon glyphicon-calendar"></span>
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
								<input class="form-control" type="text" id="employer" value="<?php echo $profile['employer'] ?>" name="employer">
								<div id="id6"></div>
							</div>
							<div class="col-sm-4 form-group">
							<span class="glyphicon glyphicon-phone-alt"></span>
								<label>PHONE NUMBER</label>
								<input class="form-control" type="text" id="phonenumber" value="<?php echo $profile['phonenumber'] ?>" name="phonenumber">
								<div id="id7"></div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-6 form-group">
							<span class="glyphicon glyphicon-home"></span>
							<h4><strong>RESIDENTIAL ADDRESS</strong></h4>
							</div>
							<span class="glyphicon glyphicon-home"></span>
							<div class="col-sm-6 form-group">
							<h4><strong>OFFICE ADDRESS</strong></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-road"></span>
								<label>	STREET</label>
									<input class="form-control" type="text" id="street" value="<?php echo $profile['street'] ?>" name="street">
									<div id="id8"></div>
							</div>
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-road"></span>
								<label>	STREET</label>
									<input class="form-control" type="text" id="ostreet" value="<?php echo $profile['ostreet'] ?>" name="ostreet">
									<div id="id9"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-road"></span>
								<label>	CITY</label>
								<input class="form-control" type="text" id="city" value="<?php echo $profile['city'] ?>" name="city">
								<div id="id10"></div>
							</div>
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-road"></span>
								<label>	CITY</label>
								<input class="form-control" type="text" id="ocity" value="<?php echo $profile['ocity'] ?>" name="ocity">
								<div id="id11"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-globe"></span>
								<label>	STATE</label>
								<input class="form-control" type="text" id="state" value="<?php echo $profile['state'] ?>" name="state">
								<div id="id12"></div>
							</div>
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-globe"></span>
								<label>	STATE</label>
								<input class="form-control" type="text" id="ostate" value="<?php echo $profile['ostate'] ?>" name="ostate">
								<div id="id13"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-send"></span>
								<label>	ZIP</label>
								<input class="form-control" type="number" id="zipp" value="<?php echo $profile['zipp'] ?>" name="zipp">
								<div id="id14"></div>
							</div>
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-send"></span>
								<label>	ZIP</label>
								<input class="form-control" type="number" id="ozipp" value="<?php echo $profile['ozipp'] ?>" name="ozipp">
								<div id="id15"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-phone"></span>
								<label>	MOBILE NUMBER</label>
								<input class="form-control" type="text" id="mobilenumber" value="<?php echo $profile['mobilenumber'] ?>" name="mobilenumber">
								<div id="id16"></div>
							</div>
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-phone"></span>
								<label>	MOBILE NUMBER</label>
								<input class="form-control" type="text" id="omobilenumber" value="<?php echo $profile['omobilenumber'] ?>" name="omobilenumber">
								<div id="id17"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-phone-alt"></span>
								<label>	LANDLINE NUMBER</label>
								<input class="form-control" type="text" id="landlinenumber" value="<?php echo $profile['landlinenumber'] ?>" name="landlinenumber">
								<div id="id18"></div>
							</div>
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-phone-alt"></span>
								<label>	LANDLINE NUMBER</label>
								<input class="form-control" type="text" id="olandlinenumber" value="<?php echo $profile['olandlinenumber'] ?>" name="olandlinenumber">
								<div id="id19"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-send"></span>
								<label>	FAX</label>
								<input class="form-control" type="text"id="fax" value="<?php echo $profile['fax'] ?>" name="fax">
								<div id="id20"></div>
							</div>
							<div class="col-sm-6 form-group">
								<span class="glyphicon glyphicon-send"></span>
								<label>	FAX</label>
								<input class="form-control" type="text" id="ofax" value="<?php echo $profile['ofax'] ?>" name="ofax">
								<div id="id21"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<span class ="glyphicon glyphicon-envelope"></span>
								<label>	EMAIL ID</label>
								<input class="form-control" type="email" id="emailid" value="<?php echo $profile['emailid'] ?>" name="emailid">
								<div id="id22"></div>
								<div id="us4"></div>
							</div>
							<div class="col-sm-6 form-group">
								<span class ="glyphicon glyphicon-envelope"></span>
								<label>	EMAIL ID</label>
								<input class="form-control" type="email" id="oemailid" value="<?php echo $profile['oemailid'] ?>" name="oemailid">
								<div id="id23"></div>
								<div id="us5"></div>
							</div>
						</div>
						<span class="glyphicon glyphicon-pencil"></span>
						<label for="comment">More about you:</label>
						<textarea class="form-control" rows="5" id="more" name="yo" placeholder="update status!" ><?php echo $profile['yo']?></textarea>
						<br>
						<button type="submit" class="btn btn-info" value="edit" id="edit" name="edit" >EDIT</button>
					</form>
				</div>
			</div>
<?php
	require 'fr.php';
?>
