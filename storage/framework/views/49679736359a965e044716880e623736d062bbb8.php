<?php echo $DTable->setDeleteById('id'); ?>

<?php echo $DTable->setEditById('code'); ?>

<?php echo $DTable->set($pageHeading,
                array(
                    'Code'=>'code',
                    'Name'=>'name'
                    )
                ); ?>

<?php echo $DTable->show(); ?>

            