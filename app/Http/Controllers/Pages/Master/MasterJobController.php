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

class MasterJobController extends ABaseScaffolding {

    /**
     * ControllerDashboard constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$DASHBOARD];
        $this->lastPageBreadCrumb = PageURLConstant::$JOB;

        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_JOB_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_JOB_DELETE;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_JOB_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_JOB_DELETE;
        $this->apiInsert = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_JOB_INSERT;
    }

    public function getIndexPage(){
        return IApplicationConstant::MASTER_JOB_INDEX_PAGE;
    }

    public function getNewPage(){
        return IApplicationConstant::MASTER_JOB_NEW_PAGE;
    }

    public function getEditPage(){
        return IApplicationConstant::MASTER_JOB_INDEX_PAGE;
    }

    public function getListPage(){
        return IApplicationConstant::MASTER_JOB_LIST_PAGE;
    }
    
    /*function deleteCollection() {
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
            trans('pip.delete'),
            json_decode($response->getBody)
        );
    }*/

}
