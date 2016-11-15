<?php
/**
 * @project pip.
 * @since 8/22/2016 6:45 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\ConstantValues;



interface IApplicationConstant extends
    IAPIConstants,
    IHTTPHeaderConstant,
    IPunctuationConstant,
    IJSONConstant,
    IDummyData,
    ISessionConstant,
    IURLConstant,
    IUploadConstant,
    IReportConstant,
    ViewConstant,
    ValidationConstant
{
    const APPLICATION_CRYPT     = "PIP-Dev!23TelkomS1gma";
    const PIP_URL_REST              = 'PIP_URL_REST';
    const PIP_PAGINATION_ITEM_NUMBER = 'PIP_PAGINATION_ITEM_NUMBER';
    const PIP_PAGINATION_FILTER_KEY = 'PIP_PAGINATION_FILTER_KEY';
    const PIP_PAGINATION_FILTER_VALUE = 'PIP_PAGINATION_FILTER_VALUE';
    const PIP_PAGINATION_SORTING_KEY = 'PIP_PAGINATION_SORTING_KEY';
    const PIP_PAGINATION_SORTING_DIRECTION = 'PIP_PAGINATION_SORTING_DIRECTION';
}