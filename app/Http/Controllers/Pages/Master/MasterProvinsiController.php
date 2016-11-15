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
use App\Util\Form;
use App\Util\RestClients\PIPRestClient;
use App\Util\DataTable;

class MasterProvinsiController extends ABaseScaffolding {

    protected $pageHeading = IApplicationConstant::MASTER_PROVINSI_PAGE_HEADING;

    /**
     * ControllerDashboard constructor.
     */
    public function __construct() {
        $this->pageBreadCrumb = [PageURLConstant::$HOME];
        $this->lastPageBreadCrumb = PageURLConstant::$PROVINCE;
        
    }

    public function index() {
        
        $pageContent = IApplicationConstant::LOREM_IPSUM;
        $pageBreadCrumb = $this->pageBreadCrumb;
        $lastPageBreadCrumb = $this->lastPageBreadCrumb;
        $pageHeading = $this->pageHeading;

        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case 'new':
                    $Form = new Form();
                    return View::make(
                                    IApplicationConstant::MASTER_PROVINSI_NEW_PAGE, compact(
                                            'pageHeading', 'Form'
                                    )
                    );
                    break;
                case 'edit':
                    $pip_rest_client = new PIPRestClient();
                    $value = '';
//                    $body = array('code' => $_POST['id']);
                    $body = $_POST['id'];
                    $rest = $pip_rest_client->doPOST(env('PIP_URL_REST') . '000000/1/130000/130010/command=100008', array(), array(), $body);
                    $value = json_decode($rest->getBody);
                    $Form = new Form();
                    return View::make(
                                    IApplicationConstant::MASTER_PROVINSI_EDIT_PAGE, compact(
                                            'pageHeading', 'Form', 'value'
                                    )
                    );
                    break;
                case 'list':
                    $DTable = new DataTable();
                    $pip_rest_client = new PIPRestClient();
                    $DTable->setFilter('code');
//                    $DTable->setFormSearch('hide');
                    $body = array(
                        'item_number'=>'5', 
                        'filter_key'=>'code', 
                        'filter_value'=>'', 
                        'sorting_key'=>'code', 
                        'sorting_direction'=>'asc'
                        );
                    $url = env('PIP_URL_REST') . '000000/1/130000/130010/command=100010';
                    $rs_url = $pip_rest_client->doPOST($url, array(), array(), $body);
                    //print_r($rs_url);
                    $DTable->setPageUrl($url);
                    $DTable->setJson($rs_url->getBody);
                    return View::make(
                                    IApplicationConstant::MASTER_PROVINSI_LIST_PAGE, compact(
                                            'pageHeading', 'pageContent', 'pageBreadCrumb', 'lastPageBreadCrumb', 'DTable'
                                    )
                    );
                    break;
                default:
                    return View::make(
                                    IApplicationConstant::MASTER_PROVINSI_INDEX_PAGE, compact(
                                            'pageHeading', 'pageContent', 'pageBreadCrumb', 'lastPageBreadCrumb'
                                    )
                    );
                    break;
            }
        } else {
            return View::make(
                            IApplicationConstant::MASTER_PROVINSI_INDEX_PAGE, compact(
                                    'pageHeading', 'pageContent', 'pageBreadCrumb', 'lastPageBreadCrumb'
                            )
            );
        }
    }

    function save() {
        $pip_rest_client = new PIPRestClient();
        $body = array('code' => $_POST['code'],
            'name' => $_POST['name']);
        $response = $pip_rest_client->doPOST(env('PIP_URL_REST') . '000000/1/130000/130010/command=100004', array(), array(), $body);
        $Form = new Form();
        echo $Form->SaveUpdateNotifJson('Save', json_decode($response->getBody));
    }

    function update() {
        $pip_rest_client = new PIPRestClient();
        $body = array('code' => $_POST['code'],
            'name' => $_POST['name'],
            'id' => $_POST['id']);
        $response = $pip_rest_client->doPut(env('PIP_URL_REST') . '000000/1/130000/130010/command=100005', array(), array(), $body);
        $Form = new Form();
        echo $Form->SaveUpdateNotifJson('Update', json_decode($response->getBody));
    }

    function delete() {
        $pip_rest_client = new PIPRestClient();
//        $body = $_POST['id'];
        $data = file_get_contents("php://input");
        $expl = explode('=',$data);
        
//        $decode = json_decode($data);
        $body = $expl[1];
//        print_r($data);
        $response = $pip_rest_client->doDelete(env('PIP_URL_REST') . '000000/1/130000/130010/command=100006', array(), array(), $body);
        $Form = new Form();
        echo $Form->SaveUpdateNotifJson('Delete', json_decode($response->getBody));
    }

}

