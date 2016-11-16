{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
<!DOCTYPE HTML>
<html lang="en">
    <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
        <!-- <div id="page-progress-loader" class="show"></div> -->

        <div class="logo-area">
            <a class="navbar-brand navbar-brand-primary" href=".">
                {!! HTML::image('img/mendikbud_2_icon.png', 'Paper', ['class' => 'show-on-collapse img-logo-white','style'=>'width: 70px;height: 55px;margin-top:4px;margin-left: -15px;']) !!}
                {!! HTML::image('img/logo-icon-dark.png', 'Paper', ['class' => 'show-on-collapse img-logo-dark']) !!}
                {!! HTML::image('img/mendikbud_2.png', 'Paper', ['class' => 'img-white','style' => 'width: 240px;height: 45px;margin-top:10px;']) !!}
                {!! HTML::image('img/logo-dark.png', 'Paper', ['class' => 'img-dark']) !!}
            </a>

            <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg stay-on-search">
                <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                    <span class="icon-bg">
                        <i class="material-icons">menu</i>
                    </span>
                </a>
            </span>
            <span id="trigger-search" class="toolbar-trigger toolbar-icon-bg ov-h">
                <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                    <span class="icon-bg">
                        <i class="material-icons">search</i>
                    </span>
                </a>
            </span>
            <div id="search-box">
                <input class="form-control" type="text" placeholder="Search..." id="search-input" />
            </div>
        </div><!-- logo-area -->

        <ul class="nav navbar-nav toolbar pull-right">

            <li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
                <a class="toggle-fullscreen"><span class="icon-bg">
                        <i class="material-icons">close</i>
                    </span></a>
            </li><!--
            <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
                <a href="#" class="toggle-fullscreen"><span class="icon-bg">
                        <i class="material-icons">fullscreen</i>
                    </span></a>
            </li>-->

<!--            <li class="dropdown toolbar-icon-bg">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="material-icons">notifications</i></span><span class="badge badge-info"></span></a>
                <div class="dropdown-menu animated notifications">
                    <div class="topnav-dropdown-header">
                        <span>3 new notifications</span>

                    </div>
                    <div class="scroll-pane">
                        <ul class="media-list scroll-content">
                            <li class="media notification-success">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="material-icons">lock</i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">Privacy settings have been changed.</h4>
                                        <span class="notification-time">8 mins ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-info">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="material-icons">shopping_cart</i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">A new order has been placed.</h4>
                                        <span class="notification-time">24 mins ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-teal">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="material-icons">perm_contact_calendar</i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">New event started!</h4>
                                        <span class="notification-time">16 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-indigo">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="material-icons">settings</i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">New app settings updated.</h4>
                                        <span class="notification-time">2 days ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-danger">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="material-icons">comment</i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">Jessi commented your post.</h4>
                                        <span class="notification-time">4 days ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">See all notifications</a>
                    </div>
                </div>
            </li>-->

<!--            <li class="dropdown toolbar-icon-bg hidden-xs">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="material-icons">mail</i></span><span
                        class="badge badge-info"></span></a>
                <div class="dropdown-menu animated notifications">
                    <div class="topnav-dropdown-header">
                        <span>2 new messages</span>

                    </div>
                    <div class="scroll-pane">
                        <ul class="media-list scroll-content">
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        {!! HTML::image('demo/avatar/avatar_01.png', '', ['class' => 'img-circle avatar']) !!}
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Amy Green</strong> <span class="text-gray">? Integer vitae libero ac risus egestas placerat.</span></h4>
                                        <span class="notification-time">2 mins ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        {!! HTML::image('demo/avatar/avatar_09.png', '', ['class' => 'img-circle avatar']) !!}
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Daniel Andrews</strong> <span class="text-gray">? Vestibulum commodo felis quis tortor</span></h4>
                                        <span class="notification-time">40 mins ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        {!! HTML::image('demo/avatar/avatar_02.png', '', ['class' => 'img-circle avatar']) !!}
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Jane Simpson</strong> <span class="text-gray">? Fusce lobortis lorem at ipsum semper sagittis.</span></h4>
                                        <span class="notification-time">6 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        {!! HTML::image('demo/avatar/avatar_03.png', '', ['class' => 'img-circle avatar']) !!}
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Harold Hawkins</strong> <span class="text-gray">? Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span></h4>
                                        <span class="notification-time">8 days ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        {!! HTML::image('demo/avatar/avatar_04.png', '', ['class' => 'img-circle avatar']) !!}
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Brian Fisher</strong> <span class="text-gray">? Praesent dapibus, neque id cursus faucibus.</span></h4>
                                        <span class="notification-time">16 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        {!! HTML::image('demo/avatar/avatar_05.png', '', ['class' => 'img-circle avatar']) !!}
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Dylan Black</strong> <span class="text-gray">? Pellentesque fermentum dolor. </span></h4>
                                        <span class="notification-time">2 days ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        {!! HTML::image('demo/avatar/avatar_06.png', '', ['class' => 'img-circle avatar']) !!}
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Bobby Harper</strong> <span class="text-gray">? Sed adipiscing ornare risus. Morbi est est.</span></h4>
                                        <span class="notification-time">4 days ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">See all messages</a>
                    </div>
                </div>
            </li>-->

            <li class="toolbar-icon-bg" id="trigger-infobar">
                <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                    <span class="icon-bg">
                        <i class="material-icons">more_vert</i>
                    </span>
                </a>
            </li>

        </ul>

    </header>
</html>