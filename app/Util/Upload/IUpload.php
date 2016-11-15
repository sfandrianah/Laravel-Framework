<?php
/**
 * @project pip.
 * @since 9/14/2016 4:09 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\Upload;


interface IUpload
{

    /**
     * process to store image file
     * @param $p_RenameFile
     * @return mixed
     */
    public function storeImage($p_RenameFile);

    /**
     * process to store and read excel file
     * @param $p_RenameFile
     * @return mixed
     */
    public function storeExcel($p_RenameFile);

    /**
     * read and store excel
     * @param $p_RenameFile
     * @return mixed
     */
    public function readAndStoreExcel($p_RenameFile);
}