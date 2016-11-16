<!DOCTYPE HTML>


<html lang="en" class="coming-soon">
<head>
    <?php echo $__env->make('template.login-head-tag', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body class="focused-form animated-content" style="background: url('../img/kembalikebawah.jpg')">
    <div class="container" id="login-form">
        <?php echo $__env->yieldContent('login-content'); ?>
    </div>
<?php echo $__env->make('template.login-script-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>