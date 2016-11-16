{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
@extends('template.index')
<!DOCTYPE HTML>
<html lang="en">

@section('page-content')
<div>Upload Image</div>
{!! FORM::open(array('url'=>'upload/storeImage','method'=>'POST', 'files'=>true)) !!}
<div class="control-group">
    <div class="controls">
        {!! FORM::file('image') !!}
        <p class="errors">{!!$errors->first('image')!!}</p>
        @if(Session::has('error'))
            <p class="errors">{!! Session::get('error') !!}</p>
        @endif
    </div>
</div>
<div id="success"> </div>
{!! FORM::submit('Submit', array('class'=>'send-btn')) !!}
{!! FORM::close() !!}

<br />
<br />

<div class="span7 offset1">
    <div class="secure">Upload File</div>
    {!! FORM::open(array('url'=>'upload/storeExcel','method'=>'POST', 'files'=>true)) !!}
    <div class="control-group">
        <div class="controls">
            {!! FORM::file('file') !!}
            <p class="errors">{!!$errors->first('file')!!}</p>
            @if(Session::has('error'))
                <p class="errors">{!! Session::get('error') !!}</p>
            @endif
        </div>
    </div>
    <div id="success"> </div>
    {!! FORM::submit('Submit', array('class'=>'send-btn')) !!}
    {!! FORM::close() !!}
</div>

<br />

<div class="span7 offset1">
    <div class="secure">Upload File</div>
    {!! FORM::open(array('url'=>'upload/readAndStoreExcel','method'=>'POST', 'files'=>true)) !!}
    <div class="control-group">
        <div class="controls">
            {!! FORM::file('file') !!}
            <p class="errors">{!!$errors->first('file')!!}</p>
            @if(Session::has('error'))
                <p class="errors">{!! Session::get('error') !!}</p>
            @endif
        </div>
    </div>
    <div id="success"> </div>
    {!! FORM::submit('Submit', array('class'=>'send-btn')) !!}
    {!! FORM::close() !!}
</div>
@endsection
</html>