<?php $__env->startSection('main_content'); ?>

<h1 class="well">REGISTRATION FORM</h1>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>

	<div class="col-lg-12 well">
	<form action="" method="post" enctype="multipart/form-data" name="myform">
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
				<input class="form-control" id="usr" type="text" name="name" maxlength=20  placeholder="Enter username Name Here.." value="<?php echo e(old('name')); ?>" onchange= "caps()" ><p id="id1"></p>
			
				<?php if($errors->has('name')): ?>
				 	<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('name'); ?> </div></span>
				<?php endif; ?>

			</div>

			<div class="col-sm-4 form-group">
				<label>PASSWORD</label>
				<input class="form-control" type="password" name="password" id="password" maxlength= 6  placeholder="Password must be max 5 characters ." value=""><p id="id23"></p>
			 	
			 	<?php if($errors->has('password')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('password'); ?> </div></span>
			 	<?php endif; ?>
		
			</div>
			
			<div class="col-sm-4 form-group">
				<label>RETYPE PASSWORD</label>
				<input class="form-control" type="password" name="retypepassword" maxlength= 6 id="retypepassword" onchange="pwd()"  placeholder="RETYPE PASSWORD Here.." ><p id="id24"></p>
			 	
			 	<?php if($errors->has('retypepassword')): ?>
			 	<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('retypepassword'); ?> </div></span>
			 	<?php endif; ?>
		
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-4 form-group">
				<label>FIRST NAME</label>
				<input class="form-control" type="text" name="fname" maxlength=10  placeholder="Enter firstname Name Here.." id="fname" onchange="myname('id2','fname')" value="<?php echo e(old('fname')); ?>" ><p id="id2"></p>
				 
				 	<?php if($errors->has('fname')): ?>
				 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('fname'); ?> </div></span>
				 	<?php endif; ?>
			
			</div>
		
			<div class="col-sm-4 form-group">
				<label>MIDDLE NAME</label>
				<input class="form-control" type="text" name="mname" maxlength=10 placeholder="Enter middle name Here.." id="mname" onchange="myname('id3','mname')" value="<?php echo e(old('mname')); ?>">
				<p id="id3"></p>
				 	
				 	<?php if($errors->has('mname')): ?>
				 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('mname'); ?> </div></span>
				 	<?php endif; ?>

			</div>
		
			<div class="col-sm-4 form-group">
				<label>LAST NAME</label>
				<input class="form-control" type="text" name="lname" maxlength=10 placeholder="Enter last name Here.." id="lname" onchange="myname('id4','lname')" value="<?php echo e(old('lname')); ?>" ><p id="id4"></p>

				 	<?php if($errors->has('lname')): ?>
				 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('lname'); ?> </div></span>
				 	<?php endif; ?>
			
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4 form-group">
				<label>GENDER</label>
					<div class="radio">
						<label><input type="radio" name="options" value="male"> Male</male></label>
						<label><input type="radio" name="options" value="female">Female</male></label>
					</div>

					<?php if($errors->has('options')): ?>
				 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('options'); ?> </div></span>
				 	<?php endif; ?>

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

					<?php if($errors->has('maritalstatus')): ?>
				 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('maritalstatus'); ?> </div></span>
				 	<?php endif; ?>

			</div>

			<div class="col-sm-4 form-group">
				<span class="glyphicon glyphicon-calendar"></span>
				<label>DATE OF BIRTH</label> 
				<div class='input-group date'>
					<input type="date" class="form-control" id="datePicker" name="dob" value="<?php echo e(old('dob')); ?>">

				<?php if($errors->has('dob')): ?>
				 	<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('dob'); ?> </div></span>
				<?php endif; ?>

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
					<option>Employed</option>
				</select>

				<?php if($errors->has('employment')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('employment'); ?> </div></span>
			 	<?php endif; ?>
		
			</div>
		
			<div class="col-sm-4 form-group">
				<label>EMPLOYER (if employed)</label>
				<input class="form-control" type="text" placeholder="Enter employer Here.." name="employer" onchange="emp()" id="employer" value="<?php echo e(old('employer')); ?>"><p id="id6"></p>
			 
			 	<?php if($errors->has('employer')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('employer'); ?> </div></span>
			 	<?php endif; ?>

			</div>

			<div class="col-sm-4 form-group">
				<span class="glyphicon glyphicon-phone-alt"></span>
				<label>PHONE NUMBER</label>
				<input class="form-control" type="text" maxlength=10 placeholder="Enter phone number Here.." name="phonenumber" id="phonenumber" onchange="myfne('id5','phonenumber')" value="<?php echo e(old('phonenumber')); ?>"><p id="id5"></p>
			
				<?php if($errors->has('phonenumber')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('phonenumber'); ?> </div></span>
			 	<?php endif; ?>

			</div>
		</div>
		<hr>

		<div class="row">
			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-home"></span>
				<h4><strong>RESIDENTIAL ADDRESS</strong></h4>
			</div>	
		</div>

		<div class="row">
			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-road"></span>
				<label>	STREET</label>
					<input class="form-control" type="text" maxlength=20 onchange="mystreet('id20','street')" id="street" placeholder="Enter street Name Here.." name="street" value="<?php echo e(old('street')); ?>"><p id="id20"></p>
				 	
				 	<?php if($errors->has('street')): ?>
			 			<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('street'); ?> </div></span>
			 		<?php endif; ?>
		
			</div>
		
			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-road">
				<label>	CITY</label>
				<input class="form-control" type="text" maxlength=20 placeholder="Enter city Name Here.." name="city" id="city" onchange="myname('id7','city')" value="<?php echo e(old('city')); ?>"><p id="id7"></p>
			 
			 	<?php if($errors->has('city')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('city'); ?> </div></span>
			 	<?php endif; ?>
		
			</div>
		</div>
	
		<div class="row">
			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-globe"></span>
				<label>	STATE</label>
				<input class="form-control" type="text" maxlength=20 placeholder="Enter state Name Here.." name="state" id="state" onchange="myname('id9','state')" value="<?php echo e(old('state')); ?>"><p id="id9"></p>
			 	
			 	<?php if($errors->has('state')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('state'); ?> </div></span>
			 	<?php endif; ?>
			
			</div>

			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-send"></span>
				<label>	ZIP</label>
				<input class="form-control" type="number" maxlength=20 placeholder="Enter zip Name Here.." name="zipp" id="zipp" onchange="myzipp('id11','zipp')"value="<?php echo e(old('zipp')); ?>"><p id="id11"></p>
			 	
			 	<?php if($errors->has('zipp')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('zipp'); ?> </div></span>
			 	<?php endif; ?>

			</div>		
		</div>

		<div class="row">
			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-phone">
				<label>	MOBILE NUMBER</label>
				<input class="form-control" type="text" maxlength=10 placeholder="Enter mobile number Name Here.." id="mobilenumber" onchange = "myfne('id13','mobilenumber')" name="mobilenumber" value="<?php echo e(old('mobilenumber')); ?>"><p id="id13"></p>
			 
			 	<?php if($errors->has('mobilenumber')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('mobilenumber'); ?> </div></span>
			 	<?php endif; ?>
		
			</div>

			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-phone-alt"></span>
				<label>	LANDLINE NUMBER</label>
				<input class="form-control" type="text" maxlength=10 placeholder="Enter landline number Name Here.." id="landlinenumber" onchange ="myfne('id15','landlinenumber')" name="landlinenumber"  value="<?php echo e(old('landlinenumber')); ?>"><p id="id15"></p>
			 	
			 	<?php if($errors->has('landlinenumber')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('landlinenumber'); ?> </div></span>
			 	<?php endif; ?>
		
			</div>		
		</div>

		<div class="row">
			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-send"></span>
				<label>	FAX</label>
				<input class="form-control" type="text" maxlength=7 placeholder="Enter fax Name Here.." name="fax" id="fax" onchange ="myfax('id17','fax')"  value="<?php echo e(old('fax')); ?>"><p id="id17"></p>
			
				<?php if($errors->has('fax')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('fax'); ?> </div></span>
			 	<?php endif; ?>
		
			</div>

			<div class="col-sm-6 form-group">
				<span class ="glyphicon glyphicon-envelope"></span>
				<label>	EMAIL ID</label>
				<input class="form-control" type="email" maxlength=50 placeholder="Enter EMAIL ID Here.." name="email" id="email" onchange="email('id19','emailid')"  value="<?php echo e(old('email')); ?>"><p id="id19"></p>
			 	
			 	<?php if($errors->has('email')): ?>
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo $errors->first('email'); ?> </div></span>
				<?php endif; ?>
		
			</div>
		
		</div>
		<span class="glyphicon glyphicon-pencil"></span>
		<label for="comment">More about you:</label>
		<textarea class="form-control" rows="5" id="more" name="yo" value="<?php echo e(old('yo')); ?>"></textarea>
		<div class="checkbox">
			<label><input type="checkbox"> I AGREE </label>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				<button type="submit" name="submit" id="submit" class="btn btn-info" value="submit">Submit</button>				
			</div>
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		</div>
	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>