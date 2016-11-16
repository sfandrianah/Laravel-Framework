{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
<!DOCTYPE HTML>
<meta charset="utf-8">
<title>PIP - Program Indonesia Pintar</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="description" content="Paper - Material Admin Theme">
<meta name="author" content="KaijuThemes">

<link rel="shortcut icon" href="{!! asset('img/mendikbud.png') !!}">

{{--Remove google apis font + icon dependency to local resources--}}
{{--<link type='text/css' href='css/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>--}}
{{--<link type='text/css'  href="css/icon?family=Material+Icons"  rel="stylesheet">--}}

{!! HTML::style('css/google-api-material-icon.css') !!}
{!! HTML::style('css/google-api-roboto-italic.css') !!}

{!! HTML::style('fonts/font-awesome/css/font-awesome.min.css') !!}
{!! HTML::style('css/styles.css') !!}
{!! HTML::style('css/pip.css') !!}
{!! HTML::style('plugins/codeprettifier/prettify.css') !!}
{!! HTML::style('plugins/dropdown.js/jquery.dropdown.css') !!}             <!-- iCheck -->
{!! HTML::style('plugins/progress-skylo/skylo.css') !!}
{!! HTML::style('plugins/pines-notify/pnotify.css') !!}

{!! HTML::style('plugins/sweetalert/sweetalert.css')!!}
    <!--[if lt IE 10]>
<script src="assets/js/media.match.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<script src="assets/js/placeholder.min.js"></script>
<![endif]-->

<!-- The following CSS are included as plugins and can be removed if unused-->
{!! HTML::style('plugins/form-daterangepicker/daterangepicker-bs3.css') !!}
{!! HTML::style('plugins/fullcalendar/fullcalendar.css') !!}
{!! HTML::style('plugins/jvectormap/jquery-jvectormap-2.0.2.css') !!}
{!! HTML::style('less/card.less') !!}
{!! HTML::style('plugins/form-select2/select2.css') !!}

{!! HTML::style('plugins/chartist/dist/chartist.min.css') !!}
{!! HTML::script('js/jquery-1.10.2.min.js') !!} <!-- Load jQuery -->