/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function paginationManual(page, field) {
    var psd = $('#pip-select-datatable');
    var psfvp = $('#pip-search-filter-value-pagination');
    var psfp = $('#pip-search-filter-pagination');
    var pskp = $('#pip-sorting-key-pagination');
    var psdp = $('#pip-sorting-direction-pagination');

    var fSearch = $('#pip-form-search');
    var fCount = $('#pip-form-count');
    var fPaginationNumber = $('#pip-form-pagination-number');
    var fRecord = $('#pip-form-record');

    $('[data-toggle="tooltip"]').tooltip('hide');
    var id_delete = $('#id_delete').val();
    var id_edit = $('#id_edit').val();
    var header_title = $('#header_title').html();
    var url = '../pagination';
    var page_url_pagination = $('#page_url_pagination').val();
    var item_number = $('#pip-select-datatable').val();
    $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
    var filterform = '"sorting_key":"' + pskp.val() + '","sorting_direction":"' + psdp.val() + '","fSearch":"' + fSearch.val() + '","fCount":"' + fCount.val() + '","fPaginationNumber":"' + fPaginationNumber.val() + '","fRecord":"' + fRecord.val() + '",';
    var resultdata = '{"page":"' + page + '",'+filterform+'"total_page":"' + psd.val() + '","filter":"' + psfp.val() + '","filter_value":"' + psfvp.val() + '","page_url_pagination":"' + page_url_pagination + '","item_number":"' + item_number + '","field":"' + field + '","header_title":"' + header_title + '","id_delete":"' + id_delete + '","id_edit":"' + id_edit + '"}';

    $('#dataTablePagination').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
    $.ajax({
        url: url,
        data: JSON.parse(resultdata),
        type: 'post',
        success: function (result) {

//            var res = result.split("!end");
            $('#dataTablePagination').html(result);
            $('#pip-search-filter-value-pagination').val(psfvp.val());
            $("[rel='tooltip']").tooltip();
        },
        error: function (xhr, status, error) {
            var dp = $('#dataTablePagination');
            var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
            $('#bodyMessage').html(xhr.responseText);
            $('#dataTablePagination').html(rplc);
            $("#myModalMessage").modal('show');
        }
    });
}
function paginationManualV2(page, field) {
    var psd = $('#pip-select-datatable');
    var psfvp = $('#pip-search-filter-value-pagination');
    var psfp = $('#pip-search-filter-pagination');
    var pskp = $('#pip-sorting-key-pagination');
    var psdp = $('#pip-sorting-direction-pagination');

    var fSearch = $('#pip-form-search');
    var fCount = $('#pip-form-count');
    var fPaginationNumber = $('#pip-form-pagination-number');
    var fRecord = $('#pip-form-record');

    $('[data-toggle="tooltip"]').tooltip('hide');
    var id_delete = $('#id_delete').val();
    var id_edit = $('#id_edit').val();
    var header_title = $('#header_title').html();
    var url = '?page=list';
    var page_url_pagination = $('#page_url_pagination').val();
    var item_number = $('#pip-select-datatable').val();
    $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
    var filterform = '"sorting_key":"' + pskp.val() + '","sorting_direction":"' + psdp.val() + '","fSearch":"' + fSearch.val() + '","fCount":"' + fCount.val() + '","fPaginationNumber":"' + fPaginationNumber.val() + '","fRecord":"' + fRecord.val() + '",';
    var resultdata = '{"page":"' + page + '",'+filterform+'"total_page":"' + psd.val() + '","filter":"' + psfp.val() + '","filter_value":"' + psfvp.val() + '","page_url_pagination":"' + page_url_pagination + '","item_number":"' + item_number + '","field":"' + field + '","header_title":"' + header_title + '","id_delete":"' + id_delete + '","id_edit":"' + id_edit + '"}';

    $('#dataTablePagination').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
    $.ajax({
        url: url,
        data: JSON.parse(resultdata),
        type: 'post',
        success: function (result) {

//            var res = result.split("!end");
            $('#dataTablePagination').html(result);
            $('#pip-search-filter-value-pagination').val(psfvp.val());
            $("[rel='tooltip']").tooltip();
        },
        error: function (xhr, status, error) {
            var dp = $('#dataTablePagination');
            var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
            $('#bodyMessage').html(xhr.responseText);
            $('#dataTablePagination').html(rplc);
            $("#myModalMessage").modal('show');
        }
    });
}

