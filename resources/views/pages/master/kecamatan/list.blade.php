
{!!$DTable->setDeleteById('IDKecamatan')!!}
{!!$DTable->setEditById('IDKecamatan')!!}
{!!
    $DTable->set($pageHeading,
                array(
                    '#' => 'IDKecamatan',
                    'Name'=>'Nama',
                    'id Kabupaten'=>'TES'
                    )
                )
!!}
{!!$DTable->show()!!}
            