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
use App\Util\RestClients\PIPRestClient;
use Illuminate\Support\Facades\View;

class MasterCityController extends ABaseScaffolding {

    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$DASHBOARD];
        $this->lastPageBreadCrumb = PageURLConstant::$CITY;

        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_CITY_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_CITY_EDIT;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_CITY_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_CITY_DELETE;
        $this->apiInsert = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_CITY_INSERT;
    }

    public function getIndexPage() {
        return IApplicationConstant::MASTER_CITY_INDEX_PAGE;
    }

    public function getNewPage() {
        return IApplicationConstant::MASTER_CITY_NEW_PAGE;
    }

    public function getEditPage() {
        return IApplicationConstant::MASTER_CITY_NEW_PAGE;
    }

    public function getListPage() {
        return IApplicationConstant::MASTER_CITY_LIST_PAGE;
    }

    public function getNewView() {
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $provinceLOV = json_decode($this->pipRestClient->doGET(
                        env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_PROVINCE_LOV, array()
                )->getBody);
        return View::make(
                        $this->getNewPage(), compact(
                                'pageHeading', 'Form', 'provinceLOV'
                        )
        );
    }

    public function getEditView() {
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $value = $this->value;
        $provinceLOV = json_decode($this->pipRestClient->doGET(
                        env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_PROVINCE_LOV, array()
                )->getBody);
        return View::make(
                        $this->getEditPage(), compact(
                                'pageHeading', 'Form', 'value', 'provinceLOV'
                        )
        );
    }

    public function getSaveBody() {
        return $body = array(
            IApplicationConstant::CODE => $_POST[IApplicationConstant::CODE],
            IApplicationConstant::NAME => $_POST[IApplicationConstant::NAME],
            IApplicationConstant::DESCRIPTION => $_POST[IApplicationConstant::DESCRIPTION],
            IApplicationConstant::MDA_PROVINCE_ID => $_POST[IApplicationConstant::MDA_PROVINCE_ID],
        );
    }

    public function getUpdateBody() {
        return $body = array(
            IApplicationConstant::CODE => $_POST[IApplicationConstant::CODE],
            IApplicationConstant::NAME => $_POST[IApplicationConstant::NAME],
            IApplicationConstant::DESCRIPTION => $_POST[IApplicationConstant::DESCRIPTION],
            IApplicationConstant::MDA_PROVINCE_ID => $_POST[IApplicationConstant::MDA_PROVINCE_ID],
            IApplicationConstant::ID => $_POST[IApplicationConstant::ID]);
    }

    public function lovCityProvince() {
        $pipRestClient = new PIPRestClient();
        $body = $_POST[IApplicationConstant::ID];
        $rest = $pipRestClient->doPOST(
                env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_CITY_LOV_BY_PROVINCE, array(), array(), $body
        );
        echo $rest->getBody;
    }

}