function searchFilterPagination(page, event, e, field) {
    if (event.keyCode == 13) {
        var psd = $('#pip-select-datatable');
        var psfvp = $('#pip-search-filter-value-pagination');
        var psfp = $('#pip-search-filter-pagination');
        var pskp = $('#pip-sorting-key-pagination');
    var psdp = $('#pip-sorting-direction-pagination');

        var fSearch = $('#pip-form-search');
        var fCount = $('#pip-form-count');
        var fPaginationNumber = $('#pip-form-pagination-number');
        var fRecord = $('#pip-form-record');

        page = page + "/" + psd.val();
        $('[data-toggle="tooltip"]').tooltip('hide');
        var id_delete = $('#id_delete').val();
        var id_edit = $('#id_edit').val();
        var page_url_pagination = $('#page_url_pagination').val();
        var header_title = $('#header_title').html();
        var url = '../pagination';
        $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
        var filterform = '"sorting_key":"' + pskp.val() + '","sorting_direction":"' + psdp.val() + '","fSearch":"' + fSearch.val() + '","fCount":"' + fCount.val() + '","fPaginationNumber":"' + fPaginationNumber.val() + '","fRecord":"' + fRecord.val() + '",';
        var resultdata = '{"page":"' + page_url_pagination + '",' + filterform + '"total_page":"' + psd.val() + '","filter":"' + psfp.val() + '","filter_value":"' + psfvp.val() + '","page_url_pagination":"' + page_url_pagination + '","item_number":"' + psd.val() + '","header_title":"' + header_title + '","field":"' + field + '","id_delete":"' + id_delete + '","id_edit":"' + id_edit + '"}';

        $('#dataTablePagination').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
        $.ajax({
            url: url,
            data: JSON.parse(resultdata),
            type: 'post',
            success: function (result) {

//            var res = result.split("!end");
                $('#dataTablePagination').html(result);
                $('#pip-search-filter-value-pagination').val(psfvp.val());
            },
            error: function (xhr, status, error) {
                var dp = $('#dataTablePagination');
                var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
                $('#bodyMessage').html(xhr.responseText);
                $('#dataTablePagination').html(rplc);
                $("#myModalMessage").modal('show');

            }
        });
    }
}

function searchFilterPaginationV2(page, event, e, field) {
    if (event.keyCode == 13) {
        var psd = $('#pip-select-datatable');
        var psfvp = $('#pip-search-filter-value-pagination');
        var psfp = $('#pip-search-filter-pagination');
        var pskp = $('#pip-sorting-key-pagination');
    var psdp = $('#pip-sorting-direction-pagination');

        var fSearch = $('#pip-form-search');
        var fCount = $('#pip-form-count');
        var fPaginationNumber = $('#pip-form-pagination-number');
        var fRecord = $('#pip-form-record');

        page = page + "/" + psd.val();
        $('[data-toggle="tooltip"]').tooltip('hide');
        var id_delete = $('#id_delete').val();
        var id_edit = $('#id_edit').val();
        var page_url_pagination = $('#page_url_pagination').val();
        var header_title = $('#header_title').html();
        var url = '?page=list';
        $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
        var filterform = '"sorting_key":"' + pskp.val() + '","sorting_direction":"' + psdp.val() + '","fSearch":"' + fSearch.val() + '","fCount":"' + fCount.val() + '","fPaginationNumber":"' + fPaginationNumber.val() + '","fRecord":"' + fRecord.val() + '",';
        var resultdata = '{"page":"' + page_url_pagination + '",' + filterform + '"total_page":"' + psd.val() + '","filter":"' + psfp.val() + '","filter_value":"' + psfvp.val() + '","page_url_pagination":"' + page_url_pagination + '","item_number":"' + psd.val() + '","header_title":"' + header_title + '","field":"' + field + '","id_delete":"' + id_delete + '","id_edit":"' + id_edit + '"}';

        $('#dataTablePagination').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
        $.ajax({
            url: url,
            data: JSON.parse(resultdata),
            type: 'post',
            success: function (result) {

//            var res = result.split("!end");
                $('#dataTablePagination').html(result);
                $('#pip-search-filter-value-pagination').val(psfvp.val());
            },
            error: function (xhr, status, error) {
                var dp = $('#dataTablePagination');
                var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
                $('#bodyMessage').html(xhr.responseText);
                $('#dataTablePagination').html(rplc);
                $("#myModalMessage").modal('show');

            }
        });
    }
}



