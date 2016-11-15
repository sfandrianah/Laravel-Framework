<?php

/**
 * @project pip.
 * @since 9/14/2016 6:11 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Pages;


use App\ConstantValues\IApplicationConstant;
use App\ConstantValues\PageURLConstant;
use App\Http\Controllers\Basic\Report\ABasePageReport;

class ReportController extends ABasePageReport
{

    /**
     * ReportController constructor.
     */

    public function __construct()
    {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$DASHBOARD];
        $this->lastPageBreadCrumb = PageURLConstant::$REPORT;

        parent::getPipReport()->setFileName('Contoh Excel');
        parent::getPipReport()->setSheetName('Contoh Sheet');
        parent::getPipReport()->setApiDataSimpleReport(
            env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_BENEFIT_SIMPLE_REPORT
        );
    }

    public function getIndexPage()
    {
        return 'pages\report';
    }
}