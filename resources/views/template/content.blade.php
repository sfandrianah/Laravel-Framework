{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
<!DOCTYPE HTML>
<html lang="en">
    @section('content')
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
                                                            {!! HTML::image('demo/avatar/avatar_01.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
                                                            {!! HTML::image('demo/avatar/avatar_03.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
                                                            {!! HTML::image('demo/avatar/avatar_03.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
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
                                                            {!! HTML::image('demo/avatar/avatar_05.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
                                                            {!! HTML::image('demo/avatar/avatar_04.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
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
                                                            {!! HTML::image('demo/avatar/avatar_03.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
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
                                                            {!! HTML::image('demo/avatar/avatar_06.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
                                                            {!! HTML::image('demo/avatar/avatar_07.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
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
                                                            {!! HTML::image('demo/avatar/avatar_08.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
                                                            {!! HTML::image('demo/avatar/avatar_09.png', 'icon', ['class' => 'img-circle', 'width'=>'16']) !!}
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

            @include('template.footer')

        </div>
    @endsection
</html>