    
    <?php $__env->startSection('page-content'); ?> 
    <?php echo $__env->make('template.scaffolding.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script>
        $(function () {
            setPage('list');
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>