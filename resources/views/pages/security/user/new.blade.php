@extends('template.scaffolding.new-edit')
@section('page-new-edit')

<?php
if(isset($_POST['id'])){
        $url = 'user/update';
}else{
        $url = 'user/save';
}
?>
{!! FORM::open(['page' => $url, 'class'=>'form-horizontal', 'method'=>'post', 'id'=>'validate-form', 'data-parsley-validate']) !!}
    {!!$Form->title(trans('pip.username'))->id('user_code')->name('user_code')->placeholder(trans('pip.input.username'))->textbox()!!}
    {!!$Form->title(trans('pip.expired.date'))->id('expired_date')->name('expired_date')->placeholder(trans('pip.input.expired.date'))->disablepastdate()!!}
    {!!$Form->title(trans('pip.groupid'))->id('group_id')->name('group_id')->data($securityGroupLOV)->combobox() !!}
    {!!$Form->title(trans('pip.description'))->id('description')->name('description')->placeholder(trans('pip.input.description'))->required(false)->textarea()!!}
{!! FORM::close() !!}

@if (isset($_POST['id']))
    {!!$Form->setValue('id',$value->id)!!}
    {!!$Form->setValue('user_code',$value->code)!!}
    {!!$Form->setValue('expired_date',$value->name)!!}
    {!!$Form->setValue('description',$value->description)!!}
@endif

@endsection