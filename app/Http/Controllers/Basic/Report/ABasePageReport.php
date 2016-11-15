<?php

/**
 * @project pip.
 * @since 9/15/2016 4:05 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Basic\Report;


use App\Http\Controllers\Basic\Page\ABasePageController;
use App\Util\Reports\PIPReport;
use Illuminate\Support\Facades\View;

abstract class ABasePageReport extends ABasePageController implements IReportPage
{
    protected  $pipReport;

    /**
     * ABasePageUploader constructor.
     */
    public function __construct()
    {
        $this->pipReport = new PIPReport();
    }

    public function index(){
        $pageBreadCrumb = $this->pageBreadCrumb;
        $lastPageBreadCrumb = $this->lastPageBreadCrumb;
        return View::make(
            $this->getIndexPage(),
            compact('pageBreadCrumb', 'lastPageBreadCrumb')
        );
    }

    public function reportPDF()
    {
        return $this->pipReport->reportPDF();
    }

    public function reportExcel5()
    {
        return $this->pipReport->reportExcel5();
    }

    public function reportExcel7()
    {
        return $this->pipReport->reportExcel7();
    }

    public function reportCSV()
    {
        return $this->pipReport->reportCSV();
    }

    /**
     * @return PIPReport
     */
    public function getPipReport()
    {
        return $this->pipReport;
    }


}