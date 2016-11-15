<?php

/*
  @project pip.
  @since 09/09/2016 02:21 AM
  @author <a href = "sfandrianah2@gmail.com">Syahrial Fandrianah</a>
 */

namespace App\Util;

use Illuminate\Support\Facades\Log;

class Form {

//    public $style = null;
//    public $title = null;
//    public $placeholder = null;
//    public $required = true;
//    public $id;
//    public $msg_required_error = null;
//    public $manual_attribute = null;

    protected $formOption = array(
        'STYLE' => null,
        'TITLE' => null,
        'TOOLTIP_TITLE' => null,
        'CLASS' => null,
        'NOTIF' => null,
        'PLACEHOLDER' => null,
        'REQUIRED' => true,
        'ID' => null,
        'NAME' => null,
        'VALUE' => null,
        'FORM_LAYOUT' => 'horizontal',
        'OPTION_LABEL_VALUE' => array(),
        'MESSAGE_REQUIRED_ERROR' => null,
        'MANUAL_ATTRIBUT' => null
    );
    public $response;

    public function style($style) {
        return $this->setFormOption('STYLE', $style);
    }

    public function formLayout($style) {
        return $this->setFormOption('FORM_LAYOUT', $style);
    }

    public function title($title) {
        return $this->setFormOption('TITLE', $title);
    }

    public function placeholder($placeholder) {
        return $this->setFormOption('PLACEHOLDER', $placeholder);
    }

    public function required($required) {
        return $this->setFormOption('REQUIRED', $required);
    }

    public function msgRequired($msgRequired) {
        return $this->setFormOption('MESSAGE_REQUIRED_ERROR', $msgRequired);
    }

    public function id($id) {
        return $this->setFormOption('ID', $id);
    }

    public function data($data = array()) {
        return $this->setFormOption('OPTION_LABEL_VALUE', $data);
    }

    public function name($name) {
        return $this->setFormOption('NAME', $name);
    }

    public function attr($manualattribut) {
        return $this->setFormOption('MANUAL_ATTRIBUT', $manualattribut);
    }

    public function value($value) {
        return $this->setFormOption('VALUE', $value);
    }

    protected function defaultOption() {
        $required = $this->formOption['REQUIRED'];
        if ($required == true) {
            $required = 'required';
        } else {
            $required = '';
        }
        $this->setFormOption('REQUIRED', $required);

        $name = $this->formOption['NAME'];
        if ($name == null) {
            $name = $this->formOption['ID'];
        }
        $this->setFormOption('NAME', $name);
    }

    public function onlyButton(){
        $title = $this->formOption['TITLE'];
        $notif = $this->formOption['NOTIF'];
        $class = $this->formOption['CLASS'];
        $rs .= '<a rel="tooltip" 
            title="Delete Collection" 
            notif="'.$notif.'" 
            class="btn btn-default DTTT_button_text" 
            id="ToolTables_crudtable_2">
            <i class="fa fa-times"></i> 
            <span>'.$title.'</span></a>';

        return $rs;
    }

    public function textbox() {
        $this->defaultOption();
        $textbox = '';
//        $textbox = '<div class="col-xs-3">';
        $textbox .= '<input type="text" 
            placeholder="' . $this->formOption['PLACEHOLDER'] . '" 
            name="' . $this->formOption['NAME'] . '" 
            id="' . $this->formOption['ID'] . '" 
            ' . $this->formOption['REQUIRED'] . ' 
            ' . $this->formOption['MANUAL_ATTRIBUT'] . ' 
            value="' . $this->formOption['VALUE'] . '"
            
            class="form-control">';
//        $textbox .= '<div>';
        $rs = $this->formGroup($textbox);
        return $rs;
    }

    public function textpassword() {
        $this->defaultOption();
        $textbox = '';
//        $textbox = '<div class="col-xs-3">';
        $textbox .= '<input type="password"
            placeholder="' . $this->formOption['PLACEHOLDER'] . '"
            name="' . $this->formOption['NAME'] . '"
            id="' . $this->formOption['ID'] . '"
            ' . $this->formOption['REQUIRED'] . '
            ' . $this->formOption['MANUAL_ATTRIBUT'] . '
            value="' . $this->formOption['VALUE'] . '"

            class="form-control">';
//        $textbox .= '<div>';
        $rs = $this->formGroup($textbox);
        return $rs;
    }

    public function textarea() {
        $this->defaultOption();
        $textarea = '<textarea type="text" 
            placeholder="' . $this->formOption['PLACEHOLDER'] . '" 
            name="' . $this->formOption['NAME'] . '" 
            id="' . $this->formOption['ID'] . '" 
            ' . $this->formOption['REQUIRED'] . ' 
            ' . $this->formOption['MANUAL_ATTRIBUT'] . '
            value="' . $this->formOption['VALUE'] . '"    
            class="form-control">' . $this->formOption['VALUE'] . '</textarea>';
        $rs = $this->formGroup($textarea);
        return $rs;
    }

