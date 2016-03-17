<?php $__env->startSection('main_content'); ?>

<h1 class="well">WELCOME <?php echo e(Auth::user()->name); ?></h1>
	<div class="col-lg-12 well">				
		<form action="profile.php" method="post" enctype="multipart/form-data">							
			<div class="col-lg-12 form-group">							
				<img id="profilePic" src="img/<?php echo e(Auth::user()->fileToUpload); ?>" class="img-thumbnail"> 
				<br>
				<hr>
				<div class="row">
					<div class="col-lg-4 ">
						<label>USERNAME: <?php echo e(Auth::user()->name); ?></label>								
					</div>							
					<div class="col-lg-4 ">
						<label></label>							
					</div>									
					<div class="col-lg-4 ">
						<label>FIRST NAME: <?php echo e(Auth::user()->fname); ?></label>
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-lg-4 ">
						<label>MIDDLE NAME: <?php echo e(Auth::user()->mname); ?> </label>
					</div>														
					<div class="col-lg-4 ">
						<label>LAST NAME: <?php echo e(Auth::user()->lname); ?></label>		
					</div>
					<div class="col-lg-4 ">
						<label>GENDER: <?php echo e(Auth::user()->options); ?></label>								 
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-lg-4 ">
						<label> MARITAL STATUS:<?php echo e(Auth::user()->maritalstatus); ?> </label>
					</div>
					<div class="col-lg-4 ">
						<label> DATE OF BIRTH:<?php echo e(Auth::user()->dob); ?> </label>
					</div>
					<div class="col-lg-4 ">
						<label> EMPLOYMENT: <?php echo e(Auth::user()->employment); ?></label>
					</div>
				</div>
				
				<br>
				<div class="row">
					<div class="col-lg-4 ">
						<label> EMPLOYER: <?php echo e(Auth::user()->employer); ?> </label>
					</div>
					<div class="col-lg-4 ">
						<label> PHONE NUMBER: <?php echo e(Auth::user()->phonenumber); ?> </label>
					</div>
					<div class="col-lg-4 ">
					</div>
				</div>
				
				<hr>
				<div class="row">
					<div class="col-lg-6 ">
						<h3>RESIDENTIAL ADDRESS</h3>
					</div>		
				</div>

				<div class="row">
					<div class="col-lg-6 ">
						<label> STREET: <?php echo e(Auth::user()->street); ?> </label>
					</div>	
					<div class="col-lg-6 ">
						<label> CITY:<?php echo e(Auth::user()->city); ?>  </label>
					</div>	
				</div>
					
				<br>
				<div class="row">
					<div class="col-lg-6 ">
						<label> STATE: <?php echo e(Auth::user()->state); ?> </label>
					</div>	
					<div class="col-lg-6 ">
						<label> ZIP:<?php echo e(Auth::user()->zipp); ?>  </label>
					</div>
				</div>
					
				<br>
				<div class="row">
					<div class="col-lg-6 ">
						<label> MOBILE NUMBER:<?php echo e(Auth::user()->mobilenumber); ?>  </label>
					</div>	
					<div class="col-lg-6 ">
						<label> LANDLINE NUMBER:<?php echo e(Auth::user()->landlinenumber); ?>  </label>
					</div>	
				</div>
					
				<br>
				<div class="row">
					<div class="col-lg-6 ">
						<label> FAX: <?php echo e(Auth::user()->fax); ?> </label>
					</div>	
					<div class="col-lg-6 ">
						<label> EMAIL ID:<?php echo e(Auth::user()->email); ?> </label>
					</div>	
				</div>
					
				<br>
					<label> ABOUT YOU: <?php echo e(Auth::user()->yo); ?> </label>										
				<br>								
			</div>
		</form>
		<br>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>