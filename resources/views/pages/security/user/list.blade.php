{!!$DTable->setDeleteById('id')!!}
{!!$DTable->setEditById('user_code')!!}

{{--*/
$json = $DTable->getJson();
$data = json_decode($json)->data ;
$datas = json_decode($json) ;
foreach($data as $key => $value){
    if($data[$key]->status == 1){
        $data[$key]->status = '<label class="label label-success" rel="tooltip" title="Active"><i class="fa fa-check"></i></label>';
    } else if($data[$key]->status == 0){
        $data[$key]->approval_status = '<label class="label label-warning" rel="tooltip" title="Not Active"><i class="fa fa-exclamation-triangle"></i></label>';
    }

}
$datas->data = $data;
$DTable->setJson(json_encode($datas));

/*--}}

{!!
    $DTable->set($pageHeading,
                array(
                    trans('pip.code')=>'user_code',
                    trans('pip.expired-date')=>'expired_date',
                    trans('pip.status')=>'status'
                    )
                )
!!}
{!!$DTable->show()!!}
            