@extends('template.scaffolding.new-edit')
@section('page-new-edit')
<?php
        if(isset($_POST['id'])){
            $url = 'province/update';
        }else{
            $url = 'province/save';
        }
?>
{!! FORM::open(['page' => $url, 'class'=>'form-horizontal', 'method'=>'post', 'id'=>'validate-form', 'data-parsley-validate']) !!}
    {!!$Form->title(trans('pip.code'))->id('code')->name('code')->placeholder(trans('pip.input.code'))->textbox()!!}
    {!!$Form->title(trans('pip.name'))->id('name')->name('name')->placeholder(trans('pip.input.name'))->textbox()!!}
    {!!$Form->title(trans('pip.description'))->id('description')->name('description')->placeholder(trans('pip.input.description'))->required(false)->textarea()!!}
    <input type="hidden" name="id" id="id" value="">
{!! FORM::close() !!}

@if (isset($_POST['id']))
    {!!$Form->setValue('id',$value->id)!!}
    {!!$Form->setValue('code',$value->code)!!}
    {!!$Form->setValue('name',$value->name)!!}
    {!!$Form->setValue('description',$value->description)!!}
@endif

@endsection