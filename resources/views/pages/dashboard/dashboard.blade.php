{{--
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
<!DOCTYPE html>
<html lang="en">

@extends('template.index')
@section('page-content')
    <div class="row">
        <div class="col-md-12 full-width">
            <div class="panel mb-n" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px)">
                {!! $pageContent !!}
            </div>
        </div>
    </div>
@endsection