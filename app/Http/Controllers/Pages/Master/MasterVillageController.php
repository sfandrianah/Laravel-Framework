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
use Illuminate\Support\Facades\View;

class MasterVillageController extends ABaseScaffolding {

    /**
     * ControllerDashboard constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$DASHBOARD];
        $this->lastPageBreadCrumb = PageURLConstant::$VILLAGE;

        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_VILLAGE_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_VILLAGE_EDIT;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_VILLAGE_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_VILLAGE_DELETE;
        $this->apiInsert = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_VILLAGE_INSERT;
    }

    public function getIndexPage(){
        return IApplicationConstant::MASTER_VILLAGE_INDEX_PAGE;
    }

    public function getNewPage(){
        return IApplicationConstant::MASTER_VILLAGE_NEW_PAGE;
    }

    public function getEditPage(){
        return IApplicationConstant::MASTER_VILLAGE_EDIT_PAGE;
    }

    public function getListPage(){
        return IApplicationConstant::MASTER_VILLAGE_LIST_PAGE;
    }

    public function getNewView(){
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $districtLOV = json_decode($this->pipRestClient->doGET(
            env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_DISTRICT_LOV, array()

        )->getBody);
        return View::make(
            $this->getNewPage(),
            compact(
                'pageHeading', 'Form', 'districtLOV'
            )
        );
    }
    
}