    public function defaultdate() {
        $this->defaultOption();
        $defaultdate = '<input id="datepicker"
            placeholder="' . $this->formOption['PLACEHOLDER'] . '"
            name="' . $this->formOption['NAME'] . '"
            id="' . $this->formOption['ID'] . '"
            ' . $this->formOption['REQUIRED'] . '
            ' . $this->formOption['MANUAL_ATTRIBUT'] . '
            value="' . $this->formOption['VALUE'] . '"
            class="form-control">' . $this->formOption['VALUE'] . '</textarea>';
        $rs = $this->formGroup($defaultdate);
        return $rs;
    }

    public function disablepastdate(){
        $this->defaultOption();
        $defaultdate = '<div id="datepicker-pastdisabled" class="input-group date">
            <span class="input-group-addon">
            <i class="material-icons">date_range</i></span>
            <input type="text" class="form-control"
            placeholder="' . $this->formOption['PLACEHOLDER'] . '"
            name="' . $this->formOption['NAME'] . '"
            id="' . $this->formOption['ID'] . '"
            ' . $this->formOption['REQUIRED'] . '
            ' . $this->formOption['MANUAL_ATTRIBUT'] . '
            value=' . $this->formOption['VALUE'].' '
            . $this->formOption['VALUE'] . '></div>';
        $rs = $this->formGroup($defaultdate);
        return $rs;
    }

    /*
     * THIS IS COMPONENT COMBOBOX
     * EXAMPLE : 
     * $data = '[{"id":"1","label":"EXAMPLE VALUE"},{"id":"2","label":"EXAMPLE VALUE"}]'
     * $json_data = json_decode($data);
     * $Form->title('Combobox Example')->id('combobox')->data($json_data)->combobox();
     */

