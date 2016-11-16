<?php $__env->startSection('page-new-edit'); ?>
<form class="form-horizontal" page="provinsi/save" method="post"  id="validate-form" data-parsley-validate>
    <?php echo $Form->groupTextBox('Code','code','Input Code'); ?>

    <?php echo $Form->groupTextBox('Nama','name','Input Nama'); ?>

</form>

<?php if(isset($_GET['id'])): ?>
    <?php echo $Form->setValue('code',$value->code); ?>

    <?php echo $Form->setValue('name',$value->name); ?>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.scaffolding.new-edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>