/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function approveAll(e,page){
    var notif = e.getAttribute("pip-notif-approve-collection");
    var id = $('#pip-value-data-table').val();
    ajaxApproveReject(notif,page,id);
}
function rejectAll(e,page){
    var notif = e.getAttribute("pip-notif-reject-collection");
    var id = $('#pip-value-data-table').val();
    ajaxApproveReject(notif,page,id);
}

function approve(e,page,id){
    var notif = e.getAttribute("pip-notif-approve");
    ajaxApproveReject(notif,page,id);
}
function reject(e,page,id){
    var notif = e.getAttribute("pip-notif-reject");
    ajaxApproveReject(notif,page,id);
}

function ajaxApproveReject(notif,page,id) {
//    alert(id);
//    var notif = e.getAttribute("pip-notif-approve-collection");
    if (confirm(notif)) {
        $('[data-toggle="tooltip"]').tooltip('hide');
        var id = id;
        var page_url = $('#page_url_pagination').val();
        var pip_table_field = $('#pip-table-field').val();
        var resultdata = '{"id":"' + id + '"}';
        var loader = '<div class="panel-loading"><div class="panel-loader-circular"></div></div>';
        $('#dataTablePagination').append(loader);
        $.ajax({
            url: page,
            data: JSON.parse(resultdata),
            type: 'POST',
            success: function (result) {
                $('#dataTablePagination').append(result);
                paginationManualV2(page_url, pip_table_field);
            },
            error: function (xhr, status, error) {
                var dp = $('#dataTablePagination');
                var rplc = dp.html().replace('<div class="panel-loading"><div class="panel-loader-circular"></div></div>', '');
                $('#bodyMessage').html(xhr.responseText);
                $('#dataTablePagination').html(rplc);
                $("#myModalMessage").modal('show');
            }

        });
    } else {
        return true;
    }
}