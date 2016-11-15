<?php

/**
 * @project pip.
 * @since 9/14/2016 4:45 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Basic\Upload;

use App\Http\Controllers\Basic\Page\ABasePageController;
use App\Util\Upload\PIPUploader;
use Illuminate\Support\Facades\View;

abstract class ABasePageUploader extends ABasePageController implements IUploadPage
{

    protected  $pipUploader;

    /**
     * ABasePageUploader constructor.
     */
    public function __construct()
    {
        $this->pipUploader = new PIPUploader();
    }

    public function index(){
        $pageBreadCrumb = $this->pageBreadCrumb;
        $lastPageBreadCrumb = $this->lastPageBreadCrumb;
        return View::make(
            $this->getIndexPage(),
            compact('pageBreadCrumb', 'lastPageBreadCrumb')
        );
    }

    /**
     * process to store image file
     * @return mixed
     */
    public function storeImage(){}

    /**
     * process to store and read excel file
     * @return mixed
     */
    public function storeExcel(){}

    /**
     * read and store excel
     * @return mixed
     */
    public function readAndStoreExcel(){}

    public abstract function getIndexPage();
}