<?php $__env->startSection('page-new-edit'); ?>
<form class="form-horizontal" page="provinsi/update" method="post"  id="validate-form" data-parsley-validate>
    <?php echo $Form->groupTextBox('Code','code','Input Code',true,null,'value="'.$value->code.'"'); ?>

    <?php echo $Form->groupTextBox('Nama','name','Input Nama',true,null,'value="'.$value->name.'"'); ?>

    <input type="hidden" name="id" id="id" value="<?php echo $value->id; ?>">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.scaffolding.new-edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>