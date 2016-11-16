<?php /*    
    @project  pip.
    @since  8/22/2016 10:21 AM
    @author  <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
*/ ?>
<?php /**/
use App\ConstantValues\IApplicationConstant;
$session_menu = $_SESSION[IApplicationConstant::MENU_COOKIES];
$body = json_decode($session_menu);
/**/ ?>
<!DOCTYPE HTML>
<html lang="en">
    <div class="static-sidebar-wrapper sidebar-blue">
        <div class="static-sidebar">
            <div class="sidebar">
                <div class="widget stay-on-collapse" id="widget-sidebar">
                    <nav role="navigation" class="widget-body" id="page-menu">

                        <ul class="acc-menu">

                            <?php foreach($body as $menu_parent): ?> 
                                <?php /**/ $style = 'assignment' /**/ ?>
                                <?php if($menu_parent->style != ""): ?>
                                    <?php /**/ $style = $menu_parent->style /**/ ?>
                                <?php endif; ?>
                                
                                <?php /**/ $links = '#' /**/ ?>
                                <?php if($menu_parent->link != ""): ?>
                                    <?php /**/ $links = $menu_parent->link /**/ ?>
                                <?php endif; ?>
                                <li> 
                                    <a class="withripple" href="<?php echo URL($links); ?>">
                                    <!--<a class="withripple"  href="javascript:void(0)" onclick="setAjaxPage('<?php echo URL($links); ?>')">-->
                                        <span class="icon">
                                        <i class="material-icons"><?php echo $style; ?></i></span><span><?php echo $menu_parent->name; ?></span></a>
                                    <?php if(count($menu_parent->sub_menu) != 0): ?>
                                        <ul class="acc-menu">
                                            <?php foreach($menu_parent->sub_menu as $menu_child): ?>
                                            <li><a  class="withripple" href="<?php echo URL($menu_child->link); ?>" ><span class="icon">
                                        <i class="material-icons"><?php echo $menu_child->style; ?></i></span> <?php echo $menu_child->name; ?></a></li>
                                                <!--<li><a  class="withripple" href="javascript:void(0)" onclick="setAjaxPage('<?php echo URL($menu_child->link); ?>')"><?php echo $menu_child->name; ?></a></li>-->
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <!--                        <ul class="acc-menu">
                                                    <li>
                                                        <a  class="withripple" href="#"><span class="icon">
                                                                <i class="material-icons">home</i></span><span>Dashboard</span></a>
                                                        <ul class="acc-menu">
                                                            <li><a  class="withripple" href=<?php echo URL('dashboard'); ?>>Dashboard</a></li>
                                                            <li><a  class="withripple" href="#">Summary</a></li>
                                                            <li><a  class="withripple" style="word-wrap: break-word;white-space:normal;line-height: 1.5;" href="#">Laporan Kehadiran Peserta Kursus</a></li>
                                                            <li><a  class="withripple" href=<?php echo URL('master-kecamatan'); ?>>Scaffolding - Kecamatan</a></li>
                                                            <li><a  class="withripple" href=<?php echo URL('master/provinsi'); ?>>Scaffolding - Provinsi</a></li>
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