function paginationManualSelect(page, field, current_page, e) {
    page = page + "/" + e.value + "?page=" + current_page;
    var psd = $('#pip-select-datatable');
    var psfvp = $('#pip-search-filter-value-pagination');
    var psfp = $('#pip-search-filter-pagination');
    var pskp = $('#pip-sorting-key-pagination');
    var psdp = $('#pip-sorting-direction-pagination');

    var fSearch = $('#pip-form-search');
    var fCount = $('#pip-form-count');
    var fPaginationNumber = $('#pip-form-pagination-number');
    var fRecord = $('#pip-form-record');

    $('[data-toggle="tooltip"]').tooltip('hide');
    var id_delete = $('#id_delete').val();
    var id_edit = $('#id_edit').val();
    var page_url_pagination = $('#page_url_pagination').val();
    var header_title = $('#header_title').html();
    var url = '../pagination';
    $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
    var filterform = '"sorting_key":"' + pskp.val() + '","sorting_direction":"' + psdp.val() + '","fSearch":"' + fSearch.val() + '","fCount":"' + fCount.val() + '","fPaginationNumber":"' + fPaginationNumber.val() + '","fRecord":"' + fRecord.val() + '",';
    var resultdata = '{"page":"' + page + '",' + filterform + '"total_page":"' + psd.val() + '","filter":"' + psfp.val() + '","filter_value":"' + psfvp.val() + '","page_url_pagination":"' + page_url_pagination + '","item_number":"' + e.value + '","header_title":"' + header_title + '","field":"' + field + '","id_delete":"' + id_delete + '","id_edit":"' + id_edit + '"}';

    $('#dataTablePagination').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
    $.ajax({
        url: url,
        data: JSON.parse(resultdata),
        type: 'post',
        success: function (result) {

//            var res = result.split("!end");
            $('#dataTablePagination').html(result);
            $('#pip-search-filter-value-pagination').val(psfvp.val());
        },
        error: function (xhr, status, error) {
            var dp = $('#dataTablePagination');
            var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
            $('#bodyMessage').html(xhr.responseText);
            $('#dataTablePagination').html(rplc);
            $("#myModalMessage").modal('show');
        }
    });
}



function paginationManualSelectV2(page, field, current_page, e) {
    page = page + "/" + e.value + "?page=" + current_page;
    var psd = $('#pip-select-datatable');
    var psfvp = $('#pip-search-filter-value-pagination');
    var psfp = $('#pip-search-filter-pagination');
    var pskp = $('#pip-sorting-key-pagination');
    var psdp = $('#pip-sorting-direction-pagination');

    var fSearch = $('#pip-form-search');
    var fCount = $('#pip-form-count');
    var fPaginationNumber = $('#pip-form-pagination-number');
    var fRecord = $('#pip-form-record');

    $('[data-toggle="tooltip"]').tooltip('hide');
    var id_delete = $('#id_delete').val();
    var id_edit = $('#id_edit').val();
    var page_url_pagination = $('#page_url_pagination').val();
    var header_title = $('#header_title').html();
    var url = '?page=list';
    $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
    var filterform = '"sorting_key":"' + pskp.val() + '","sorting_direction":"' + psdp.val() + '","fSearch":"' + fSearch.val() + '","fCount":"' + fCount.val() + '","fPaginationNumber":"' + fPaginationNumber.val() + '","fRecord":"' + fRecord.val() + '",';
    var resultdata = '{"page":"' + page + '",' + filterform + '"total_page":"' + psd.val() + '","filter":"' + psfp.val() + '","filter_value":"' + psfvp.val() + '","page_url_pagination":"' + page_url_pagination + '","item_number":"' + e.value + '","header_title":"' + header_title + '","field":"' + field + '","id_delete":"' + id_delete + '","id_edit":"' + id_edit + '"}';

    $('#dataTablePagination').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
    $.ajax({
        url: url,
        data: JSON.parse(resultdata),
        type: 'post',
        success: function (result) {

//            var res = result.split("!end");

            $('#dataTablePagination').html(result);
            $('#pip-search-filter-value-pagination').val(psfvp.val());
            $("[rel='tooltip']").tooltip();
        },
        error: function (xhr, status, error) {
            var dp = $('#dataTablePagination');
            var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
            $('#bodyMessage').html(xhr.responseText);
            $('#dataTablePagination').html(rplc);
            $("#myModalMessage").modal('show');
        }
    });
}

function newEditPagination(page) {
    $('[data-toggle="tooltip"]').tooltip('hide');
    var url = '';
    $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
    var resultdata = '{"page":"' + page + '"}';

    $('#dataTablePagination').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
    $.ajax({
        url: url,
        data: JSON.parse(resultdata),
        type: 'get',
        success: function (result) {

//            var res = result.split("!end");
            $('#dataTablePagination').html(result);
        },
        error: function (xhr, status, error) {
            var dp = $('#dataTablePagination');
            var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
            $('#bodyMessage').html(xhr.responseText);
            $('#dataTablePagination').html(rplc);
            $("#myModalMessage").modal('show');
        }
    });
}