{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
{{--*/
use App\ConstantValues\IApplicationConstant;
$session_menu = $_SESSION[IApplicationConstant::MENU_COOKIES];
$body = json_decode($session_menu);
/*--}}
<!DOCTYPE HTML>
<html lang="en">
    <div class="static-sidebar-wrapper sidebar-blue">
        <div class="static-sidebar">
            <div class="sidebar">
                <div class="widget stay-on-collapse" id="widget-sidebar">
                    <nav role="navigation" class="widget-body" id="page-menu">

                        <ul class="acc-menu">

                            @foreach ($body as $menu_parent) 
                                {{--*/ $style = 'assignment' /*--}}
                                @if($menu_parent->style != "")
                                    {{--*/ $style = $menu_parent->style /*--}}
                                @endif
                                
                                {{--*/ $links = '#' /*--}}
                                @if($menu_parent->link != "")
                                    {{--*/ $links = $menu_parent->link /*--}}
                                @endif
                                <li> 
                                    <a class="withripple" href="{!! URL($links) !!}">
                                    <!--<a class="withripple"  href="javascript:void(0)" onclick="setAjaxPage('{!! URL($links) !!}')">-->
                                        <span class="icon">
                                        <i class="material-icons">{!!$style!!}</i></span><span>{!!$menu_parent->name!!}</span></a>
                                    @if (count($menu_parent->sub_menu) != 0)
                                        <ul class="acc-menu">
                                            @foreach ($menu_parent->sub_menu as $menu_child)
                                            <li><a  class="withripple" href="{!! URL($menu_child->link) !!}" ><span class="icon">
                                        <i class="material-icons">{!!$menu_child->style!!}</i></span> {!!$menu_child->name!!}</a></li>
                                                <!--<li><a  class="withripple" href="javascript:void(0)" onclick="setAjaxPage('{!! URL($menu_child->link) !!}')">{!!$menu_child->name!!}</a></li>-->
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <!--                        <ul class="acc-menu">
                                                    <li>
                                                        <a  class="withripple" href="#"><span class="icon">
                                                                <i class="material-icons">home</i></span><span>Dashboard</span></a>
                                                        <ul class="acc-menu">
                                                            <li><a  class="withripple" href={!! URL('dashboard') !!}>Dashboard</a></li>
                                                            <li><a  class="withripple" href="#">Summary</a></li>
                                                            <li><a  class="withripple" style="word-wrap: break-word;white-space:normal;line-height: 1.5;" href="#">Laporan Kehadiran Peserta Kursus</a></li>
                                                            <li><a  class="withripple" href={!! URL('master-kecamatan') !!}>Scaffolding - Kecamatan</a></li>
                                                            <li><a  class="withripple" href={!! URL('master/provinsi') !!}>Scaffolding - Provinsi</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a  class="withripple" href="#"><span class="icon"><i class="material-icons">flash_on</i></span><span>Layout</span></a>
                                                        <ul class="acc-menu">
                                                            <li><a  class="withripple" href="#">Grid Scaffolding</a></li>
                                                            <li><a  class="withripple" href="#">Static Sidebar</a></li>
                                                        </ul>
                                                    </li>
                        
                                                    <li class="nav-separator"><span>Security</span></li>
                                                    <li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">folder</i></span><span>Sub Menu</span></a>
                                                        <ul class="acc-menu">
                                                            <li><a  class="withripple" href="javascript:;"><span>Aliquam</span></a>
                                                                <ul class="acc-menu">
                                                                    <li><a href="#" class="withripple" href="#">Integer</a></li>
                                                                    <li><a href="#" class="withripple" href="#">Ut Aliqum</a></li>
                                                                    <li><a href="#" class="withripple" href="#">Cras Isculis</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#" class="withripple" href="javascript:;">Vestibulum</a></li>
                                                            <li><a href="#" class="withripple" href="javascript:;">Praesent</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
