{!!$DTable->setDeleteById('id')!!}
{!!$DTable->setEditById('code')!!}
{{--*/ 
    
$DTable->buttonAction(false); 
$DTable->buttonDeleteCollection(false); 
$DTable->selectAll(false); 


$json = $DTable->getJson();
$data = json_decode($json)->data ;
$datas = json_decode($json) ;
foreach($data as $key => $value){
    if($data[$key]->approval_status == 1){
        $data[$key]->approval_status = '<label class="label label-success" rel="tooltip" title="Approved"><i class="fa fa-check"></i></label>';
    } else if($data[$key]->approval_status == 2){
        $data[$key]->approval_status = '<label class="label label-danger" rel="tooltip" title="Rejected"><i class="fa fa-close"></i></label>';
    } else if($data[$key]->approval_status == 0){
        $data[$key]->approval_status = '<label class="label label-warning" rel="tooltip" title="To Be Approved"><i class="fa fa-exclamation-triangle"></i></label>';
    }
  
}
$datas->data = $data;
$DTable->setJson(json_encode($datas));

/*--}}

{!!
    $DTable->set($pageHeading,
                array(
                    trans('pip.code')=>'code',
                    trans('pip.name')=>'name',
                    trans('pip.address')=>'address',
                    trans('pip.registration_date')=>'registration_date',
                    trans('pip.status')=>'approval_status'
                    )
                )
!!}

{!!$DTable->show()!!}
      