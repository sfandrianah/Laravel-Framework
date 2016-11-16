<?php /*
    @project  pip.
    @since  8/22/2016 10:21 AM
    @author  <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PIP - Program Indonesia Pintar</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Paper - Material Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link rel="shortcut icon" href="<?php echo asset('img/logo-icon-dark.png'); ?>">

    <?php /*Remove google apis font + icon dependency to local resources*/ ?>
    <?php /*<link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>*/ ?>
    <?php /*<link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">*/ ?>

    <?php echo HTML::style('css/google-api-material-icon.css'); ?>

    <?php echo HTML::style('css/google-api-roboto-italic.css'); ?>


    <?php echo HTML::style('fonts/font-awesome/css/font-awesome.min.css'); ?>

    <?php echo HTML::style('css/styles.css'); ?>

    <?php echo HTML::style('css/pip.css'); ?>

    <?php echo HTML::style('plugins/codeprettifier/prettify.css'); ?>

    <?php echo HTML::style('plugins/dropdown.js/jquery.dropdown.css'); ?>             <!-- iCheck -->
    <?php echo HTML::style('plugins/progress-skylo/skylo.css'); ?>


    <!--[if lt IE 10]>
        <script src="assets/js/media.match.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/js/placeholder.min.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    <?php echo HTML::style('plugins/form-daterangepicker/daterangepicker-bs3.css'); ?>

    <?php echo HTML::style('plugins/fullcalendar/fullcalendar.css'); ?>

    <?php echo HTML::style('plugins/jvectormap/jquery-jvectormap-2.0.2.css'); ?>

    <?php echo HTML::style('less/card.less'); ?>

    <?php echo HTML::style('plugins/chartist/dist/chartist.min.css'); ?>


</head>

