<?php echo $DTable->setDeleteById('id'); ?>

<?php echo $DTable->setEditById('code'); ?>

<?php echo $DTable->set($pageHeading,
                array(
                    trans('pip.code')=>'code',
                    trans('pip.name')=>'name'
                    )
                ); ?>

<?php echo $DTable->show(); ?>

            