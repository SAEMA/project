<?php $__env->startSection('main_content'); ?>

<br>
<form id="hey" action = "#">
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<table id="list_records" ></table>
	<div id="perpage"></div><br />
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>