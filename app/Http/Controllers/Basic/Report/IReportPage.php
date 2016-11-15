<?php
/**
 * @project pip.
 * @since 9/15/2016 4:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Basic\Report;


interface IReportPage
{

    public function reportPDF();

    public function reportExcel5();

    public function reportExcel7();

    public function reportCSV();

}