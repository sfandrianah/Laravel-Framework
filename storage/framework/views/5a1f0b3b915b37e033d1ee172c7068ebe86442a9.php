<?php $__env->startSection('page-new-edit'); ?>
<?php /**/ $Form->formLayout('vertical') /**/ ?>
<?php echo FORM::open(['page' => 'registrasi/save', 'class'=>'', 'method'=>'post', 'id'=>'validate-form', 'data-parsley-validate']); ?>

<div class="col-md-6">
    <?php echo $Form->title(trans('register-lembaga.device_id'))->id('device_id')->name('device_id')->placeholder(trans('register-lembaga.device_id'))->textbox(); ?>

    <?php echo $Form->title(trans('register-lembaga.institution_code'))->id('code')->name('code')->placeholder(trans('register-lembaga.institution_code'))->textbox(); ?>

    <?php echo $Form->title(trans('register-lembaga.institution_name'))->id('name')->name('name')->placeholder(trans('register-lembaga.institution_name'))->textbox(); ?>

</div>
<div class="col-md-6">
    <?php echo $Form->title(trans('register-lembaga.address'))->id('address')->name('address')->placeholder(trans('register-lembaga.address'))->textbox(); ?>

    <?php echo $Form->title(trans('register-lembaga.province'))->name('province')->attr('onchange="lovCityByProvince(this,\'city\',\''.URL('master/city/lovCityProvince').'\')"')->id('province')->data($provinceLOV)->combobox(); ?>

    <?php echo $Form->title(trans('register-lembaga.city'))->name('city')->attr('')->id('city')->combobox(); ?>

</div>
<?php echo FORM::close(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.scaffolding.new-edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>