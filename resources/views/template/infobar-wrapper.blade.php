{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com"> yang bertanggung jawab : Achmad Fauzi</a>
--}}
<!DOCTYPE HTML>
<html lang="en">
<div class="infobar-wrapper scroll-pane">
            <div class="infobar scroll-content">


                <ul class="nav nav-tabs material-nav-tabs stretch-tabs icon-tabs">
                    <li ><a href="#tab-7-2" data-toggle="tab"><span class="step size-64">
                                <i class="material-icons">settings</i>
                            </span></a>
                    </li>
                    <li class="active "><a href="#tab-7-1" data-toggle="tab">
                            <i class="material-icons">account_circle</i>
                        </a></li>
                    
                </ul>


                <div class="tab-content">
                    <div class="tab-pane" id="tab-7-2">
                        @include('template.sidebar-settings')
                    </div>
                    <div class="tab-pane active" id="tab-7-1">
                        @include('template.sidebar-profile')
                    </div>
                    
                </div>

            </div>

        </div>
</html>