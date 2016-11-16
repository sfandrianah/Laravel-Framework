@extends('template.scaffolding.new-edit')
@section('page-new-edit')
<form class="form-horizontal row-border"  id="validate-form" data-parsley-validate>
    {!!$Form->groupTextBox('Nama','name','Input Nama')!!}
    {!!$Form->groupSelectBox('Kabupaten','kabupaten',[
                array("value"=>"1","label"=>"1"),
                array("value"=>"1","label"=>"1")
            ]
            )!!}
</form>
@endsection