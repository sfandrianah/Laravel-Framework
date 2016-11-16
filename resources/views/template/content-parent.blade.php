{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
<!DOCTYPE HTML>
<html lang="en">
    <ol class="breadcrumb">
        @if(count($pageBreadCrumb) > 0)
            @foreach($pageBreadCrumb as $pbcp)
                @foreach($pbcp as $pbcValue => $pbcKey)
                    <li class=""><a href={!! URL($pbcKey) !!}>{!! $pbcValue !!}</a></li>
                @endforeach
            @endforeach
        @endif
            @foreach($lastPageBreadCrumb as $lpbcKey => $lpbcValue)
                <li class="active"><a href={!! URL($lpbcValue) !!}>{!! $lpbcKey !!}</a></li>
            @endforeach
    </ol>
    <div class="page-heading">
        <div class="container-fluid">
            <div class="ui-sortable" data-widget-group="group1">
                
            </div>
        </div>
        <div id="ajaxPage">
        @yield('page-content')
        </div>
    </div>
</html>