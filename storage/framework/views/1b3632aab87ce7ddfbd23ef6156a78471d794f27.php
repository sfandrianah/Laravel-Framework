<?php $__env->startSection('page-new-edit'); ?>

<?php echo FORM::open(['page' => 'city/update', 'class'=>'form-horizontal', 'method'=>'post', 'id'=>'validate-form', 'data-parsley-validate']); ?>

    <?php echo $Form->groupTextBox(trans('pip.code'),'code',trans('pip.input.code'),true,null,'value="'.$value->code.'"'); ?>

    <?php echo $Form->groupTextBox(trans('pip.name'),'name',trans('pip.input.name'),true,null,'value="'.$value->name.'"'); ?>

    <?php echo $Form->title('Description')->id('description')->name('description')->placeholder(trans('pip.input.description'))->required(false)->value($value->description)->textarea(); ?>

    <input type="hidden" name="id" id="id" value="<?php echo $value->id; ?>">
<?php echo FORM::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.scaffolding.new-edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>