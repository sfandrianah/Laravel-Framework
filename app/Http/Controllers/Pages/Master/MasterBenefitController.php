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

class MasterBenefitController extends ABaseScaffolding {

    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$DASHBOARD];
        $this->lastPageBreadCrumb = PageURLConstant::$BENEFIT;

        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_BENEFIT_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_BENEFIT_EDIT;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_BENEFIT_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_BENEFIT_DELETE;
        $this->apiInsert = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_BENEFIT_INSERT;
    }

    public function getIndexPage(){
        return IApplicationConstant::MASTER_BENEFIT_INDEX_PAGE;
    }

    public function getNewPage(){
        return IApplicationConstant::MASTER_BENEFIT_NEW_PAGE;
    }

    public function getEditPage(){
        return IApplicationConstant::MASTER_BENEFIT_NEW_PAGE;
    }

    public function getListPage(){
        return IApplicationConstant::MASTER_BENEFIT_LIST_PAGE;
    }

}
