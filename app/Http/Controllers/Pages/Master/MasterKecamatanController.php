<?php

/**
 * @project pip.
 * @since 8/23/2016 1:38 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Pages\Master;

use App\ConstantValues\IApplicationConstant;
use App\ConstantValues\PageURLConstant;
use App\Http\Controllers\Basic\Scaffolding\ABaseScaffolding;

class MasterKecamatanController extends ABaseScaffolding {

    protected $pageHeading = IApplicationConstant::MASTER_KECAMATAN_PAGE_HEADING;

    /**
     * ControllerDashboard constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$HOME];
        $this->lastPageBreadCrumb = PageURLConstant::$KECAMATAN;
    }


    public function getIndexPage()
    {
        return IApplicationConstant::MASTER_KECAMATAN_INDEX_PAGE;
    }

    public function getNewPage()
    {
        return IApplicationConstant::MASTER_KECAMATAN_NEW_EDIT_PAGE;
    }

    public function getEditPage()
    {
        return IApplicationConstant::MASTER_KECAMATAN_INDEX_PAGE;
    }

    public function getListPage()
    {
        return IApplicationConstant::MASTER_KECAMATAN_LIST_PAGE;
    }
}
