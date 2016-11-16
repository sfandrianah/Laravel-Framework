{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
@author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
@extends('template.index')
@section('page-content')
    @include('template.scaffolding.list')

    <script>
        $(function () {
            setPage('list');
        });
    </script>
@endsection