    public function combobox() {
        $this->defaultOption();
        $combobox = '<select type="text" 
            name="' . $this->formOption['NAME'] . '" 
            id="' . $this->formOption['ID'] . '" 
            ' . $this->formOption['REQUIRED'] . ' 
            ' . $this->formOption['MANUAL_ATTRIBUT'] . '
            value="' . $this->formOption['VALUE'] . '"
            class="form-control">';
        $data = $this->formOption['OPTION_LABEL_VALUE'];
        $combobox .= '<option value="0">Select ...</option>';
        foreach ($data as $value) {
            if ($this->formOption['VALUE'] == $value->id) {
                $combobox .= '<option value="' . $value->id . '" selected="selected">' . $value->label . '</option>';
            } else {
                $combobox .= '<option value="' . $value->id . '">' . $value->label . '</option>';
            }
        }
        $plchldr = '';
        if ($this->formOption['PLACEHOLDER'] != null) {
            $plchldr = '{
                    placeholder: "' . $this->formOption['PLACEHOLDER'] . '"
                }';
        }
        $combobox .= '</select>';
        $combobox .= '<script>$(function(){ $(\'#' . $this->formOption['ID'] . '\').select2('.$plchldr.'); });</script>';
        $rs = $this->formGroup($combobox);
        $this->data(array());
        return $rs;
    }

    protected function formGroup($component) {
        $msg_rq_tx = $this->formOption['MESSAGE_REQUIRED_ERROR'];
        $rq_tx = $this->formOption['REQUIRED'];
        if ($msg_rq_tx == null) {
            if ($rq_tx != false) {
                $msg_rq_tx = 'Field Wajib Diisi';
            }
        }


        $title = $this->formOption['TITLE'];
        if ($title == null) {
            $title = 'DEFAULT';
        }
        if ($this->formOption['FORM_LAYOUT'] == 'vertical') {
            $rs = '<div class="form-group is-empty">
                <label class="control-label" for="focusedinput">' . $title . '</label>
                ';
            $rs .= '<div id="comp'.$this->formOption['ID'].'">'.$component.'</div>';
            $rs .= '
            <p class="help-block">' . $msg_rq_tx . '</p>
        <span class="material-input"></span>
    </div>';
        } else {
            $rs = '<div class="form-group is-empty">
                <label class="col-sm-2 control-label" for="focusedinput">' . $title . '</label>
                <div class="col-sm-8" id="comp'.$this->formOption['ID'].'">';
            $rs .= $component;
            $rs .= '</div>
        <div class="col-sm-2">
            <p class="help-block">' . $msg_rq_tx . '</p>
        </div>
        <span class="material-input"></span>
    </div>';
        }

        return $rs;
    }

    protected function setFormOption($key, $value) {
        $this->formOption[$key] = $value;
        return $this;
    }

    function groupTextBox($title, $id_textbox, $placeholder, $required = true, $msg_required_error = null, $manual_attribute = null) {
        $rq_tx = 'required';
        if ($required == false) {
            $rq_tx = '';
        }
        $msg_rq_tx = 'Field Wajib Diisi';
        if ($msg_required_error != null) {
            $msg_rq_tx = '';
        }
        $textbox = '<input type="text" placeholder="' . $placeholder . '" name="' . $id_textbox . '" id="' . $id_textbox . '" ' . $rq_tx . ' ' . $manual_attribute . ' class="form-control">';
        $rs = $this->divGroup(
            $title, $msg_rq_tx, $textbox);
        return $rs;
    }

    function divGroup($title, $msg_rq_tx, $component) {
        $rs = '<div class="form-group is-empty">
                <label class="col-sm-2 control-label" for="focusedinput">' . $title . '</label>
                <div class="col-sm-8">';
        $rs .= $component;
        $rs .= '</div>
        <div class="col-sm-2">
            <p class="help-block">' . $msg_rq_tx . '</p>
        </div>
        <span class="material-input"></span>
    </div>';

        return $rs;
    }

    function groupSelectBox($title, $id_selectbox, $array_value_label, $required = true, $msg_required_error = null, $manual_attribute = null) {
        $rq_tx = 'required';
        if ($required == false) {
            $rq_tx = '';
        }
        $msg_rq_tx = 'Field Wajib Diisi';
        if ($msg_required_error != null) {
            $msg_rq_tx = '';
        }
        $rs = '<div class="form-group is-empty">
                <label class="col-sm-2 control-label" for="focusedinput">' . $title . '</label>
                <div class="col-sm-8">';
        $rs .= '<select class="form-control select_box" data="selectbox" ' . $rq_tx . ' ' . $manual_attribute . '  id="' . $id_selectbox . '">';

        foreach ($array_value_label as $key) {
//            echo $key['value'];
            $rs .= '<option value="' . $key['value'] . '">' . $key['label'] . '</option>';
        }
        $rs .='</select>';
        $rs .= '</div>
        <div class="col-sm-2">
            <p class="help-block">' . $msg_rq_tx . '</p>
        </div>
        <span class="material-input"></span>
    </div>';

        return $rs;
    }

    function SaveUpdateNotifJson($title, $json) {
        if ($json == '2') {
            return $this->successNotif($title, trans('pip.success-insert-single-data'));
        } else if ($json == '3') {
            return $this->successNotif($title, trans('pip.success-update-single-data'));
        } else if ($json == '4') {
            return $this->successNotif($title, trans('pip.success-delete-single-data'));
        } else if ($json == '5') {
            return $this->successNotif($title, trans('pip.success-insert-collection-data'));
        } else if ($json == '6') {
            return $this->successNotif($title, trans('pip.success-update-collection-data'));
        } else if ($json == '7') {
            return $this->successNotif($title, trans('pip.success-delete-collection-data'));
        } else if ($json == '-1') {
            return $this->errorNotif($title, trans('pip.error-credential-is-empty'));
        } else if ($json == '-2') {
            return $this->errorNotif($title, trans('pip.error-invalid-credential'));
        } else if ($json == '-3') {
            return $this->errorNotif($title, trans('pip.error-could-not-create-token'));
        } else if ($json == '-4') {
            return $this->errorNotif($title, trans('pip.error-could-not-log-out'));
        } else if ($json == '-5') {
            return $this->errorNotif($title, trans('pip.error-could-not-fetch-record'));
        } else if ($json == '-6') {
            return $this->errorNotif($title, trans('pip.error-no-content'));
        } else if ($json == '-7') {
            return $this->errorNotif($title, trans('pip.error-invalid-json-format'));
        } else if ($json == '-8') {
            return $this->errorNotif($title, trans('pip.error-insert-single-data'));
        } else if ($json == '-9') {
            return $this->errorNotif($title, trans('pip.error-update-single-data'));
        } else if ($json == '-10') {
            return $this->errorNotif($title, trans('pip.error-delete-single-data'));
        }else{
            return $this->errorNotif($title, trans('pip.error-unknown'));
        }
    }

    function AfterSaveUpdateNotifJson() {
        $rs = '';
//        $rs = '<script>';
//        $rs .="$(function () { setPage('list') });";
//        $rs .= '</script>';
        return $rs;
    }

    function successNotif($title, $message) {
        $rs = '<script>';
//        $rs .='window.alert("tes");';
        $rs .= "$(function () {
                    new PNotify({
                    title: '" . $title . " " . trans('pip.success') . "',
                    text: '" . $message . "',
                    type: 'success',
                    icon: 'ti ti-check',
                    styling: 'fontawesome',
                    delay: 2500
        });
        });";

        $rs .= '</script>';

        return $rs;
    }

    function errorNotif($title, $message) {
        $rs = '<script>';
        $rs .= "$(function () {
                    new PNotify({
                     title: '" . $title . " " . trans('pip.error') . "',
                    text: '" . $message . "',
                    type: 'error',
                    icon: 'ti ti-check',
                    styling: 'fontawesome',
                    delay: 2500
        });
        });";

        $rs .= '</script>';

        return $rs;
    }

    function setValue($id, $value) {
        $rs = '<script>';

        $rs .= '$(function () {
                    $("#' . $id . '").val("' . $value . '");
                });
            ';

        $rs .= '</script>';
        return $rs;
    }

    protected function result($response) {
        $this->response = $response;
        return $this;
    }

}
