@extends('template.scaffolding.new-edit')
@section('page-new-edit')

{!! FORM::open(['page' => 'benefit/update', 'class'=>'form-horizontal', 'method'=>'post', 'id'=>'validate-form', 'data-parsley-validate']) !!}
    {!!$Form->groupTextBox(trans('pip.code'),'code',trans('pip.input.code'),true,null,'value="'.$value->code.'"')!!}
    {!!$Form->groupTextBox(trans('pip.name'),'name',trans('pip.input.name'),true,null,'value="'.$value->name.'"')!!}
    {!!$Form->title(trans('pip.description'))->id('description')->name('description')->placeholder(trans('pip.input.description'))->required(false)->value($value->description)->textarea()!!}
    <input type="hidden" name="id" id="id" value="{!!$value->id!!}">
{!! FORM::close() !!}

@endsection