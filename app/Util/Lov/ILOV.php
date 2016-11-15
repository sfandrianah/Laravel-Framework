<?php
/**
 * @package App\Http\Controllers\Lov
 * @since 4/19/2016 - 5:41 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\util\Lov;


interface ILOV
{
    public function populateData();

    public function generateLOV();

    public function getValue($p_Key);

    public function getKey($p_Value);
}