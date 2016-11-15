<?php
/**
 * @project pip.
 * @since 9/14/2016 4:09 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Basic\Upload;


interface IUploadPage
{

    /**
     * process to store image file
     * @return mixed
     */
    public function storeImage();

    /**
     * process to store and read excel file
     * @return mixed
     */
    public function storeExcel();

    /**
     * read and store excel
     * @return mixed
     */
    public function readAndStoreExcel();
}