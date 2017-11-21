<?php $__env->startSection('content'); ?>


<div class="be-content">
    <div class="main-content container-fluid">


    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('customjs'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            //initialize the javascript
            
            App.dashboard();
            //App.formElements();
        });

    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>