<?php $__env->startSection('main_content'); ?>

<h1 class="well">PRIVILEGE FOR EACH TYPE OF USER</h1>
	<div class="col-md-12 well">
	
		<form method="post" action="">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="row">
				<div class="col-md-6 form-group">
					<label>ROLES</label>						
					<select class="form-control" id="privilege" name="privilege">
						<option>--</option>

							<?php foreach($roles_present as $role_present): ?>

								<option><?php echo e($role_present->type); ?></option>

							<?php endforeach; ?>

					</select>
				</div>
			</div>
		</form>	
		
		<div class="row">
			<div id="display"></div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>