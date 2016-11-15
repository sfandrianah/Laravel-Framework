<?php

/**
 * @project pip.
 * @since 9/19/2016 3:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Pages\Security;


use App\ConstantValues\IApplicationConstant;
use App\ConstantValues\PageURLConstant;
use App\Http\Controllers\Basic\Scaffolding\ABaseScaffolding;
use App\Util\CodeGenerator;
use Illuminate\Support\Facades\View;

class SecurityUserController extends ABaseScaffolding
{

    private $rawPassword;

    public function __construct() {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$SECURITY];
        $this->lastPageBreadCrumb = PageURLConstant::$USER;

        /*SETUP APIs*/
        $this->apiFindByCode = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_USER_FIND_BY_CODE;
        $this->apiEdit = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_USER_EDIT;
        $this->apiList = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_USER_LIST;
        $this->apiDelete = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_USER_DELETE;
        $this->apiInsert = env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_USER_INSERT;

        /*SETUP PAGINATION VARIABLES FOR SECURITY USER*/
        $this->filterKey = IApplicationConstant::USER_CODE;
        $this->sortingKey = IApplicationConstant::USER_CODE;
    }

    public function getIndexPage()
    {
        return IApplicationConstant::SECURITY_USER_INDEX_PAGE;
    }

    public function getNewPage()
    {
        return IApplicationConstant::SECURITY_USER_NEW_PAGE;
    }

    public function getEditPage()
    {
        return IApplicationConstant::SECURITY_USER_EDIT_PAGE;
    }

    public function getListPage()
    {
        return IApplicationConstant::SECURITY_USER_LIST_PAGE;
    }

    public function getNewView(){
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $securityGroupLOV = json_decode($this->pipRestClient->doGET(
            env(IApplicationConstant::PIP_URL_REST).IApplicationConstant::API_SECURITY_GROUP_LOV, array()
        )->getBody);
        return View::make(
            $this->getNewPage(),
            compact(
                'pageHeading', 'Form', 'securityGroupLOV'
            )
        );
    }

    public function getSaveBody() {
        $codeGenerator = new CodeGenerator();
        $this->rawPassword = $codeGenerator->generate(6, null);
        $hashedPassword = bcrypt($this->rawPassword);
        return $body = array(
            IApplicationConstant::USER_CODE => $_POST[IApplicationConstant::USER_CODE],
            IApplicationConstant::VALIDATION_KEY_PASSWORD => $hashedPassword,
            IApplicationConstant::GROUP_ID => $_POST[IApplicationConstant::GROUP_ID],
            IApplicationConstant::EXPIRED_DATE => $_POST[IApplicationConstant::EXPIRED_DATE],
            IApplicationConstant::DESCRIPTION => $_POST[IApplicationConstant::DESCRIPTION]
        );
    }

    public function save(){
        parent::save();
        echo $this->Form->SaveUpdateNotifJson(
            trans('pip.new.created.password').$this->rawPassword, 2
        );
    }
}