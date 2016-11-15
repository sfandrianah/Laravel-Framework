function setPage(page) {
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
            $('#dataTablePagination').html(result);
            $("[rel='tooltip']").tooltip();
        },
        error: function (xhr, status, error) {
            var dp = $('#dataTablePagination');
            var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
            $('#bodyMessage').html(xhr.responseText);
            $('#dataTablePagination').html(rplc);
            $("#myModalMessage").modal('show');
            $("[rel='tooltip']").tooltip();
        }
    });
}

function selectAllDelete() {
    var count = $('#bodyTable tr').length;
    for (var no = 0; no < count; no++) {
        var csss = $('#bodyTable tr')[no];
        var css = $(csss).css('background-color');
        var color = hexc(css).toUpperCase();
        if (color != '#81d4f9'.toUpperCase()) {
            $('#bodyTable tr')[no].click();
        }
    }
}

function unSelectAllDelete() {
    var count = $('#bodyTable tr').length;
    for (var no = 0; no < count; no++) {
        var csss = $('#bodyTable tr')[no];
        var css = $(csss).css('background-color');
        var color = hexc(css).toUpperCase();
        if (color == '#81d4f9'.toUpperCase()) {
            $('#bodyTable tr')[no].click();
        }
    }
}

function setAjaxPageList(page) {
    $('[data-toggle="tooltip"]').tooltip('hide');
//    var resultdata = '{"page":"' + page + '"}';
    $('#ajaxPage').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
    $.ajax({
        url: page,
//        data: JSON.parse(resultdata),
        type: 'get',
        success: function (result) {
//            alert(result);
            $('#ajaxPage').html(result);
            $('[data-toggle="tooltip"]').tooltip('show');
        },
        error: function (xhr, status, error) {
            $('#ajaxPage').html(xhr.responseText);
        }
    });
}

function setAjaxPage(page) {
    $('[data-toggle="tooltip"]').tooltip('hide');
//    var resultdata = '{"page":"' + page + '"}';
    $('#ajaxPage').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
    $.ajax({
        url: page,
//        data: JSON.parse(resultdata),
        type: 'get',
        success: function (result) {
//            alert(result);
            $('#ajaxPage').html(result);
            $('[data-toggle="tooltip"]').tooltip('show');
        },
        error: function (xhr, status, error) {
            $('#ajaxPage').html(xhr.responseText);
        }
    });
}

function checkBoxRow(id) {
    var css = $('#trCheck' + id).css('background-color');
    var color = hexc(css).toUpperCase();
    var countTable = parseFloat($('#pip-count-data-table').val());
    var followSelect = $('#pip-follow-select').val();
//    alert(color);
    if (color == '#81d4f9'.toUpperCase()) {
        $('#trCheck' + id).css('background-color', '');
        countTable -= 1;
        var v_data = $('#pip-value-data-table').val();
        var rplc = v_data.replace(id + ',', '');
        $('#pip-value-data-table').val(rplc);
    } else {
        countTable += 1;
        $('#trCheck' + id).css('background-color', '#81d4f9');
        $('#ToolTables_crudtable_2').show();
        var v_data = $('#pip-value-data-table').val();
        if (followSelect != "") {
            var fl = followSelect.split(",");
            for (var is = 0; is < fl.length; is++) {
                $('#' + fl[is]).show();
            }
        }
//        var rplc = v_data.replace(id+',','');
        $('#pip-value-data-table').val(v_data + id + ',');
    }
    $('#pip-count-data-table').val(countTable);
    if (countTable == 0) {
        $('#ToolTables_crudtable_2').hide();
        if (followSelect != "") {
            var fl = followSelect.split(",");
            for (var is = 0; is < fl.length; is++) {
                $('#' + fl[is]).hide();
            }
        }
    }


}

function hexc(colorval) {
    var color = '';
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    if (parts != null) {

        delete(parts[0]);
        for (var i = 1; i <= 3; ++i) {
            parts[i] = parseInt(parts[i]).toString(16);
            if (parts[i].length == 1)
                parts[i] = '0' + parts[i];
        }
        color = '#' + parts.join('');
    }
    return color;
}

function postPage(page, datas) {
//    alert(datas);
    $('[data-toggle="tooltip"]').tooltip('hide');
    var url = '';
//    $('#dataTablePagination').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
//    var resultdata = '{"page":"' + page + '","token":"' + token + '"}';

    $('#dataTablePagination').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
    $.ajax({
        url: page,
//        data: JSON.parse(resultdata),
        data: datas,
        type: 'post',
        success: function (result) {
//            var dp = $('#dataTablePagination');
//            var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
//            $('#dataTablePagination').html(rplc);
//            var res = result.split("!end");
            $('#dataTablePagination').append(result);
            setPage('list');
        },
        error: function (xhr, status, error) {
            var dp = $('#dataTablePagination');
            var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
            $('#dataTablePagination').html(rplc);
//            var err = eval("(" + xhr.responseText + ")");
//            alert(xhr.responseText);
        }
    });
}


