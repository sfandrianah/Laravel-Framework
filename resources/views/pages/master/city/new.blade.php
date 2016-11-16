@extends('template.scaffolding.new-edit')
@section('page-new-edit')

    <?php
    if(isset($_POST['id'])){
        $url = 'city/update';
    }else{
        $url = 'city/save';
    }
    ?>
{!! FORM::open(['page' => $url, 'class'=>'form-horizontal', 'method'=>'post', 'id'=>'validate-form', 'data-parsley-validate']) !!}
    {!!$Form->title(trans('pip.code'))->id('code')->name('code')->placeholder(trans('pip.input.code'))->textbox()!!}
    {!!$Form->title(trans('pip.name'))->id('name')->name('name')->placeholder(trans('pip.input.name'))->textbox()!!}
    {!!$Form->title(trans('master-city.province'))->id('combobox')->name('mda_province_id')->data($provinceLOV)->combobox() !!}
    {!!$Form->title(trans('pip.description'))->id('description')->name('description')->placeholder(trans('pip.input.description'))->required(false)->textarea()!!}
    <input type="hidden" name="id" id="id" value="">
{!! FORM::close() !!}

@if (isset($_POST['id']))
    {!!$Form->setValue('code',$value->code)!!}
    {!!$Form->setValue('name',$value->name)!!}
    {!!$Form->setValue('combobox',$value->mda_province_id)!!}
    {!!$Form->setValue('description',$value->description)!!}
@endif

@endsection