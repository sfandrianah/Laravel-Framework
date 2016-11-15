<?php
/**
 * @package app\ConstantValue
 * @since 4/19/2016 - 10:44 AM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\ConstantValues;


interface ValidationConstant
{
    const VALIDATION_KEY_REQUIRED      = "required";
    const VALIDATION_KEY_PASSWORD      = 'password';

    const VALIDATION_IMAGE                      = 'mimes:jpeg,jpg,png,gif|required|max:10000';
    const VALIDATION_FILE                       = 'required_if:update,false|mimes:pdf,doc,ppt,xls,docx,pptx,xlsx,rar,zip|max:1000';
    const VALIDATION_EXCEL_FILE                 = 'mimes:xls,xlsx|required|max:1000|file:required';
    const VALIDATION_SPREAD_SHEET_FILE          = 'required|mimes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
    const VALIDATION_NUM_RECORDS                = 'num_records';
    const VALIDATION_KEY_FILE                   = 'file';
}