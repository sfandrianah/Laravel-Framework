<?php

/**
 * @project pip.
 * @since 8/23/2016 1:38 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Basic\Page;

use App\Http\Controllers\Basic\Scaffolding\ABaseScaffolding;
//use Ixudra\Curl\Facades\Curl;
use App\Http\Controllers\Controller;
use App\Util\DataTable;
use App\Util\RestClients\PIPRestClient;

class PaginationController extends ABasePageController {

    public function index() {
        $DTable = new DataTable();
        $pip_rest_client = new PIPRestClient();
        $filter_value = '';
        if($_POST['fSearch'] == 'show'){
            $filter_value = $_POST['filter_value'];
        }
        $record = '5';
        if($_POST['fRecord'] == 'show'){
            $record = $_POST['item_number'];
        }
        $body = array(
            'item_number' => $record,
            'filter_key' => $_POST['filter'],
            'filter_value' => $filter_value,
            'sorting_key' => 'code',
            'sorting_direction' => 'asc'
        );
        
        $rs_url = $pip_rest_client->doPOST($_POST['page'], array(), array(), $body);
//        $rs_url = $rs_url2->doGET($_GET['page']);
//        $rs_url = Curl::to($_GET['page'])->get();
        $DTable->setPageUrl($_POST['page_url_pagination']);
        $DTable->setFilter($_POST['filter']);
        $DTable->setFilter_value($filter_value);
        $DTable->setFormCount($_POST['fCount']);
        $DTable->setFormPaginationNumber($_POST['fPaginationNumber']);
        $DTable->setFormRecord($_POST['fRecord']);
        $DTable->setFormSearch($_POST['fSearch']);
//        print_r($rs_url);
        $DTable->setJson($rs_url->getBody);
        $DTable->setDeleteById($_POST['id_delete']);
        $DTable->setEditById($_POST['id_edit']);
        
        $mstr = explode(",", $_POST['field']);
        $a = array();
        foreach ($mstr as $nstr) {
            $narr = explode("=>", $nstr);
            $narr[0] = str_replace("\x98", "", $narr[0]);
            $ytr[1] = $narr[1];
            $a[$narr[0]] = $ytr[1];
        }
        $DTable->set($_POST['header_title'], $a);
        echo $DTable->show();
    }

    public function getIndexPage()
    {
        // TODO: Implement getIndexPage() method.
    }
}
