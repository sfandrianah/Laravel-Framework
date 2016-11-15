<?php

/**
 * @project pip.
 * @since 8/23/2016 1:38 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Pages\Lembaga;

use App\ConstantValues\IApplicationConstant;
use App\ConstantValues\PageURLConstant;
use App\Http\Controllers\Basic\Scaffolding\ABaseScaffolding;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use App\Util\RestClients\PIPRestClient;

class ApprovalRegistrasiLembagaController extends ABaseScaffolding {

    /**
     * ControllerDashboard constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$HOME];
        $this->lastPageBreadCrumb = PageURLConstant::$APPROVAL_REGISTRASI_LEMBAGA;

        $this->filterType = IApplicationConstant::HARDCORE_PAGINATION;
        if (isset($_POST[IApplicationConstant::FILTER_VALUE])) {
            $this->filterBody = array(
                IApplicationConstant::ITEM_NUMBER => $this->getDefaultItemNumber(),
                IApplicationConstant::FILTER_DATA => [
                    array(
                        IApplicationConstant::FILTER_KEY => 'approval_status',
                        IApplicationConstant::FILTER_VALUE => '0',
                    ), 
                    array(
                        IApplicationConstant::FILTER_KEY => $this->getDefaultFilterKey(),
                        IApplicationConstant::FILTER_VALUE => $_POST[IApplicationConstant::FILTER_VALUE],
                    )
                ],
                IApplicationConstant::SORTING_KEY => $this->getDefaultSortingKey(),
                IApplicationConstant::SORTING_DIRECTION => $this->getDefaultSortingDirection()
            );
        } else {
            $this->filterBody = array(
                IApplicationConstant::ITEM_NUMBER => $this->getDefaultItemNumber(),
                IApplicationConstant::FILTER_DATA => [
                    array(
                        IApplicationConstant::FILTER_KEY => 'approval_status',
                        IApplicationConstant::FILTER_VALUE => '0',
                    )
                ],
                IApplicationConstant::SORTING_KEY => $this->getDefaultSortingKey(),
                IApplicationConstant::SORTING_DIRECTION => $this->getDefaultSortingDirection()
            );
        }
        Log::info(json_encode($this->filterBody));

        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_PROVINCE_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_PROVINCE_EDIT;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_APPROVAL_REGISTRASI_LEMBAGA_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MASTER_PROVINCE_DELETE;
    }

    public function getIndexPage() {
        return IApplicationConstant::APPROVAL_REGISTRASI_LEMBAGA_INDEX_PAGE;
    }

    public function getNewPage() {
        return IApplicationConstant::APPROVAL_REGISTRASI_LEMBAGA_NEW_PAGE;
    }

    public function getEditPage() {
        return IApplicationConstant::MASTER_PROVINSI_EDIT_PAGE;
    }

    public function getListPage() {
        return IApplicationConstant::APPROVAL_REGISTRASI_LEMBAGA_LIST_PAGE;
    }

    public function approve() {
        $rs = new PIPRestClient();
        $url = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_APPROVAL_REGISTRASI_LEMBAGA_APPROVE;

        $body_ = $_POST[IApplicationConstant::ID];
        $body = explode(",", rtrim($body_, ','));
        $response = $rs->doPOST(
                $url, array(), array(), $body
        );
        echo $this->Form->SaveUpdateNotifJson(
                trans('pip.update'), json_decode($response->getBody)
        );
    }

    public function reject() {
        $rs = new PIPRestClient();
        $url = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_APPROVAL_REGISTRASI_LEMBAGA_REJECT;

        $body_ = $_POST[IApplicationConstant::ID];
        $body = explode(",", rtrim($body_, ','));
        $response = $rs->doPOST(
                $url, array(), array(), $body
        );
        echo $this->Form->SaveUpdateNotifJson(
                trans('pip.update'), json_decode($response->getBody)
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
