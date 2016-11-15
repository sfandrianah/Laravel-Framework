<?php
/**
 * @project pip.
 * @since 9/15/2016 3:58 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\Reports;


interface IReport
{
    public function generateSimpleReport();

    public function getDataSimpleReport();

}