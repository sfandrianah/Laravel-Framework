<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Util;

use Illuminate\Support\Facades\Lang;
use App\Util\Form;

class DataTable {

    public $show;
    public $title_name;
    public $result;
    public $setJson;
    public $deleteById = '0';
    public $editById = '0';
    public $record = null;
    public $numbering = true;
    public $pageUrl;
    public $filter;
    public $filter_value;
    public $sortingKey = null;
    public $sortingDirection = null;
    public $formSearch = 'show';
    public $formRecord = 'show';
    public $formCount = 'show';
    public $formPaginationNumber = 'show';
    protected $dataTableOption = array(
        'STYLE' => null,
        'TITLE' => null,
        'PLACEHOLDER' => null,
        'REQUIRED' => true,
        'ID' => null,
        'SELECT_ALL' => true,
        'BUTTON_ACTION' => true,
        'BUTTON_CREATE' => true,
        'FOLLOW_SELECT_ALL' => '',
        'BUTTON_DELETE_COLLECTION' => true,
        'MESSAGE_REQUIRED_ERROR' => null,
        'MANUAL_ATTRIBUT' => null
    );
    protected $formSearchOption = array(
        'VALUE' => '',
        'ENABLE' => true,
    );

    public function buttonSearchDefault($value, $enabled = true) {
        $this->setFormSearchOption('ENABLE', $enabled);
        $this->setFormSearchOption('VALUE', $value);
        return $this;
    }

    protected function setFormSearchOption($key, $value) {
        $this->formSearchOption[$key] = $value;
        return $this;
    }

    public function buttonAction($title) {
        return $this->setDataTableOption('BUTTON_ACTION', $title);
    }

    public function buttonCreate($button) {
        return $this->setDataTableOption('BUTTON_CREATE', $button);
    }

    public function buttonDeleteCollection($title) {
        return $this->setDataTableOption('BUTTON_DELETE_COLLECTION', $title);
    }

    public function selectAll($title) {
        return $this->setDataTableOption('SELECT_ALL', $title);
    }

    public function followSelectAll($title) {
        return $this->setDataTableOption('FOLLOW_SELECT_ALL', $title);
    }

    protected function setDataTableOption($key, $value) {
        $this->dataTableOption[$key] = $value;
        return $this;
    }

    function show() {

        return $this->getResult();
    }

    public $add_header;

    function addHeader($header) {
//        $form = new Form();
        return $this->add_header = $header;
    }

