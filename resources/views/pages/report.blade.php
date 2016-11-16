{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
@extends('template.index')
<!DOCTYPE HTML>
<html lang="en">

@section('page-content')
    Download Report CSV
    {!! FORM::open(array('url'=>'report/reportCSV','method'=>'POST')) !!}
    {!! FORM::submit('Submit', array()) !!}
    {!! FORM::close() !!}
    <br />
    Download Report Excel 5
    {!! FORM::open(array('url'=>'report/reportExcel5','method'=>'POST')) !!}
        {!! FORM::submit('Submit', array()) !!}
    {!! FORM::close() !!}
    <br />
    Download Report Excel 2007
    {!! FORM::open(array('url'=>'report/reportExcel7','method'=>'POST')) !!}
    {!! FORM::submit('Submit', array()) !!}
    {!! FORM::close() !!}
    <br />
    Download Report PDF
    {!! FORM::open(array('url'=>'report/reportPDF','method'=>'POST')) !!}
    {!! FORM::submit('Submit', array()) !!}
    {!! FORM::close() !!}
@endsection

</html>