function editById(page, id) {
    $('[data-toggle="tooltip"]').tooltip('hide');

    var url = '';
    $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
    var resultdata = '{"page":"' + page + '","id":"' + id + '"}';

    $('#dataTablePagination').append('<div class="panel-loading"><div class="panel-loader-circular"></div></div>');
    $.ajax({
        url: url + '?page=' + page,
        data: JSON.parse(resultdata),
        type: 'post',
        success: function (result) {
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


function deleteById(page, id, nexturl, tfield, e) {

    var notif = e.getAttribute("pip-notif-delete");
    swal({
        title: notif,
//        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
            function () {
                $('.sweet-overlay').remove();
                $('.sweet-alert').remove();
                $('[data-toggle="tooltip"]').tooltip('hide');
                $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
                var resultdata = '{"id":"' + id + '"}';
                var loader = '<div class="panel-loading"><div class="panel-loader-circular"></div></div>';
                $('#dataTablePagination').append(loader);
//        var page_url = 
                $.ajax({
                    url: window.location + "/" + page,
                    data: JSON.parse(resultdata),
                    type: 'DELETE',
                    contentType: 'application/json', // <---add this
                    dataType: 'text', // <---update this
                    success: function (result) {
                        $('#dataTablePagination').append(result);

                        paginationManualV2(nexturl, tfield);
                    },
                    error: function (xhr, status, error) {
                        var dp = $('#dataTablePagination');
                        var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
                        $('#bodyMessage').html(xhr.responseText);
//                swal("Deleted!", xhr.responseText, "error");
                        $('#dataTablePagination').html(rplc);
                        $("#myModalMessage").modal('show');
                    }

                });
            });
//    if (confirm(notif)) {
//        
//    } else {
//        return true;
//    }
}

function lovCityByProvince(e, id, url) {
    $('#' + id).select2('destroy');
    var attribut = '';
    var el = document.getElementById(id);
    for (var i = 0, atts = el.attributes, n = atts.length, arr = []; i < n; i++) {
        attribut += atts[i].nodeName + '="' + atts[i].nodeValue + '" ';
    }
    $('#comp' + id).html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
    var resultdata = '{"id":"' + e.value + '"}';
    $.ajax({
        url: url,
        data: JSON.parse(resultdata),
        type: 'POST',
        success: function (result) {
            var jsonparse = JSON.parse(result);
            var text = '<select ' + attribut + '>';
            for (var no = 0; no < jsonparse.length; no++) {
                text = text + '<option value="' + jsonparse[no].id + '" >' + jsonparse[no].label + '</option>';
            }
            text = text + '</select>';
            $('#comp' + id).html(text);
            $('#' + id).select2();
        },
        error: function (xhr, status, error) {
            alertError(xhr.responseText);
        }

    });
}

function deleteByCollection(page, nexturl, tfield, e) {
    var notif = e.getAttribute("pip-notif-delete-collection");

    swal({
        title: notif,
//        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
            function () {
//    if (confirm(notif)) {
                $('.sweet-overlay').remove();
                $('.sweet-alert').remove();
                $('[data-toggle="tooltip"]').tooltip('hide');
                $('#isitable').html('<i class="fa fa-spinner fa-2x fa-spin text-primary"></i>');
                var id = $('#pip-value-data-table').val();
                var resultdata = '{"id":"' + id + '"}';
                var loader = '<div class="panel-loading"><div class="panel-loader-circular"></div></div>';
                $('#dataTablePagination').append(loader);
//        var page_url = 
                $.ajax({
                    url: window.location + "/" + page,
                    data: JSON.parse(resultdata),
                    type: 'DELETE',
                    contentType: 'application/json', // <---add this
                    dataType: 'text', // <---update this
                    success: function (result) {
                        $('#dataTablePagination').append(result);
//                $('#dataTablePagination').html(dp.html().replace(loader, "") + result);
                        paginationManualV2(nexturl, tfield);
                    },
                    error: function (xhr, status, error) {
                        var dp = $('#dataTablePagination');
                        var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
                        $('#bodyMessage').html(xhr.responseText);
                        $('#dataTablePagination').html(rplc);
                        $("#myModalMessage").modal('show');
                    }

                });
            });
//    } else {
//        return true;
//    }
}


function alertError(message) {
    new PNotify({
        title: 'Error',
        text: message,
        type: 'error',
        icon: 'ti ti-check',
        styling: 'fontawesome',
        width: '900px',
        min_height: '350px',
        before_open: function (PNotify) {
            PNotify.get().css(get_center_pos(PNotify.get().width()));
        }
    });
    $(window).resize(function () {
        $(".ui-pnotify").each(function () {
            $(this).css(get_center_pos($(this).width(), $(this).position().top))
        });
    });
}

function get_center_pos(width, top) {
    // top is empty when creating a new notification and is set when recentering
    if (!top) {
        top = 30;
        // this part is needed to avoid notification stacking on top of each other
        $('.ui-pnotify').each(function () {
            top += $(this).outerHeight() + 20;
        });
    }

    return {
        "top": top,
        "left": ($(window).width() / 2) - (width / 2)
    }
}

/*
$(document).ready(function() {
    $('#datepicker-pastdisabled').datepicker({
        todayHighlight: true,
        startDate: "-3d",
        endDate: "+3d"
    });
});
*/
