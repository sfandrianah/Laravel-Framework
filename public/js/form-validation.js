    $(document).ready(function () {
    //    Normally no JS is required to initialize parsley, however
    //    we will use it to do a faux-validation
    //    Do see the docs for configuration options #validate-form .btn
    $('#btn-save').on('click', function () {
//        alert($('#validate-form').parsley().validate());
//        $('#validate-form').parsley().validate();
        var validate = $("#validate-form").parsley().validate();
        if (validate == true) {
            var page = $('#validate-form').attr('page');
//            var pagetitle = $('#validate-form').attr('page-title');
//            alert($('#validate-form').serialize());
            postPage(page,$('#validate-form').serialize());
        }

    });
    $('#btn-reset').on('click', function () {
//        alert($('#validate-form').parsley().validate());
//        $('#validate-form').parsley().validate();
        document.getElementById("validate-form").reset();
    });
});