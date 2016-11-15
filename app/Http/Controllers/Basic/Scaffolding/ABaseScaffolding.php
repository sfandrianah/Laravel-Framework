<?php

/**
 * @project pip.
 * @since 8/23/2016 1:38 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Basic\Scaffolding;

use App\ConstantValues\IApplicationConstant;
use App\Http\Controllers\Basic\Page\ABasePageController;
use App\Util\DataTable;
use App\Util\Form;
use App\Util\RestClients\PIPRestClient;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

abstract class ABaseScaffolding extends ABasePageController implements IScaffolding {

    protected $apiEdit;
    protected $apiFindByCode;
    protected $apiList;
    protected $apiDelete;
    protected $apiInsert;
    protected $Form;
    protected $pipRestClient;
    protected $DTable;
    protected $value;
    protected $filterType;
    protected $filterBody;
    protected $itemNumber;
    protected $filterKey = null;
    protected $filterValue = null;
    protected $sortingKey = null;
    protected $sortingDirection = null;

    /**
     * ABaseScaffolding constructor.
     */
    public function __construct() {
        $this->Form = new Form();
        $this->pipRestClient = new PIPRestClient();
        $this->DTable = new DataTable();
    }

    public function index() {
        if (isset($_GET[IApplicationConstant::CONTROL_INDEX_PAGE])) {
            switch ($_GET[IApplicationConstant::CONTROL_INDEX_PAGE]) {
                case IApplicationConstant::CONTROL_INDEX_NEW:
                    return $this->getNewView();
                    break;
                case IApplicationConstant::CONTROL_INDEX_EDIT:
                    $body = $_POST[IApplicationConstant::ID];
                    $rest = $this->pipRestClient->doPOST(
                            $this->apiFindByCode, array(), array(), $body
                    );
                    $this->setValue(json_decode($rest->getBody));
                    return $this->getEditView();
                    break;
                case IApplicationConstant::CONTROL_INDEX_LIST:
                    if ($this->filterKey == null) {
                        $this->filterKey = $this->getDefaultFilterKey();
                        $this->DTable->setFilter($this->filterKey);
                    } else {
                        $this->DTable->setFilter($this->filterKey);
                    }

                    if ($this->filterValue == null) {
                        $this->filterValue = $this->getDefaultFilterValue();
                    } else {
                        $this->DTable->setFilter_value($this->filterValue);
                    }

                    if ($this->sortingKey == null) {
                        $this->sortingKey = $this->getDefaultSortingKey();
                    } else {
                        $this->DTable->setSortingKey($this->sortingKey);
                    }

                    if ($this->sortingDirection == null) {
                        $this->sortingDirection = $this->getDefaultSortingDirection();
                    } else {
                        $this->DTable->setSortingDirection($this->sortingDirection);
                    }

                    if ($this->itemNumber == null) {
                        $this->itemNumber = $this->getDefaultItemNumber();
                    } else {
                        $this->DTable->setFormCount($this->itemNumber);
                    }
                    if ($this->filterType == IApplicationConstant::HARDCORE_PAGINATION) {
                        

                        $url = $this->apiList;
                        $urls = $this->apiList;
                    } else {
                        if (!isset($_POST[IApplicationConstant::FILTER_VALUE])) {
                            $this->filterBody = array(
                                IApplicationConstant::ITEM_NUMBER => $this->itemNumber,
                                IApplicationConstant::FILTER_KEY => $this->filterKey,
                                IApplicationConstant::FILTER_VALUE => $this->filterValue,
                                IApplicationConstant::SORTING_KEY => $this->sortingKey,
                                IApplicationConstant::SORTING_DIRECTION => $this->sortingDirection
                            );
                            $url = $this->apiList;
                            $urls = $this->apiList;
                        } else {
                            $this->filterBody = array(
                                IApplicationConstant::ITEM_NUMBER => $_POST[IApplicationConstant::ITEM_NUMBER],
                                IApplicationConstant::FILTER_KEY => $_POST[IApplicationConstant::FILTER],
                                IApplicationConstant::FILTER_VALUE => $_POST[IApplicationConstant::FILTER_VALUE],
                                IApplicationConstant::SORTING_KEY => $_POST[IApplicationConstant::SORTING_KEY],
                                IApplicationConstant::SORTING_DIRECTION => $_POST[IApplicationConstant::SORTING_DIRECTION]
                            );
                            $url = $_POST['page'];
                            $urls = $_POST['page_url_pagination'];
                        }
                    }
                    Log::info('masuk base : '.json_encode($this->filterBody));
                    $rs_url = $this->pipRestClient->doPOST(
                            $url, array(), array(), $this->filterBody
                    );
                    $this->DTable->setPageUrl($urls);
                    $this->DTable->setJson($rs_url->getBody);
                    return $this->getListView();
                    break;
                default:
                    return $this->getIndexView();
                    break;
            }
        } else {
            return $this->getIndexView();
        }
    }

    public function filterData() {
        
    }

    public function save() {
        $this->getSaveBody();
        $response = $this->pipRestClient->doPOST(
                $this->apiInsert, array(), array(), $this->getSaveBody()
        );
        echo $this->Form->SaveUpdateNotifJson(
                trans('pip.save'), json_decode($response->getBody)
        );
    }

    public function update() {
        $response = $this->pipRestClient->doPut(
                $this->apiEdit, array(), array(), $this->getUpdateBody()
        );
        echo $this->Form->SaveUpdateNotifJson(
                trans('pip.update'), json_decode($response->getBody)
        );
    }

    function delete() {
        $data = file_get_contents("php://input");
        Log::info($data);
        $expl = explode('=', $data);
        $body = $expl[1];
        $response = $this->pipRestClient->doDelete(
                $this->apiDelete, array(), array(), $body
        );
        echo $this->Form->SaveUpdateNotifJson(
                trans('pip.delete'), json_decode($response->getBody)
        );
    }

    /**
     * @param mixed $value
     */
    public function setValue($value) {
        $this->value = $value;
    }

    public function getIndexView() {
        $pageHeading = $this->pageHeading;
        $pageContent = $this->pageContent;
        $pageBreadCrumb = $this->pageBreadCrumb;
        $lastPageBreadCrumb = $this->lastPageBreadCrumb;
        return View::make(
                        $this->getIndexPage(), compact(
                                'pageHeading', 'pageContent', 'pageBreadCrumb', 'lastPageBreadCrumb'
                        )
        );
    }

    public function getNewView() {
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        return View::make(
                        $this->getNewPage(), compact(
                                'pageHeading', 'Form'
                        )
        );
    }

    public function getEditView() {
        $pageHeading = $this->pageHeading;
        $Form = $this->Form;
        $value = $this->value;
        return View::make(
                        $this->getEditPage(), compact(
                                'pageHeading', 'Form', 'value'
                        )
        );
    }

    public function getListView() {
        $pageHeading = $this->pageHeading;
        $pageContent = $this->pageContent;
        $pageBreadCrumb = $this->pageBreadCrumb;
        $lastPageBreadCrumb = $this->lastPageBreadCrumb;
        $DTable = $this->DTable;
        return View::make(
                        $this->getListPage(), compact(
                                'pageHeading', 'pageContent', 'pageBreadCrumb', 'lastPageBreadCrumb', 'DTable'
                        )
        );
    }

    public function getSaveBody() {
        return $body = array(
            IApplicationConstant::CODE => $_POST[IApplicationConstant::CODE],
            IApplicationConstant::NAME => $_POST[IApplicationConstant::NAME],
            IApplicationConstant::DESCRIPTION => $_POST[IApplicationConstant::DESCRIPTION]
        );
    }

    public function getUpdateBody() {
        return $body = array(
            IApplicationConstant::CODE => $_POST[IApplicationConstant::CODE],
            IApplicationConstant::NAME => $_POST[IApplicationConstant::NAME],
            IApplicationConstant::DESCRIPTION => $_POST[IApplicationConstant::DESCRIPTION],
            IApplicationConstant::ID => $_POST[IApplicationConstant::ID]);
    }

    public function getDefaultFilterKey() {
        return env(IApplicationConstant::PIP_PAGINATION_FILTER_KEY);
    }

    public function getDefaultFilterValue() {
        return env(IApplicationConstant::PIP_PAGINATION_FILTER_VALUE);
    }

    public function getDefaultSortingKey() {
        return env(IApplicationConstant::PIP_PAGINATION_SORTING_KEY);
    }

    public function getDefaultSortingDirection() {
        return env(IApplicationConstant::PIP_PAGINATION_SORTING_DIRECTION);
    }

    public function getDefaultItemNumber() {
        return env(IApplicationConstant::PIP_PAGINATION_ITEM_NUMBER);
    }

}
