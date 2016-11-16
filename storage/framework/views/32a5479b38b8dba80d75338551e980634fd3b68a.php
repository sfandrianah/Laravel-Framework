<?php $__env->startSection('page-new-edit'); ?>

<?php echo FORM::open(['page' => 'city/save', 'class'=>'form-horizontal', 'method'=>'post', 'id'=>'validate-form', 'data-parsley-validate']); ?>

    <?php echo $Form->title(trans('pip.code'))->id('code')->name('code')->placeholder(trans('pip.input.code'))->textbox(); ?>

    <?php echo $Form->title(trans('pip.name'))->id('name')->name('name')->placeholder(trans('pip.input.name'))->textbox(); ?>

    <?php echo $Form->title(trans('pip.description'))->id('description')->name('description')->placeholder(trans('pip.input.description'))->required(false)->textarea(); ?>

    <?php echo $Form->title(trans('master.city.province'))->id('combobox')->data($json_data)->combobox(); ?>

<?php echo FORM::close(); ?>


<?php if(isset($_GET['id'])): ?>
    <?php echo $Form->setValue('code',$value->code); ?>

    <?php echo $Form->setValue('name',$value->name); ?>

    <?php echo $Form->setValue('description',$value->descrition); ?>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.scaffolding.new-edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>