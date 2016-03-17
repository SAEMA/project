<?php $__env->startSection('main_content'); ?>

<?php if(!empty(Session::get('message_for_roles'))): ?>
<div class ="well">
    <?php echo e(Session::get('message_for_roles')); ?> 
</div>         
<?php endif; ?>

<h1 class = "well">ROLES FOR EACH USER</h1>
	<div class = "col-md-12 well">
		<div class = "row">

			<div class="col-md-4 ">
				<h4> USERNAME</h4>
			</div>
		
			<div class="col-md-4 ">
				<h4> ROLES</h4>
			</div>
		
			<div class="col-md-4 ">
				<h4>UPDATE</h4>
			</div>
		
		</div>
		<hr>
		
	<?php foreach($roles as $user): ?>
	<form method = "post" action = "">
	
		<div class = "row">
			<div class = "col-md-4 ">
    			<?php echo e($user->name); ?>

			</div>
			
			<div class = "col-md-4 ">
				<select class = "form-control" id = "reassign" name = "reassign">

				<?php foreach($roles_data as $role_data): ?>

					<?php if($role_data->id == $user->privilegesid): ?>						
						<option><?php echo e($role_data->type); ?></option>
								
					<?php endif; ?>	

				<?php endforeach; ?>	

				<?php foreach($roles_data as $role_data): ?>

					<?php if($role_data->id != $user->privilegesid): ?>						
						<option><?php echo e($role_data->type); ?></option>
								
					<?php endif; ?>	

				<?php endforeach; ?>	

				</select>
    		</div>

    		<div class="col-md-4 ">
				<button type="submit" class="btn btn-info" name="update" id="update" value="<?php echo e($user->name); ?>">UPDATE</button>
			</div>

    	</div>
    		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">	
    </form>
	<br>
	<?php endforeach; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>