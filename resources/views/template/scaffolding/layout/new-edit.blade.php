<div class="panel-heading">
    <?php $pageTitle = ''?>
    @if($_GET['page'] == 'new')
        <?php $pageTitle = trans('pip.new')?>
    @elseif($_GET['page'] == 'edit')
        <?php $pageTitle = trans('pip.edit')?>
    @endif
    <h2>{!!$pageHeading!!}  | <span id="page-title" style="text-transform: uppercase">{!! $pageTitle !!}</span></h2>
    <div class="panel-ctrls no-footer">
        <div class="pull-right" id="example_filter">
            <label class="panel-ctrls-center">
                <button class="btn btn-danger btn-sm" rel="tooltip" title="Back" onclick="setPage('list')"><i class="fa fa-arrow-left"></i></button>
            </label>
        </div>
    </div>

</div>
<div class="panel-body no-padding">
    @yield('page-new-edit')
</div>
<div class="panel-footer">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <button class="btn-raised btn-primary btn" id="btn-save">@lang('pip.save')</button>
            <button class="btn-default btn" id="btn-reset">@lang('pip.reset')</button>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("[rel='tooltip']").tooltip();
        $("[data='selectbox']").select2();

        if($('#datepicker-pastdisabled')){
            $('#datepicker-pastdisabled').datepicker({
                todayHighlight: true,
                startDate: "-3d",
                endDate: "+3d"
            });
        }
    });
</script>
<script>
    // See Docs
    window.ParsleyConfig = {
        successClass: 'has-success'
        , errorClass: 'has-error'
        , errorElem: '<span></span>'
        , errorsWrapper: '<span class="help-block"></span>'
        , errorTemplate: "<div></div>"
        , classHandler: function (el) {
            return el.$element.closest(".form-group");
        }
    };
</script>

{!! HTML::script('js/form-validation.js') !!}
{!! HTML::script('plugins/form-parsley/parsley.js') !!}