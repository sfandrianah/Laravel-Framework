{!!$DTable->setDeleteById('id')!!}
{!!$DTable->setEditById('code')!!}
{{--*/ 
//$DTable->setFormSearch(false);
$DTable->buttonAction(false); 
$DTable->buttonCreate(false);
$DTable->buttonDeleteCollection(false); 
$DTable->selectAll(true); 
$DTable->addHeader('<a href="javascript:void(0)"    
                onclick="approveAll(this,\''.URL('lembaga/registrasi/approval/approve').'\')"
                rel="tooltip" title="Approve Collection"       
                pip-notif-approve-collection="Are You Sure Approve this data collection ?" 
                class="btn btn-success DTTT_button_text" id="approve_registration_lembaga">
                <i class="fa fa-check"></i> <span>Approve</span></a>
                    
                <a href="javascript:void(0)"
                onclick="rejectAll(this,\''.URL('lembaga/registrasi/approval/reject').'\')"
                rel="tooltip" title="Reject Collection"       
                pip-notif-reject-collection="Are You Sure Reject this data collection ?" 
                class="btn btn-danger DTTT_button_text" id="reject_registration_lembaga">
                <i class="fa fa-times"></i> <span>Reject</span></a>'); 
$DTable->followSelectAll('approve_registration_lembaga,reject_registration_lembaga');

$json = $DTable->getJson();
$data = json_decode($json)->data ;
$datas = json_decode($json) ;
foreach($data as $key => $value){
        $data[$key]->approval_status = '<button pip-notif-approve="Are You Sure Approve this data ?" onclick="approve(this,\''.URL('lembaga/registrasi/approval/approve').'\','.$data[$key]->id.')" class="btn btn-success btn-xs" style="margin-top:-10px;margin-bottom:-10px;" rel="tooltip" style="cursor:pointer" title="Approved"><i class="fa fa-check"></i></button>';
        $data[$key]->approval_status .= ' <button pip-notif-reject="Are You Sure Reject this data ?" onclick="reject(this,\''.URL('lembaga/registrasi/approval/reject').'\','.$data[$key]->id.')" class="btn btn-danger btn-xs" style="margin-top:-10px;margin-bottom:-10px;" rel="tooltip" style="cursor:pointer" title="Rejected"><i class="fa fa-close"></i></button>';
  
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
                    trans('pip.action')=>'approval_status'
                    )
                )
!!}

{!!$DTable->show()!!}
{!! HTML::script('js/lembaga.js') !!}
