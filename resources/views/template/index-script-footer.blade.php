{{--    
    @project pip.
    @since 8/22/2016 10:21 AM
    @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
--}}
<!DOCTYPE HTML>
<html lang="en">
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->


{!! HTML::script('js/jqueryui-1.10.3.min.js') !!} 							<!-- Load jQueryUI -->
{!! HTML::script('js/bootstrap.min.js') !!}								<!-- Load Bootstrap -->
{!! HTML::script('js/enquire.min.js') !!}								<!-- Load Enquire -->
{!! HTML::script('plugins/velocityjs/velocity.min.js') !!}							<!-- Load Velocity for Animated Content -->
{!! HTML::script('plugins/velocityjs/velocity.ui.min.js') !!}
{!! HTML::script('plugins/progress-skylo/skylo.js') !!} 		<!-- Skylo -->
{!! HTML::script('plugins/wijets/wijets.js') !!}   						<!-- Wijet -->
{!! HTML::script('plugins/sparklines/jquery.sparklines.min.js') !!} 			 <!-- Sparkline -->
{!! HTML::script('plugins/codeprettifier/prettify.js') !!} 				<!-- Code Prettifier  -->
{!! HTML::script('plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') !!}    <!-- Bootstrap Tabdrop -->
{!! HTML::script('plugins/nanoScroller/js/jquery.nanoscroller.min.js') !!}   <!-- nano scroller -->
{!! HTML::script('plugins/dropdown.js/jquery.dropdown.js') !!}  <!-- Fancy Dropdowns -->
{!! HTML::script('plugins/bootstrap-material-design/js/material.min.js') !!}   <!-- Bootstrap Material -->
{!! HTML::script('plugins/bootstrap-material-design/js/ripples.min.js') !!}  <!-- Bootstrap Material -->
{!! HTML::script('js/application.js') !!}
{!! HTML::script('js/pagination.js') !!}
{!! HTML::script('demo/demo.js') !!}

{!! HTML::script('demo/demo-switcher.js') !!}


        <!-- End loading site level scripts -->
<!-- Load page level scripts-->

<!-- Charts -->
{!! HTML::script('plugins/charts-flot/jquery.flot.min.js') !!}                <!-- Flot Main File -->
{!! HTML::script('plugins/charts-flot/jquery.flot.pie.min.js') !!}               <!-- Flot Pie Chart Plugin -->
{!! HTML::script('plugins/charts-flot/jquery.flot.stack.min.js') !!}             <!-- Flot Stacked Charts Plugin -->
{!! HTML::script('plugins/charts-flot/jquery.flot.resize.min.js') !!}            <!-- Flot Responsive -->
{!! HTML::script('plugins/charts-flot/jquery.flot.tooltip.min.js') !!}          <!-- Flot Tooltips -->
{!! HTML::script('plugins/charts-flot/jquery.flot.spline.js') !!}               <!-- Flot Curved Lines -->
{!! HTML::script('plugins/easypiechart/jquery.easypiechart.min.js') !!}          <!-- EasyPieChart-->
{!! HTML::script('plugins/curvedLines-master/curvedLines.js') !!}                <!-- marvinsplines -->

{!! HTML::script('plugins/form-daterangepicker/moment.min.js') !!}               <!-- Moment.js for Date Range Picker -->

<!-- Date Range Picker -->
{!! HTML::script('plugins/bootstrap-datepicker/bootstrap-datepicker.js') !!}                 <!-- Datepicker -->
{!! HTML::script('plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') !!}                 <!-- Date Time picker -->
{!! HTML::script('plugins/form-daterangepicker/daterangepicker.js') !!}                 <!-- DateRangepicker -->
{!! HTML::script('plugins/form-colorpicker/js/bootstrap-colorpicker.min.js') !!}                 <!-- Color Picker -->
{!! HTML::script('plugins/bootstrap-timepicker/bootstrap-timepicker.js') !!}                 <!-- Time Picker -->
{!! HTML::script('plugins/clockface/js/clockface.js') !!}                 <!-- Color Picker -->
{!! HTML::script('plugins/form-select2/select2.min.js') !!}                 <!-- SelectBOX -->
{!! HTML::script('plugins/pines-notify/pnotify.min.js') !!}                 <!-- Notify -->

<!-- <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> --> <!-- DateTime Picker -->

<!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>   -->    <!-- jVectorMap -->
<!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>  --> <!--World Map-->
{!! HTML::script('plugins/chartist/dist/chartist.min.js') !!}   <!-- chartist -->
{!! HTML::script('demo/demo-index.js') !!}                                       <!-- Initialize scripts for this page-->
{!! HTML::script('demo/demo-pickers.js') !!}
{!! HTML::script('js/function.js') !!}
{!! HTML::script('plugins/sweetalert/sweetalert.min.js')!!}
 <script>
$(function (){
    $("[rel='tooltip']").tooltip();
});
</script>

<!-- End loading page level scripts-->
</html>