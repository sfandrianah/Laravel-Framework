@extends('template.scaffolding.new-edit')
@section('page-new-edit')

{!! FORM::open(['page' => 'village/save', 'class'=>'form-horizontal', 'method'=>'post', 'id'=>'validate-form', 'data-parsley-validate']) !!}
    {!!$Form->title(trans('pip.code'))->id('code')->name('code')->placeholder(trans('pip.input.code'))->textbox()!!}
    {!!$Form->title(trans('pip.name'))->id('name')->name('name')->placeholder(trans('pip.input.name'))->textbox()!!}
    {!!$Form->title(trans('master-village.district'))->id('combobox')->name('mda_district_id')->data($districtLOV)->combobox() !!}
    {!!$Form->title(trans('pip.description'))->id('description')->name('description')->placeholder(trans('pip.input.description'))->required(false)->textarea()!!}
{!! FORM::close() !!}


@endsection