<body class="animated-content infobar-overlay">
<?php echo $__env->make('template.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div id="wrapper">
    <div id="layout-static">
        <?php echo $__env->make('template.navigation-drawer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="static-content-wrapper">
            <div class="static-content">
                <div class="page-content">
                    <ol class="breadcrumb">

                        <li class=""><a href="index-2.html">Home</a></li>
                        <li class="active"><a href="index-2.html">Dashboard</a></li>

                    </ol>
                    <div class="page-heading">
                        <h1>Dashboard<small>Project Statistics</small></h1>
                        <div class="options">
                            <!--  <div class="btn-toolbar">
        <form action="" class="form-horizontal row-border" style="display: inline-block;">
            <div class="form-group hidden-xs">
                <div class="col-sm-8">
                    <button class="btn btn-default" id="daterangepicker-d">
                        <i class="fa fa-calendar"></i> 
                        <span><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
                    </button>
                </div>
            </div>
        </form>
        <a href="#" class="btn btn-default" style="vertical-align: top;">Settings</a>
    </div> -->
                        </div>
                    </div>
                    <div class="container-fluid">


                        <div data-widget-group="group1">
                            <div class="row">

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="info-tile info-tile-alt tile-indigo">
                                        <div class="info">
                                            <div class="tile-heading"><span>Page Views</span></div>
                                            <div class="tile-body"><span>5,921</span></div>
                                        </div>
                                        <div class="stats">
                                            <div class="tile-content"><div id="dashboard-sparkline-indigo"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="info-tile info-tile-alt tile-danger">
                                        <div class="info">
                                            <div class="tile-heading"><span>Aquisitions</span></div>
                                            <div class="tile-body "><span>2,344</span></div>
                                        </div>
                                        <div class="stats">
                                            <div class="tile-content"><div id="dashboard-sparkline-gray"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="info-tile info-tile-alt tile-primary">
                                        <div class="info">
                                            <div class="tile-heading"><span>Conversions</span></div>
                                            <div class="tile-body "><span>1,032</span></div>
                                        </div>
                                        <div class="stats">
                                            <div class="tile-content"><div id="dashboard-sparkline-primary"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="info-tile info-tile-alt tile-success clearfix">
                                        <div class="info">
                                            <div class="tile-heading"><span>Returning</span></div>
                                            <div class="tile-body "><span>1,454</span></div>
                                        </div>
                                        <div class="stats">
                                            <div class="tile-content"><div id="dashboard-sparkline-success"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 full-width">
                                    <div class="panel panel-default no-shadow" data-widget='{"draggable": "false"}'>
                                        <div class="panel-controls dropdown">
                                            <button class="btn btn-icon-rounded refresh-panel"><span class="material-icons inverted">refresh</span></button>
                                            <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="panel-body">
                                            <div class="pb-md">
                                                <h4 class="mb-n">SALES STATISTICS<small>Aliquam tincidunt mauris eu risus.</small></h4>

                                            </div>
                                            <div id="fullChart" style="height: 325px " class="centered"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-3 col-sm-6">
                                    <div class="panel panel-white ov-h" data-widget='{"draggable": "false"}'>
                                        <div class="panel-controls dropdown">
                                            <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="panel-heading">
                                            <h2>Visitors</h2>
                                        </div>
                                        <div class="panel-body ov-h">
                                            <div id="areaChart"></div>
                                            <div class="pt-md pull-left">
                                                <h4 class="mt-n mb-n pt-xs"><small class="mt-n mb-sm">Page views</small>424,121</h4>
                                            </div>
                                            <div class="pt-md pull-right text-right">
                                                <h4 class="mt-n mb-n pt-xs"><small class="mt-n mb-sm">Visitors</small>341</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="panel panel-white">
                                        <div class="panel-controls dropdown">
                                            <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="panel-heading">
                                            <h2>Revenue</h2>
                                        </div>
                                        <div class="panel-body">
                                            <div id="chartistPie"></div>
                                            <div class="pt-md pull-left">
                                                <h4 class="mt-n mb-n pt-xs"><small class="mt-n mb-sm">Primary</small>416 M</h4>
                                            </div>
                                            <div class="pt-md pull-right text-right">
                                                <h4 class="mt-n mb-n pt-xs"><small class="mt-n mb-sm">Commissions</small>320 K</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">

                                    <div class="panel panel-salesfigure">
                                        <div class="panel-controls dropdown">
                                            <div class="togglebutton toggle-info">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>

                                        <div class="panel-heading">
                                            <h2>Markup</h2>
                                        </div>
                                        <div class="panel-body">
                                            <div class="full-bg">
                                                <div class="easypiechart" id="chart1" data-percent="65">
                                                    <span class="percent percent-big"></span>
                                                </div>
                                            </div>
                                            <div class="pt-md pull-left">
                                                <h4 class="mt-n mb-n pt-xs"><small class="mt-n mb-sm">Cost of Goods</small>15%</h4>
                                            </div>
                                            <div class="pt-md pull-right text-right">
                                                <h4 class="mt-n mb-n pt-xs"><small class="mt-n mb-sm">Net</small>32%</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="panel panel-salesfigure2">
                                        <div class="panel-controls dropdown">
                                            <div class="togglebutton toggle-warning">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="panel-heading">
                                            <h2>Total Products</h2>
                                        </div>
                                        <div class="panel-body">
                                            <div id="dailysales2" class="text-center mt mb"></div>
                                            <div class="pt-md pull-left">
                                                <h4 class="mt-n mb-n pt-xs"><small class="mt-n mb-sm">Active Listings</small>4,986</h4>
                                            </div>
                                            <div class="pt-md pull-right text-right">
                                                <h4 class="mt-n mb-n pt-xs"><small class="mt-n mb-sm">Categories</small>950</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel">
                                        <div class="panel-calendar">
                                            <div class="text-center pb-sm">
                                                <span class="text block p-md">Wednesday</span>
                                                <div class="text-center mt-n mb-n pt-xs ">
                                                    <span class="circle text-center">10</span>
                                                </div>
                                            </div>
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-default" >
                                        <div class="panel-controls dropdown">
                                            <button class="btn btn-icon-rounded refresh-panel"><span class="material-icons inverted">refresh</span></button>
                                            <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="panel-body no-padding table-responsive">
                                            <div class="p-md">
                                                <h4 class="mb-n">PROJECTS<small>Assigned to various people</small></h4>
                                            </div>
                                            <div class="list-group">
                                                <div class="list-group-item withripple">
                                                    <div class="row-action-primary">
                                                        <div class="progress-pie-chart" data-percent="12.5"></div>
                                                    </div>
                                                    <div class="row-content">
                                                        <div class="least-content">
                                                            <?php echo HTML::image('demo/avatar/avatar_01.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                            <?php echo HTML::image('demo/avatar/avatar_03.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                            <?php echo HTML::image('demo/avatar/avatar_03.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                        </div>
                                                        <h4 class="list-group-item-heading">Casper</h4>
                                                        <p class="list-group-item-text">Customer support portal built on ASP.NET</p>
                                                    </div>
                                                </div>
                                                <div class="list-group-separator"></div>
                                                <div class="list-group-item withripple">
                                                    <div class="row-action-primary">
                                                        <div class="progress-pie-chart" data-percent="22"></div>
                                                    </div>
                                                    <div class="row-content">
                                                        <div class="least-content">
                                                            <?php echo HTML::image('demo/avatar/avatar_05.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                            <?php echo HTML::image('demo/avatar/avatar_04.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                        </div>
                                                        <h4 class="list-group-item-heading">Logistics Portal</h4>
                                                        <p class="list-group-item-text">Must have API with OAuth 2.0</p>
                                                    </div>
                                                </div>
                                                <div class="list-group-separator"></div>
                                                <div class="list-group-item withripple">
                                                    <div class="row-action-primary">
                                                        <div class="progress-pie-chart" data-percent="67"></div>
                                                    </div>
                                                    <div class="row-content">
                                                        <div class="least-content">
                                                            <?php echo HTML::image('demo/avatar/avatar_03.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                        </div>
                                                        <h4 class="list-group-item-heading">Paper Admin AngularJS</h4>
                                                        <p class="list-group-item-text">Needs to follow best practices</p>
                                                    </div>
                                                </div>
                                                <div class="list-group-separator"></div>
                                                <div class="list-group-item withripple">
                                                    <div class="row-action-primary">
                                                        <div class="progress-pie-chart" data-percent="14"></div>
                                                    </div>
                                                    <div class="row-content">
                                                        <div class="least-content">
                                                            <?php echo HTML::image('demo/avatar/avatar_06.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                            <?php echo HTML::image('demo/avatar/avatar_07.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                        </div>
                                                        <h4 class="list-group-item-heading">Marvin</h4>
                                                        <p class="list-group-item-text">Admin theme with AngularJS</p>
                                                    </div>
                                                </div>
                                                <div class="list-group-separator"></div>
                                                <div class="list-group-item withripple">
                                                    <div class="row-action-primary">
                                                        <div class="progress-pie-chart" data-percent="33"></div>
                                                    </div>
                                                    <div class="row-content">
                                                        <div class="least-content">
                                                            <?php echo HTML::image('demo/avatar/avatar_08.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                            <?php echo HTML::image('demo/avatar/avatar_09.png', 'icon', ['class' => 'img-circle', 'width'=>'16']); ?>

                                                        </div>
                                                        <h4 class="list-group-item-heading">Chatterbot</h4>
                                                        <p class="list-group-item-text">Chat engine with MeteorJS</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div> <!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div>

            <?php echo $__env->make('template.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    </div>
</div>

<div class="infobar-wrapper scroll-pane">
    <div class="infobar scroll-content">


        <ul class="nav nav-tabs material-nav-tabs stretch-tabs icon-tabs">
            <li ><a href="#tab-7-1" data-toggle="tab">
                    <i class="material-icons">settings</i>
                </a></li>
            <li class="active "><a href="#tab-7-2" data-toggle="tab"><span class="step size-64">
                  <i class="material-icons">textsms</i>
                </span></a>
            </li>
        </ul>


        <div class="tab-content">
            <div class="tab-pane" id="tab-7-1">

                <table class="table table-settings">
                    <tbdody>
                        <tr>
                            <td>
                                <h5>Alerts</h5>
                                <p>Sets alerts to get notified when changes occur to get new alerming items</p>
                            </td>
                            <td><span class="togglebutton toggle-info"><label><input type="checkbox"> </label></span></td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Notifications</h5>
                                <p>You will receive notification email for any notifications if you set notification</p>
                            </td>
                            <td><span class="togglebutton toggle-primary"><label><input type="checkbox" class="toggle"  checked=""> </label></span></td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Messages</h5>
                                <p>You will receive notification on email after setting messages notifications</p>
                            </td>
                            <td>
                                <span class="togglebutton toggle-danger"><label><input type="checkbox" > </label></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Warnings</h5>
                                <p>You will get warnning only some specific setttings or alert system</p>
                            </td>
                            <td>
                                <span class="togglebutton toggle-warning"><label><input type="checkbox" checked=""> </label></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Sidebar</h5>
                                <p>You can hide/show use with sidebar collapsw settings</p>
                            </td>
                            <td><span class="togglebutton toggle-success"><label><input type="checkbox" checked=""> </label></span></td>
                        </tr>
                    </tbdody>
                </table>

            </div>
            <div class="tab-pane active" id="tab-7-2">

                <div class="widget">
                    <div class="widget-heading">Recent Activities</div>
                    <div class="widget-body">
                        <ul class="timeline">
                            <li class="timeline-purple">
                                <div class="timeline-icon"><i class="material-icons">add</i></div>
                                <div class="timeline-body">
                                    <div class="timeline-header">
                                        <span class="author">Jana Pena is now Follwing you</span>
                                        <span class="date">2 min ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-primary">
                                <div class="timeline-icon"><i class="material-icons">textsms</i></div>
                                <div class="timeline-body">
                                    <div class="timeline-header">
                                        <span class="author">Percy liaye Like your picture</span>
                                        <span class="date">6 min ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-green">
                                <div class="timeline-icon"><i class="material-icons">done</i></div>
                                <div class="timeline-body">
                                    <div class="timeline-header">
                                        <span class="author">Leon miles make your presentation for new project</span>
                                        <span class="date">2 hours ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-danger">
                                <div class="timeline-icon"><i class="material-icons">favorite</i></div>
                                <div class="timeline-body">
                                    <div class="timeline-header">
                                        <span class="author">Lake wile like your comment</span>
                                        <span class="date">5 hours ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-sky">
                                <div class="timeline-icon"><i class="material-icons">attach_money</i></div>
                                <div class="timeline-body">
                                    <div class="timeline-header">
                                        <span class="author">The Mountain Ambience paid your payment</span>
                                        <span class="date">9 hours ago</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">Contacts</div>
                    <div class="widget-body">
                        <ul class="media-list contacts">
                            <li class="media notification-message">
                                <div class="media-left">
                                    <?php echo HTML::image('demo/avatar/avatar_01.png', '', ['class' => 'img-circle avatar']); ?>

                                </div>
                                <div class="media-body">
                                    <span class="text-gray">Jon Owens</span>
                                    <span class="contact-status text-success">Online</span>
                                </div>
                            </li>
                            <li class="media notification-message">
                                <div class="media-left">
                                    <?php echo HTML::image('demo/avatar/avatar_02.png', '', ['class' => 'img-circle avatar']); ?>

                                </div>
                                <div class="media-body">
                                    <span class="text-gray">Nina Huges</span>
                                    <span class="contact-status text-muted">Offline</span>
                                </div>
                            </li>
                            <li class="media notification-message">
                                <div class="media-left">
                                    <?php echo HTML::image('demo/avatar/avatar_03.png', '', ['class' => 'img-circle avatar']); ?>

                                </div>
                                <div class="media-body">
                                    <span class="text-gray">Austin Lee</span>
                                    <span class="contact-status text-danger">Busy</span>
                                </div>
                            </li>
                            <li class="media notification-message">
                                <div class="media-left">
                                    <?php echo HTML::image('demo/avatar/avatar_04.png', '', ['class' => 'img-circle avatar']); ?>

                                </div>
                                <div class="media-body">
                                    <span class="text-gray">Grady Hines</span>
                                    <span class="contact-status text-warning">Away</span>
                                </div>
                            </li>
                            <li class="media notification-message">
                                <div class="media-left">
                                    <?php echo HTML::image('demo/avatar/avatar_06.png', '', ['class' => 'img-circle avatar']); ?>

                                </div>
                                <div class="media-body">
                                    <span class="text-gray">Adrian Barton</span>
                                    <span class="contact-status text-success">Online</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>

    </div>

</div>
</div>


<!-- Das FAB -->
<button class="btn btn-primary btn-fab demo-switcher-fab" data-toggle="tooltip" data-placement="top" title="Click for Settings"><i class="material-icons">settings</i></button>

<!-- Switcher -->
<div class="demo-options">
    <div class="demo-body">
        <div class="tabular">
            <div class="tabular-row">
                <div class="tabular-cell">Fixed Header</div>
                <div class="tabular-cell demo-switches text-right">
                    <div class="togglebutton checkbox-primary">
                        <label>
                            <input type="checkbox" name="demo-fixedheader" />
                        </label>
                    </div>
                </div>
            </div>
            <div class="tabular-row">
                <div class="tabular-cell">Boxed Layout</div>
                <div class="tabular-cell demo-switches text-right">
                    <div class="togglebutton toggle-primary">
                        <label>
                            <input type="checkbox" name="demo-layoutboxed">
                        </label>
                    </div>
                </div>
            </div>
            <div class="tabular-row">
                <div class="tabular-cell">Collapse Leftbar</div>
                <div class="tabular-cell demo-switches text-right">
                    <div class="togglebutton toggle-primary">
                        <label>
                            <input type="checkbox" name="demo-collapseleftbar">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="demo-body">
        <div class="option-title">Brand</div>
        <ul id="demo-header-color" class="demo-color-list">
            <li><span data-addclass="navbar-brand-default" class="brand-switcher demo-default"></span></li>
            <li><span data-addclass="navbar-brand-primary" class="brand-switcher demo-primary"></span></li>
            <li><span data-addclass="navbar-brand-success" class="brand-switcher demo-success"></span></li>
            <li><span data-addclass="navbar-brand-danger" class="brand-switcher demo-danger"></span></li>
            <li><span data-addclass="navbar-brand-warning" class="brand-switcher demo-warning"></span></li>
            <li><span data-addclass="navbar-brand-info" class="brand-switcher demo-info"></span></li>
            <li><span data-addclass="navbar-brand-inverse" class="brand-switcher demo-inverse"></span></li>
        </ul>
    </div>

    <div class="demo-body">
        <div class="option-title">Topnav</div>
        <ul id="demo-header-color" class="demo-color-list">
            <li><span data-addclass="navbar-cyan" class="topnav-switcher demo-cyan"></span></li>
            <li><span data-addclass="navbar-light-blue" class="topnav-switcher demo-light-blue"></span></li>
            <li><span data-addclass="navbar-blue" class="topnav-switcher demo-blue"></span></li>
            <li><span data-addclass="navbar-indigo" class="topnav-switcher demo-indigo"></span></li>
            <li><span data-addclass="navbar-deep-purple" class="topnav-switcher demo-deep-purple"></span></li>
            <li><span data-addclass="navbar-purple" class="topnav-switcher demo-purple"></span></li>
            <li><span data-addclass="navbar-pink" class="topnav-switcher demo-pink"></span></li>
            <li><span data-addclass="navbar-red" class="topnav-switcher demo-red"></span></li>
            <li><span data-addclass="navbar-teal" class="topnav-switcher demo-teal"></span></li>
            <li><span data-addclass="navbar-green" class="topnav-switcher demo-green"></span></li>
            <li><span data-addclass="navbar-light-green" class="topnav-switcher demo-light-green"></span></li>
            <li><span data-addclass="navbar-orange" class="topnav-switcher demo-orange"></span></li>
            <li><span data-addclass="navbar-deep-orange" class="topnav-switcher demo-deep-orange"></span></li>

            <li><span data-addclass="navbar-bluegray" class="topnav-switcher demo-bluegray"></span></li>


            <li><span data-addclass="navbar-gray" class="topnav-switcher demo-gray"></span></li>

            <li><span data-addclass="navbar-default" class="topnav-switcher demo-default"></span></li>
            <li><span data-addclass="navbar-bleachedcedar" class="topnav-switcher demo-bleachedcedar"></span></li>
            <li><span data-addclass="navbar-brown" class="topnav-switcher demo-brown"></span></li>
        </ul>
    </div>

    <div class="demo-body">
        <div class="option-title">Sidebar</div>
        <ul id="demo-sidebar-color" class="demo-color-list">
            <li><span data-addclass="sidebar-cyan" class="leftbar-switcher demo-cyan"></span></li>
            <li><span data-addclass="sidebar-light-blue" class="leftbar-switcher demo-light-blue"></span></li>
            <li><span data-addclass="sidebar-blue" class="leftbar-switcher demo-blue"></span></li>
            <li><span data-addclass="sidebar-indigo" class="leftbar-switcher demo-indigo"></span></li>
            <li><span data-addclass="sidebar-deep-purple" class="leftbar-switcher demo-deep-purple"></span></li>
            <li><span data-addclass="sidebar-purple" class="leftbar-switcher demo-purple"></span></li>
            <li><span data-addclass="sidebar-pink" class="leftbar-switcher demo-pink"></span></li>
            <li><span data-addclass="sidebar-red" class="leftbar-switcher demo-red"></span></li>
            <li><span data-addclass="sidebar-teal" class="leftbar-switcher demo-teal"></span></li>
            <li><span data-addclass="sidebar-green" class="leftbar-switcher demo-green"></span></li>
            <li><span data-addclass="sidebar-light-green" class="leftbar-switcher demo-light-green"></span></li>
            <li><span data-addclass="sidebar-orange" class="leftbar-switcher demo-orange"></span></li>
            <li><span data-addclass="sidebar-deep-orange" class="leftbar-switcher demo-deep-orange"></span></li>

            <li><span data-addclass="sidebar-bluegray" class="leftbar-switcher demo-bluegray"></span></li>


            <li><span data-addclass="sidebar-gray" class="leftbar-switcher demo-gray"></span></li>

            <li><span data-addclass="sidebar-default" class="leftbar-switcher demo-default"></span></li>
            <li><span data-addclass="sidebar-bleachedcedar" class="leftbar-switcher demo-bleachedcedar"></span></li>
            <li><span data-addclass="sidebar-brown" class="leftbar-switcher demo-brown"></span></li>
        </ul>
    </div>



</div>
<!-- /Switcher -->
<!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<?php echo HTML::script('js/jquery-1.10.2.min.js'); ?> <!-- Load jQuery -->
<?php echo HTML::script('js/jqueryui-1.10.3.min.js'); ?> 							<!-- Load jQueryUI -->
<?php echo HTML::script('js/bootstrap.min.js'); ?>								<!-- Load Bootstrap -->
<?php echo HTML::script('js/enquire.min.js'); ?>								<!-- Load Enquire -->

<?php echo HTML::script('plugins/velocityjs/velocity.min.js'); ?>							<!-- Load Velocity for Animated Content -->
<?php echo HTML::script('plugins/velocityjs/velocity.ui.min.js'); ?>


<?php echo HTML::script('plugins/progress-skylo/skylo.js'); ?> 		<!-- Skylo -->

<?php echo HTML::script('plugins/wijets/wijets.js'); ?>   						<!-- Wijet -->

<?php echo HTML::script('plugins/sparklines/jquery.sparklines.min.js'); ?> 			 <!-- Sparkline -->

<?php echo HTML::script('plugins/codeprettifier/prettify.js'); ?> 				<!-- Code Prettifier  -->

<?php echo HTML::script('plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js'); ?>    <!-- Bootstrap Tabdrop -->

<?php echo HTML::script('plugins/nanoScroller/js/jquery.nanoscroller.min.js'); ?>   <!-- nano scroller -->

<?php echo HTML::script('plugins/dropdown.js/jquery.dropdown.js'); ?>  <!-- Fancy Dropdowns -->

<?php echo HTML::script('plugins/bootstrap-material-design/js/material.min.js'); ?>   <!-- Bootstrap Material -->

<?php echo HTML::script('plugins/bootstrap-material-design/js/ripples.min.js'); ?>  <!-- Bootstrap Material -->

<?php echo HTML::script('js/application.js'); ?>

<?php echo HTML::script('demo/demo.js'); ?>

<?php echo HTML::script('demo/demo-switcher.js'); ?>


<!-- End loading site level scripts -->

<!-- Load page level scripts-->

<!-- Charts -->
<?php echo HTML::script('plugins/charts-flot/jquery.flot.min.js'); ?>                <!-- Flot Main File -->
<?php echo HTML::script('plugins/charts-flot/jquery.flot.pie.min.js'); ?>               <!-- Flot Pie Chart Plugin -->
<?php echo HTML::script('plugins/charts-flot/jquery.flot.stack.min.js'); ?>             <!-- Flot Stacked Charts Plugin -->
<?php echo HTML::script('plugins/charts-flot/jquery.flot.resize.min.js'); ?>            <!-- Flot Responsive -->
<?php echo HTML::script('plugins/charts-flot/jquery.flot.tooltip.min.js'); ?>          <!-- Flot Tooltips -->
<?php echo HTML::script('plugins/charts-flot/jquery.flot.spline.js'); ?>               <!-- Flot Curved Lines -->
<?php echo HTML::script('plugins/easypiechart/jquery.easypiechart.min.js'); ?>          <!-- EasyPieChart-->
<?php echo HTML::script('plugins/curvedLines-master/curvedLines.js'); ?>                <!-- marvinsplines -->

<?php echo HTML::script('plugins/form-daterangepicker/moment.min.js'); ?>               <!-- Moment.js for Date Range Picker -->

<!-- Date Range Picker -->
<?php echo HTML::script('plugins/bootstrap-datepicker/bootstrap-datepicker.js'); ?>                 <!-- Datepicker -->
<!-- <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> --> <!-- DateTime Picker -->

<!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>   -->    <!-- jVectorMap -->
<!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>  --> <!--World Map-->
<?php echo HTML::script('plugins/chartist/dist/chartist.min.js'); ?>   <!-- chartist -->
<?php echo HTML::script('demo/demo-index.js'); ?>                                       <!-- Initialize scripts for this page-->

<!-- End loading page level scripts-->

</body>

</html>