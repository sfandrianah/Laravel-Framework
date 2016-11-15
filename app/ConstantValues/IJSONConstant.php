<?php

/**
 * @project pip.
 * @since 8/22/2016 6:46 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\ConstantValues;


interface IJSONConstant
{

    const ITEM_NUMBER       = 'item_number';
    const FILTER        = 'filter';
    const FILTER_KEY        = 'filter_key';
    const FILTER_DATA        = 'filter_data';
    const FILTER_VALUE      = 'filter_value';
    const HARDCORE_PAGINATION      = 'hardCorePagination';
    const SORTING_KEY       = 'sorting_key';
    const SORTING_DIRECTION = 'sorting_direction';
    const ASCENDING         = 'ascending';
    const DESCENDING        = 'descending';
    const GROUP_PARAM_CODE  = 'group_param_code';
    const APP_PARAM_CODE    = 'app_param_code';
    const USER_CODE         = 'user_code';
    const MENU_COOKIES         = 'menu_cookies';
    const ITEM              = 'item';
    const LINK              = 'link';
    const ORDER             = 'order';
    const LEVEL             = 'level';
    const PARENT            = 'parent';
    const PARENT_ITEM       = 'parent_item';
    const ERROR             = 'error';
    const SUCCESS           = 'success';

    const SUCCESS_UPLOAD_IMAGE = 8;
    const SUCCESS_UPLOAD_EXCEL = 9;
    const ERROR_UPLOAD_FILE_INVALID_EXT = -11;



    const ID                = 'id';
    const CODE              = 'code';
    const NAME              = 'name';
    const DESCRIPTION       = 'description';
    const PROVINCE       = 'province';
    const CITY       = 'city';
    const ADDRESS       = 'address';

    const MDA_PROVINCE_ID   = 'mda_province_id';
    const MDA_CITY_ID       = 'mda_city_id';

    const GROUP_ID          = 'group_id';
    const EXPIRED_DATE      = 'expired_date';

    const TOKEN             = 'token';
    const TOKEN_JWT         = '_token';

}