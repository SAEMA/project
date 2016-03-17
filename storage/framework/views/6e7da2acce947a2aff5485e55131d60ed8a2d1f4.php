<?php $__env->startSection('main_content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class = "well">
                <img src = "img/images.jpeg">
            </div>
            <div class="well">
                <div class="panel-heading">Hey there !</div>
                <div class="panel-body">
                   Register in this amazing website and feel free to explore!!
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>