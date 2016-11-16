{{--
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.index-head-tag')
</head>

<body class="animated-content infobar-overlay">
@include('template.header')
<div id="wrapper">
    <div id="layout-static">
        @include('template.navigation-drawer')
        <div class="static-content-wrapper">
            <div class="static-content">
                <div class="page-content">
                    @include('template.content-parent')
                </div>
            </div>
            @include('template.footer')
        </div>
    </div>
</div>

@include('template.infobar-wrapper')
{{--@include('template.fab-switcher')--}}
@include('template.index-script-footer')

</body>

</html>