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

class MasterProvinceController extends ABaseScaffolding {

    /**
     * ControllerDashboard constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$DASHBOARD];
        $this->lastPageBreadCrumb = PageURLConstant::$PROVINCE;

        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_PROVINCE_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_PROVINCE_EDIT;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_PROVINCE_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_PROVINCE_DELETE;
        $this->apiInsert = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_PROVINCE_INSERT;
    }

    public function getIndexPage(){
        return IApplicationConstant::MASTER_PROVINSI_INDEX_PAGE;
    }

    public function getNewPage(){
        return IApplicationConstant::MASTER_PROVINSI_NEW_PAGE;
    }

    public function getEditPage(){
        return IApplicationConstant::MASTER_PROVINSI_NEW_PAGE;
    }

    public function getListPage(){
        return IApplicationConstant::MASTER_PROVINSI_LIST_PAGE;
    }
    
    function deleteCollection() {
        $data = file_get_contents("php://input");
        $expl = explode('=',$data);
        $body = $expl[1];
        $response = $this->pipRestClient->doDelete(
            $this->apiDelete,
            array(),
            array(),
            $body
        );
        echo $this->Form->SaveUpdateNotifJson(
            IApplicationConstant::SUN_DELETE,
            json_decode($response->getBody)
        );
    }

}
