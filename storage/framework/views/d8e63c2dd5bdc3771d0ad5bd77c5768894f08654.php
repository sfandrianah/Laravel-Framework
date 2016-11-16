<?php /*    
    @project  pip.
    @since  8/22/2016 10:21 AM
    @author  <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
*/ ?>
<!DOCTYPE HTML>
<html lang="en">
    <ol class="breadcrumb">
        <?php if(count($pageBreadCrumb) > 0): ?>
            <?php foreach($pageBreadCrumb as $pbcp): ?>
                <?php foreach($pbcp as $pbcValue => $pbcKey): ?>
                    <li class=""><a href=<?php echo URL($pbcKey); ?>><?php echo $pbcValue; ?></a></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php endif; ?>
            <?php foreach($lastPageBreadCrumb as $lpbcKey => $lpbcValue): ?>
                <li class="active"><a href=<?php echo URL($lpbcValue); ?>><?php echo $lpbcKey; ?></a></li>
            <?php endforeach; ?>
    </ol>
    <div class="page-heading">
        <div class="container-fluid">
            <div class="ui-sortable" data-widget-group="group1">
                
            </div>
        </div>
        <div id="ajaxPage">
        <?php echo $__env->yieldContent('page-content'); ?>
        </div>
    </div>
</html>