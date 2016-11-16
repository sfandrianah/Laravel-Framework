<?php /*
    @project  pip.
    @since  8/22/2016 10:21 AM
    @author  <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
*/ ?>
<!DOCTYPE html>
<html lang="en">


<?php $__env->startSection('page-content'); ?>
    <div class="row">
        <div class="col-md-12 full-width">
            <div class="panel mb-n" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px)">
                <?php echo $pageContent; ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>