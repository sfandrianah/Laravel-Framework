<?php $__env->startSection('login-content'); ?>
<div class="login-logo">
    <?php echo HTML::image('img/sddbp-login.png', 'Paper', ['style' => 'width: 300px;height: 70px;margin-top:10px;']); ?>

</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Login Form</h2>

            </div>

            <?php if(session('msg')): ?>
            <div class="alert-error" style="color: red">
                <?php echo e(session('msg')); ?>

            </div>
            <?php endif; ?>

            <div class="panel-body">
                <?php echo FORM::open(['url'=>'auth/login', 'class' => 'form-horizontal', 'id' => 'validate-form']); ?>

                <div class="form-group mb-md">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="ti ti-user"></i>
                            </span>
                            <?php echo FORM::text('user_code', null, ['class'=>'form-control', 'placeholder'=>'Email or User name']); ?>

                        </div>
                    </div>
                </div>
                <div class="form-group mb-md">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="ti ti-key"></i>
                            </span>
                            <?php echo FORM::password('password', ['class'=>'form-control', 'placeholder'=>'Password']); ?>

                        </div>
                    </div>
                </div>
                <div class="form-group mb-n">
                    <div class="col-xs-12">
                        <div class="checkbox-inline icheck pull-right p-n">
                            <div class="checkbox">
                                <label for=""><input type="checkbox" /> Remember me</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="panel-footer">
                <div class="clearfix">
                    <?php echo FORM::submit('Login', ['class' => 'btn btn-primary btn-raised pull-right']); ?>

                </div>
            </div>
            <?php echo FORM::close(); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.auth.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>