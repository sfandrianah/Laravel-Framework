<?php

/**
 * @project pip.
 * @since 9/15/2016 3:59 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\Reports;


use App\ConstantValues\IApplicationConstant;
use App\Util\RestClients\PIPRestClient;
use Maatwebsite\Excel\Facades\Excel;

class PIPReport implements  IReport
{

    public $fileName;
    public $sheetName;
    public $pipRestClient;
    public $reportType;
    public $apiDataSimpleReport;

    /**
     * PIPReport constructor.
     */
    public function __construct()
    {
        $this->pipRestClient = new PIPRestClient();
    }


    public function generateSimpleReport()
    {
        try{
            Excel::create($this->getFileName(), function($excel) {
                $excel->sheet($this->getSheetName(), function($sheet) {
                    $sheet->fromArray(
                        $this->getDataSimpleReport(), null, null, false, false
                    );
                });
            })->export($this->reportType);
        }catch (\Exception $e){
            throw $e;
        }
    }

    public function reportPDF()
    {
        $this->reportType = IApplicationConstant::REPORT_PDF;
        $this->generateSimpleReport();
    }

    public function reportExcel5()
    {
        $this->reportType = IApplicationConstant::REPORT_EXCEL_5;
        $this->generateSimpleReport();
    }

    public function reportExcel7()
    {
        $this->reportType = IApplicationConstant::REPORT_EXCEL_2007;
        $this->generateSimpleReport();
    }

    public function reportCSV()
    {
        $this->reportType = IApplicationConstant::REPORT_CSV;
        $this->generateSimpleReport();
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getSheetName()
    {
        return $this->sheetName;
    }

    /**
     * @param mixed $sheetName
     */
    public function setSheetName($sheetName)
    {
        $this->sheetName = $sheetName;
    }

    public function getDataSimpleReport()
    {
        $pipRest = new PIPRestClient();
        return json_decode($pipRest->doGET(
            $this->apiDataSimpleReport, array()
        )->getBody);
    }

    /**
     * @return mixed
     */
    public function getApiDataSimpleReport()
    {
        return $this->apiDataSimpleReport;
    }

    /**
     * @param mixed $apiDataSimpleReport
     */
    public function setApiDataSimpleReport($apiDataSimpleReport)
    {
        $this->apiDataSimpleReport = $apiDataSimpleReport;
    }


}