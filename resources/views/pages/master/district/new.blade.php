@extends('template.scaffolding.new-edit')
@section('page-new-edit')

{!! FORM::open(['page' => 'district/save', 'class'=>'form-horizontal', 'method'=>'post', 'id'=>'validate-form', 'data-parsley-validate']) !!}
    {!!$Form->title(trans('pip.code'))->id('code')->name('code')->placeholder(trans('pip.input.code'))->textbox()!!}
    {!!$Form->title(trans('pip.name'))->id('name')->name('name')->placeholder(trans('pip.input.name'))->textbox()!!}
    {!!$Form->title(trans('master-district.city'))->id('combobox')->name('mda_city_id')->data($cityLOV)->combobox() !!}
    {!!$Form->title(trans('pip.description'))->id('description')->name('description')->placeholder(trans('pip.input.description'))->required(false)->textarea()!!}
{!! FORM::close() !!}

@if (isset($_GET['id']))
    {!!$Form->setValue('code',$value->code)!!}
    {!!$Form->setValue('name',$value->name)!!}
    {!!$Form->setValue('description',$value->descrition)!!}
@endif

@endsection