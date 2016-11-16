{!!$DTable->setDeleteById('id')!!}
{!!$DTable->setEditById('code')!!}
{!!
    $DTable->set($pageHeading,
                array(
                    trans('pip.code')=>'code',
                    trans('pip.name')=>'name'
                    )
                )
!!}
{!!$DTable->show()!!}
            