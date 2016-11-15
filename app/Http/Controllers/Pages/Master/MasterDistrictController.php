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

class MasterDistrictController extends ABaseScaffolding {

    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$DASHBOARD];
        $this->lastPageBreadCrumb = PageURLConstant::$DISTRICT;

        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_DISTRICT_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_DISTRICT_EDIT;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_DISTRICT_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_DISTRICT_DELETE;
        $this->apiInsert = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_DISTRICT_INSERT;
    }

    public function getIndexPage(){
        return IApplicationConstant::MASTER_DISTRICT_INDEX_PAGE;
    }

    public function getNewPage(){
        return IApplicationConstant::MASTER_DISTRICT_NEW_PAGE;
    }

    public function getEditPage(){
        return IApplicationConstant::MASTER_DISTRICT_EDIT_PAGE;
    }

    public function getListPage(){
        return IApplicationConstant::MASTER_DISTRICT_LIST_PAGE;
    }

    public function getNewView(){
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $cityLOV = json_decode($this->pipRestClient->doGET(
            env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_CITY_LOV, array()
        )->getBody);
        return View::make(
            $this->getNewPage(),
            compact(
                'pageHeading', 'Form', 'cityLOV'
            )
        );
    }

    public function getEditView(){
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $value = $this->value;
        $cityLOV = json_decode($this->pipRestClient->doGET(
            env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_MASTER_CITY_LOV, array()
        )->getBody);
        return View::make(
            $this->getEditPage(),
            compact(
                'pageHeading', 'Form', 'value', 'cityLOV'
            )
        );
    }

    public function getSaveBody(){
        return $body = array(
            IApplicationConstant::CODE => $_POST[IApplicationConstant::CODE],
            IApplicationConstant::NAME => $_POST[IApplicationConstant::NAME],
            IApplicationConstant::DESCRIPTION => $_POST[IApplicationConstant::DESCRIPTION],
            IApplicationConstant::MDA_CITY_ID => $_POST[IApplicationConstant::MDA_CITY_ID],
        );
    }

    public function getUpdateBody(){
        return $body = array(
            IApplicationConstant::CODE => $_POST[IApplicationConstant::CODE],
            IApplicationConstant::NAME => $_POST[IApplicationConstant::NAME],
            IApplicationConstant::DESCRIPTION => $_POST[IApplicationConstant::DESCRIPTION],
            IApplicationConstant::MDA_CITY_ID => $_POST[IApplicationConstant::MDA_CITY_ID],
            IApplicationConstant::ID => $_POST[IApplicationConstant::ID]);
    }

}
