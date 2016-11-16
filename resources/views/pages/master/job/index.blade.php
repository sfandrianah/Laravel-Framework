    @extends('template.index')
    @section('page-content') 
    @include('template.scaffolding.list')
    <script>
        $(function () {
            setPage('list');
        });
    </script>
@endsection