    function header($title_name, $value = array()) {
//print
        $current_page = json_decode($this->setJson)->current_page;
        $next_page_url = json_decode($this->setJson)->next_page_url;
        $prev_page_url = json_decode($this->setJson)->prev_page_url;
        $per_page = json_decode($this->setJson)->per_page;
        $page_url = '';
        if ($next_page_url == null) {
            $page_url = $prev_page_url;
        } else {
            $page_url = $next_page_url;
        }
        $split_url_2 = explode('?', $page_url);

        $table_field = '';
        foreach ($value as $key => $values) {
            $table_field .= $key . '=>' . $values . ',';
        }
        $table_field = rtrim($table_field, ',');
        $disabled = "";
//        if ($page_url == null) {
//            $disabled = 'disabled';
//        }
//        echo $imp_url;
        if ($this->getSortingKey() == null) {
            $this->setSortingKey('code');
        }
        if ($this->getSortingDirection() == null) {
            $this->setSortingDirection('asc');
        }
        $rs = '<div class="panel-heading">
                <h2 id="header_title">' . $title_name . '</h2>
                <div class="panel-ctrls no-footer">';
        $rs .= '<input type="hidden" value="' . $this->getFormSearch() . '" id="pip-form-search">';
        $rs .= '<input type="hidden" value="' . $this->getFormCount() . '" id="pip-form-count">';
        $rs .= '<input type="hidden" value="' . $this->getFormPaginationNumber() . '" id="pip-form-pagination-number">';
        $rs .= '<input type="hidden" value="' . $this->getFormRecord() . '" id="pip-form-record">';
        $rs .= '<input type="hidden" value="' . $this->getFilter() . '" id="pip-search-filter-pagination">';
        $rs .= '<input type="hidden" value="' . $this->getSortingKey() . '" id="pip-sorting-key-pagination">';
        $rs .= '<input type="hidden" value="' . $this->getSortingDirection() . '" id="pip-sorting-direction-pagination">';
        $rs .= '<input type="hidden" value="' . $table_field . '" id="pip-table-field">';
        $rs .= '<input type="hidden" value="' . $this->dataTableOption['FOLLOW_SELECT_ALL'] . '" id="pip-follow-select">';
        $rs .= '<input type="hidden" value="0" id="pip-count-data-table">';
        $rs .= '<input type="hidden" value="" id="pip-value-data-table">';
        if ($this->getFormSearch() == 'show') {
            $enabled = $this->formSearchOption['ENABLE'];
            if ($enabled == true) {
                $enabled = '';
            } else {
                $enabled = 'disabled';
            }
            $rs .= '<div id="example_filter" class="dataTables_length pull-right">
                        <label class="panel-ctrls-center">
                            <input type="search"
                            value="' . $this->formSearchOption['VALUE'] . '"
                                
                            onkeypress="return searchFilterPaginationV2(\'' . $this->getPageUrl() . '\',event,this,\'' . $table_field . '\')" 
                            id="pip-search-filter-value-pagination" 
                            class="pip-form-control" placeholder=' . trans('pip.search...') . ' 
                            aria-controls="example">
                        </label>
                    </div>';
        }

        $rs .= '<i class="separator"></i>';

        if ($this->dataTableOption['SELECT_ALL'] == true) {
            $rs .='<div class="DTTT btn-group pull-left mt-sm" id="example_length">';
            $rs .= ' <div class="btn-group dropdown" id="selectAllBtn">
                    <button type="button" rel="tooltip" title="Select" class="btn btn-midnightblue dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-square-o"></i>  &nbsp;&nbsp;<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:void(0)" onclick="selectAllDelete()">All</a></li>
                        <li><a href="javascript:void(0)" onclick="unSelectAllDelete()">None</a></li>
                    </ul>
                </div></div>';
        }
        $rs .='<div class="DTTT btn-group pull-left mt-sm" id="example_length">';
        $rs .= $this->add_header;
        if ($this->dataTableOption['BUTTON_DELETE_COLLECTION'] == true) {

            $rs .= '<a href="javascript:void(0)" rel="tooltip" title="Delete Collection" pip-notif-delete-collection="Are You Sure Delete this data collection ?" onclick="deleteByCollection(\'deleteCollection\',\'' . $this->getPageUrl() . '\',\'' . $table_field . '\',this)" class="btn btn-default DTTT_button_text" id="ToolTables_crudtable_2"><i class="fa fa-times"></i> <span>Delete</span></a>';
        }
        if ($this->dataTableOption['BUTTON_CREATE'] == true) {

            $rs .= '<a class="btn btn-default DTTT_button_text" rel="tooltip" title="Create" id="ToolTables_crudtable_0" href="javascript:void(0)" onclick="newEditPagination(\'new\')"><i class="fa fa-plus"></i> <span>' . trans('pip.new') . '</span></a>';
        }
        $rs .= '<script>
            $(function(){ 
                $(\'#ToolTables_crudtable_2\').hide();
                var followSelect = \'' . $this->dataTableOption['FOLLOW_SELECT_ALL'] . '\';' .
                'if (followSelect != "") {
                    var fl = followSelect.split(",");
                    for (var is = 0; is < fl.length; is++) {
                        $(\'#\'+fl[is]).hide();
                    }
                }
            });</script>';
        if ($this->getFormRecord() == 'show') {
            $rs .= '<label class="panel-ctrls-center" style="width:75px;">';
            $rs .= '<select ' . $disabled . ' onchange="paginationManualSelectV2(\'' . $this->getPageUrl() . "?page=" . $current_page . '\',\'' . $table_field . '\',' . $current_page . ',this)" name="example_length" aria-controls="example" id="pip-select-datatable" class="pip-form-control">';
            $val_option = array(5, 10, 25, 50, 100);
            if ($this->getRecord() != null) {
                $val_option = explode(",", $this->getRecord());
            }

            foreach ($val_option as $val) {
                if ($val == $per_page)
                    $rs .= '<option value = "' . $val . '" selected>' . $val . '</option>';
                else
                    $rs .= '<option value = "' . $val . '">' . $val . '</option>';
            }
            $rs .= '</select>
                        </label>';
        }
        $rs .= '</div>
                </div>
            </div>';
        return $rs;
    }

    function body($value = array()) {
        $rs = '<div class="panel-body no-padding">
                <table class="table table-striped table-bordered table-hover">
                    <thead><tr>';
        if ($this->getNumbering() == true) {
            $rs .= '<th width="30">No</th>';
        }
        foreach ($value as $key => $values) {
            $rs .= '<th>' . $key . '</th>';
        }
        if ($this->dataTableOption['BUTTON_ACTION'] == true) {
            $rs .= '<th width="120">' . trans('pip.action') . '</th>';
        }

        $rs .= '</tr></thead>
                    <tbody id="bodyTable">';
        $no = json_decode($this->setJson)->from;
        foreach (json_decode($this->setJson)->data as $v_b) {
            $idEdit = 0;
            $idDelete = 0;
            $txtEdit = $this->getEditById();
            $txtDelete = $this->getDeleteById();
            if ($txtEdit != '0') {
                $idEdit = $v_b->$txtEdit;
            }
            if ($txtDelete != '0') {
                $idDelete = $v_b->$txtDelete;
            }

            $rs .= '<tr style="cursor:pointer" 
                id="trCheck' . $idDelete . '" 
                onclick="checkBoxRow(' . $idDelete . ')">';
            if ($this->getNumbering() == true) {
                $rs .= '<td style="text-align:center">' . $no++ . '</td>';
            }
            foreach ($value as $values) {
                if (property_exists($v_b, $values))
                    $rs .= '<td>' . $v_b->$values . '</td>';
                else
                    $rs .= '<td>' . $values . '</td>';
            }

            $current_page = json_decode($this->setJson)->current_page;
            $next_page_url = json_decode($this->setJson)->next_page_url;
            $prev_page_url = json_decode($this->setJson)->prev_page_url;
            $page_url = '';
            if ($next_page_url == null) {
                $page_url = $prev_page_url;
            } else {
                $page_url = $next_page_url;
            }

            $per_page = json_decode($this->setJson)->per_page;
            $split_url_2 = explode('?', $page_url);
            $split_url = explode('/', $split_url_2[0]);
            array_pop($split_url);
            $split_url = implode("/", $split_url) . "/" . $per_page;
            $table_field = '';
            foreach ($value as $key => $values) {
                $table_field .= $key . '=>' . $values . ',';
            }
            $table_field = rtrim($table_field, ',');
            if ($this->dataTableOption['BUTTON_ACTION'] == true) {
                $rs .= '<td>';
                $rs .= '<button onclick="editById(\'edit\',\'' . $idEdit . '\')" class="btn btn-primary btn-xs" rel="tooltip" title=' . trans('pip.edit') . ' style="margin-top:-10px;margin-bottom:-10px;"><i class="fa fa-edit"></i></button>';
                $rs .= '<button pip-notif-delete="Are You Sure Delete this data ?" onclick="deleteById(\'delete\',\'' . $idDelete . '\',\'' . $this->getPageUrl() . "?page=" . $current_page . '\',\'' . $table_field . '\',this)" class="btn btn-danger btn-xs" rel="tooltip" title=' . trans('pip.delete') . ' style="margin-top:-10px;margin-bottom:-10px;"><i class="fa fa-trash"></i></button>';
                $rs .= '</td>';
            }
            $rs .= '</tr>';
        }

        $rs .= '</tbody>
                </table>
            </div>';

        return $rs;
    }

    function footer($value = array()) {
        $from = json_decode($this->setJson)->from;
        $to = json_decode($this->setJson)->to;
        $total = json_decode($this->setJson)->total;
        $lastpage = json_decode($this->setJson)->last_page;
        $table_field = '';
        foreach ($value as $key => $values) {
            $table_field .= $key . '=>' . $values . ',';
        }


        $rs = '<div class="panel-footer">
                <div class="row">';
        if ($this->getFormCount() == 'show') {
            $rs .= '<div class="col-sm-6">
                        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                            ' . Lang::get('pip.showing') . $from . Lang::get('pip.to') . $to . Lang::get('pip.of') . $total . Lang::get('pip.entries') . '
                        </div>

                    </div>';
        }
        if ($this->getFormPaginationNumber() == 'show') {
            $rs.='<div class="col-sm-6">
                        <div class="dataTables_paginate paging_bootstrap" id="example_paginate">
                            <ul class="pagination pull-right m-n">';


            if ($lastpage < 5) {
                $i = $lastpage;
            } else {
                $i = 5;
            }

            $current_page = json_decode($this->setJson)->current_page;
            $last_page = json_decode($this->setJson)->last_page;
            $next_page_url = json_decode($this->setJson)->next_page_url;
            $prev_page_url = json_decode($this->setJson)->prev_page_url;
            $page_url = '';
            if ($next_page_url == null) {
                $page_url = $prev_page_url;
            } else {
                $page_url = $next_page_url;
            }
            $per_page = json_decode($this->setJson)->per_page;
            $split_url_2 = explode('?', $page_url);
            $split_url = explode('/', $split_url_2[0]);
            array_pop($split_url);
            $split_url = implode("/", $split_url) . "/" . $per_page;
//        echo $split_url_1;
//        print_r($split_url);
//        $split_url = array();
//        parse_str($next_page_url, $split_url);
//        $result = parse_url($next_page_url);
//        parse_str($result['query'], $split_url_2);
//        print_r($result);
//        print_r($split_url_2);
            $prev_page_url = json_decode($this->setJson)->prev_page_url;
            $first_number = $current_page - 3;
            $last_number = $current_page + 2;
//        echo $_GET['page'].'=page';
            $prev_page = $current_page - 1;
            $table_field = rtrim($table_field, ',');

//        print_r($a);
            if ($current_page == 1) {
                $rs .= '<li class="previous disabled"><a href="#">' . trans('pip.previous') . '</a></li>';
            } else {
                $rs .= '<li class="previous"><a href="javascript:void(0)" onclick="paginationManualV2(\'' . $this->getPageUrl() . "?page=" . $prev_page . '\',\'' . $table_field . '\')">' . trans('pip.previous') . '</a></li>';
            }

            if ($current_page <= 3) {
                for ($no = 0; $no < $i; $no++) {
                    $urut = $no + 1;
                    if ($urut == $current_page) {
                        $rs .= '<li class="active"><a>' . $urut . '</a></li>';
                    } else {
                        $rs .= '<li><a href="javascript:void(0)" onclick="paginationManualV2(\'' . $this->getPageUrl() . "?page=" . $urut . '\',\'' . $table_field . '\')">' . $urut . '</a></li>';
                    }
                }
            } else if ($current_page == $last_page) {
                for ($no = $first_number - 2; $no < $last_number - 2; $no++) {
                    $urut = $no + 1;
                    if ($urut == $current_page) {
                        $rs .= '<li class="active"><a>' . $urut . '</a></li>';
                    } else {
                        $rs .= '<li><a href="javascript:void(0)" onclick="paginationManualV2(\'' . $this->getPageUrl() . "?page=" . $urut . '\',\'' . $table_field . '\')">' . $urut . '</a></li>';
                    }
                }
            } else {
                for ($no = $first_number; $no < $last_number; $no++) {
                    $urut = $no + 1;
                    if ($urut == $current_page) {
                        $rs .= '<li class="active"><a>' . $urut . '</a></li>';
                    } else {
                        $rs .= '<li><a href="javascript:void(0)" onclick="paginationManualV2(\'' . $this->getPageUrl() . "?page=" . $urut . '\',\'' . $table_field . '\')">' . $urut . '</a></li>';
                    }
                }
            }
            $next_page = $current_page + 1;
            if ($current_page == $last_page) {
                $rs .= '<li class="next disabled"><a>' . trans('pip.next') . '</a></li>';
            } else {
                $rs .= '<li class="next"><a href="javascript:void(0)" onclick="paginationManualV2(\'' . $this->getPageUrl() . "?page=" . $next_page . '\',\'' . $table_field . '\')">' . trans('pip.next') . '</a></li>';
            }
            $rs .= '</ul>';
            $rs .= '<input type="hidden" value="' . $this->getDeleteById() . '" id="id_delete"/>
            <input type="hidden" value="' . $this->getEditById() . '" id="id_edit"/>
                <input type="hidden" value="' . $this->getPageUrl() . '" id="page_url_pagination"/>
                
            ';
            $rs .= '</div>
                    </div>';
        }
        $rs .= '</div>
            </div>';
        return $rs;
    }

    function getResult() {
        return $this->result;
    }

    function setResult($result) {
        $this->result = $result;
    }

    function getDeleteById() {
        return $this->deleteById;
    }

    function setDeleteById($deleteById) {
        $this->deleteById = $deleteById;
    }

    function getEditById() {
        return $this->editById;
    }

    function setEditById($editById) {
        $this->editById = $editById;
    }

    function set($title_name, $value = array()) {

        $res = $this->header($title_name, $value);
//        foreach ($value as $key => $values) {
//            $this->result = $key . '=' . $values;
//        }

        $res .= $this->body($value);

        $res .= $this->footer($value);
//        echo $res;
//        echo $this->result;
        return $this->setResult($res);
    }

    public function getJson() {
        return $this->setJson;
    }

    function setJson($json) {
        $this->setJson = $json;
//        $this->setJson = json_decode($json)
        return $this->setJson;
    }

    function getRecord() {
        return $this->record;
    }

    function setRecord($record) {
        $this->record = $record;
    }

    function getNumbering() {
        return $this->numbering;
    }

    function setNumbering($numbering) {
        $this->numbering = $numbering;
    }

    function getPageUrl() {
        return $this->pageUrl;
    }

    function setPageUrl($pageUrl) {
        $this->pageUrl = $pageUrl;
    }

    function getFilter() {
        return $this->filter;
    }

    function getFilter_value() {
        return $this->filter_value;
    }

    function setFilter($filter) {
        $this->filter = $filter;
    }

    function setFilter_value($filter_value) {
        $this->filter_value = $filter_value;
    }

    function getFormSearch() {
        return $this->formSearch;
    }

    function getFormRecord() {
        return $this->formRecord;
    }

    function getFormCount() {
        return $this->formCount;
    }

    function getFormPaginationNumber() {
        return $this->formPaginationNumber;
    }

    function setFormSearch($formSearch) {
        $this->formSearch = $formSearch;
    }

    function setFormRecord($formRecord) {
        $this->formRecord = $formRecord;
    }

    function setFormCount($formCount) {
        $this->formCount = $formCount;
    }

    function setFormPaginationNumber($formPaginationNumber) {
        $this->formPaginationNumber = $formPaginationNumber;
    }

    function getSortingKey() {
        return $this->sortingKey;
    }

    function getSortingDirection() {
        return $this->sortingDirection;
    }

    function setSortingKey($sortingKey) {
        $this->sortingKey = $sortingKey;
    }

    function setSortingDirection($sortingDirection) {
        $this->sortingDirection = $sortingDirection;
    }

}
