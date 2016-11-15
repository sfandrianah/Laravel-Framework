<?php

/**
 * @project pip.
 * @since 8/22/2016 6:21 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Pages;

use App\ConstantValues\IApplicationConstant;
use App\ConstantValues\PageURLConstant;
use App\ConstantValues\ViewConstant;
use App\Http\Controllers\Basic\Page\ABasePageController;
use Illuminate\Support\Facades\View;

class ControllerDashboard extends ABasePageController
{

    protected $pageHeading = ViewConstant::DASHBOARD_PAGE_HEADING;

    protected $pageSubTitle = ViewConstant::DASHBOARD_PAGE_SUBTITLE;

    /**
     * ControllerDashboard constructor.
     */
    public function __construct()
    {
        $this->pageBreadCrumb = [PageURLConstant::$HOME];
        $this->lastPageBreadCrumb = PageURLConstant::$DASHBOARD;
    }


    public function index(){
        $pageHeading = $this->pageHeading;
        $pageSubTitle = $this->pageSubTitle;
        $pageContent = IApplicationConstant::LOREM_IPSUM;
        $pageBreadCrumb = $this->pageBreadCrumb;
        $lastPageBreadCrumb = $this->lastPageBreadCrumb;

        return View::make(
            $this->getIndexPage(),
            compact(
                'pageHeading',
                'pageSubTitle',
                'pageContent',
                'pageBreadCrumb',
                'lastPageBreadCrumb'
            )
        );
    }

    public function getIndexPage()
    {
        return 'pages.dashboard.dashboard';
    }
}