<?php

/**
 * @project pip.
 * @since 9/14/2016 4:22 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\Upload;

use App\ConstantValues\IApplicationConstant;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class PIPUploader implements IUpload
{

    private $indexPage;

    /**
     * process to store image file
     * @param $p_RenameFile
     * @return mixed
     */
    public function storeImage($p_RenameFile)
    {
        $file = array(IApplicationConstant::IMAGE_FILE => Input::file(IApplicationConstant::IMAGE_FILE));
        $rules = array(
            IApplicationConstant::IMAGE_FILE => IApplicationConstant::VALIDATION_IMAGE
        );

        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            return Redirect::to($this->getIndexPage())->withInput()->withErrors($validator);
        }
        else {
            if (Input::file(IApplicationConstant::IMAGE_FILE)->isValid()) {
                $destinationPath = env(IApplicationConstant::IMAGE_UPLOAD_DIRECTORY);
                $extension = Input::file(IApplicationConstant::IMAGE_FILE)->getClientOriginalExtension();
                if(is_null($p_RenameFile)){
                    $fileName = pathinfo(Input::file(IApplicationConstant::IMAGE_FILE)->getClientOriginalName(), PATHINFO_FILENAME);
                }else{
                    $fileName = $p_RenameFile;
                }
                $fileName = $fileName.IApplicationConstant::DOT.$extension;
                Input::file(IApplicationConstant::IMAGE_FILE)->move($destinationPath, $fileName);

                return IApplicationConstant::SUCCESS_UPLOAD_IMAGE;
            }
            else {
                return IApplicationConstant::ERROR_UPLOAD_FILE_INVALID_EXT;
            }
        }
    }

    /**
     * process to store and read excel file
     * @param $p_RenameFile
     * @return mixed
     */
    public function storeExcel($p_RenameFile)
    {
        $rules = array(
            IApplicationConstant::VALIDATION_KEY_FILE => IApplicationConstant::VALIDATION_EXCEL_FILE
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to($this->getIndexPage())->withInput()->withErrors($validator);
        } else {
            if (Input::file(IApplicationConstant::VALIDATION_KEY_FILE)->isValid()) {
                try {
                    $destinationPath = env(IApplicationConstant::FILE_EXCEL_UPLOAD_DIRECTORY);
                    $extension = Input::file(IApplicationConstant::VALIDATION_KEY_FILE)->getClientOriginalExtension();
                    if(is_null($p_RenameFile)){
                        $fileName = pathinfo(Input::file(IApplicationConstant::VALIDATION_KEY_FILE)->getClientOriginalName(), PATHINFO_FILENAME);
                    }else{
                        $fileName = $p_RenameFile;
                    }
                    $fileName = $fileName.IApplicationConstant::DOT.$extension;
                    Input::file(IApplicationConstant::VALIDATION_KEY_FILE)->move($destinationPath, $fileName);

                    return IApplicationConstant::SUCCESS_UPLOAD_EXCEL;
                } catch (\Exception $e) {
                    return $e->getMessage();
                }
            } else {
                return IApplicationConstant::ERROR_UPLOAD_FILE_INVALID_EXT;
            }
        }
    }

    /**
     * read and store excel
     * @param $p_RenameFile
     * @return mixed
     */
    public function readAndStoreExcel($p_RenameFile)
    {
        $rules = array(
            IApplicationConstant::VALIDATION_KEY_FILE => IApplicationConstant::VALIDATION_EXCEL_FILE
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to($this->getIndexPage())->withInput()->withErrors($validator);
        } else {
            $result [] = null;
            if (Input::file(IApplicationConstant::VALIDATION_KEY_FILE)->isValid()) {
                try {
                    Excel::load(Input::file(IApplicationConstant::VALIDATION_KEY_FILE), function ($reader) {
                        foreach ($reader->toArray() as $row) {
                            $result [] = $row;
                        }
                    });

                    $destinationPath = env(IApplicationConstant::FILE_EXCEL_UPLOAD_DIRECTORY);
                    $extension = Input::file(IApplicationConstant::VALIDATION_KEY_FILE)->getClientOriginalExtension();
                    if(is_null($p_RenameFile)){
                        $fileName = pathinfo(Input::file(IApplicationConstant::VALIDATION_KEY_FILE)->getClientOriginalName(), PATHINFO_FILENAME);
                    }else{
                        $fileName = $p_RenameFile;
                    }
                    $fileName = $fileName.IApplicationConstant::DOT.$extension;
                    Input::file(IApplicationConstant::VALIDATION_KEY_FILE)->move($destinationPath, $fileName);

                    return $result;
                } catch (\Exception $e) {
                    return $e->getMessage();
                }
            } else {
                return IApplicationConstant::ERROR_UPLOAD_FILE_INVALID_EXT;
            }
        }
    }

    /**
     * @return mixed
     */
    public function getIndexPage()
    {
        return $this->indexPage;
    }

    /**
     * @param mixed $indexPage
     */
    public function setIndexPage($indexPage)
    {
        $this->indexPage = $indexPage;
    }


}