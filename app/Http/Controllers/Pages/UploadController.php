<?php

/**
 * @project pip.
 * @since 9/14/2016 11:54 AM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Pages;

use App\ConstantValues\PageURLConstant;
use App\Http\Controllers\Basic\Upload\ABasePageUploader;

class UploadController extends ABasePageUploader
{

    /**
     * UploadController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->pageBreadCrumb = [PageURLConstant::$DASHBOARD];
        $this->lastPageBreadCrumb = PageURLConstant::$UPLOAD;
        $this->pipUploader->setIndexPage('upload');
    }


    public function storeImage(){
        return $this->pipUploader->storeImage(null);
    }

    public function storeExcel(){
        return $this->pipUploader->storeExcel(null);
    }

    public function readAndStoreExcel(){
        return $this->pipUploader->readAndStoreExcel(null);
    }

    public function getIndexPage()
    {
        return 'pages\upload';
    }
}