<?php

/**
 * @project pip.
 * @since 8/23/2016 1:38 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Pages\Security;

use App\ConstantValues\IApplicationConstant;
use App\ConstantValues\PageURLConstant;
use App\Http\Controllers\Basic\Scaffolding\ABaseScaffolding;
use Illuminate\Support\Facades\View;

class SecurityGroupController extends ABaseScaffolding {

    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$SECURITY];
        $this->lastPageBreadCrumb = PageURLConstant::$GROUP;

        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_GROUP_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_GROUP_EDIT;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_GROUP_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_GROUP_DELETE;
        $this->apiInsert = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_GROUP_INSERT;
    }

    public function getIndexPage(){
        return IApplicationConstant::SECURITY_GROUP_INDEX_PAGE;
    }

    public function getNewPage(){
        return IApplicationConstant::SECURITY_GROUP_NEW_PAGE;
    }

    public function getEditPage(){
        return IApplicationConstant::SECURITY_GROUP_EDIT_PAGE;
    }

    public function getListPage(){
        return IApplicationConstant::SECURITY_GROUP_LIST_PAGE;
    }

    public function getNewView() {
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $branchLOV = json_decode($this->pipRestClient->doGET(
            env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_BRANCH_LOV, array()
        )->getBody);
        return View::make(
            $this->getNewPage(), compact(
                'pageHeading', 'Form', 'branchLOV'
            )
        );
    }

    public function getEditView(){
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $value = $this->value;
        $branchLOV = json_decode($this->pipRestClient->doGET(
            env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_BRANCH_LOV, array()
        )->getBody);
        return View::make(
            $this->getEditPage(),
            compact(
                'pageHeading', 'Form', 'value', 'branchLOV'
            )
        );
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
