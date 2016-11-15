<?php

/**
 * @project pip.
 * @since 8/23/2016 1:38 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Pages\Registrasi;

use App\ConstantValues\IApplicationConstant;
use App\ConstantValues\PageURLConstant;
use App\Http\Controllers\Basic\Scaffolding\ABaseScaffolding;
use Illuminate\Support\Facades\View;
use App\Util\RestClients\PIPRestClient;

class ApprovalRegistrasiLembagaController extends ABaseScaffolding {

    /**
     * ControllerDashboard constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$HOME];
        $this->lastPageBreadCrumb = PageURLConstant::$REGISTRASI_LEMBAGA;

        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_PROVINCE_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_PROVINCE_EDIT;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_REGISTRASI_LEMBAGA_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_PROVINCE_DELETE;
        $this->apiInsert = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_REGISTRASI_LEMBAGA_SAVE;
    }

    public function getIndexPage() {
        return IApplicationConstant::REGISTRASI_LEMBAGA_INDEX_PAGE;
    }

    public function getNewPage() {
        return IApplicationConstant::REGISTRASI_LEMBAGA_NEW_PAGE;
    }

    public function getNewView() {
        $rs = new PIPRestClient();
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $provinceLOV = json_decode($rs->doGET(
                        env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_PROVINCE_LOV, array()
                )->getBody);
        $cityLOV = json_decode('[{"id":0,"label":"Select ..."}]');
        return View::make(
                        $this->getNewPage(), compact(
                                'pageHeading', 'Form', 'provinceLOV', 'cityLOV'
                        )
        );
    }

    public function getEditPage() {
        return IApplicationConstant::MASTER_PROVINSI_EDIT_PAGE;
    }

    public function getListPage() {
        return IApplicationConstant::REGISTRASI_LEMBAGA_LIST_PAGE;
    }

    public function save() {
        $rs = new PIPRestClient();
        $url = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_REGISTRASI_LEMBAGA_SAVE;
        $body = array(
            IApplicationConstant::CODE => $_POST[IApplicationConstant::CODE],
            IApplicationConstant::NAME => $_POST[IApplicationConstant::NAME],
            IApplicationConstant::PROVINCE => $_POST[IApplicationConstant::PROVINCE],
            IApplicationConstant::CITY => $_POST[IApplicationConstant::CITY],
            IApplicationConstant::ADDRESS => $_POST[IApplicationConstant::ADDRESS],
            'device_sn' => $_POST['device_id']
        );
        $response = $rs->doPOST(
                $url, array(), array(), $body
        );
        echo $this->Form->SaveUpdateNotifJson(
                trans('pip.save'), json_decode($response->getBody)
        );
    }

    function deleteCollection() {
        $data = file_get_contents("php://input");
        $expl = explode('=', $data);
        $body = $expl[1];
        $response = $this->pipRestClient->doDelete(
                $this->apiDelete, array(), array(), $body
        );
        echo $this->Form->SaveUpdateNotifJson(
                IApplicationConstant::SUN_DELETE, json_decode($response->getBody)
        );
    }

}
