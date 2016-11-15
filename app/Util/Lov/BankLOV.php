<?php

/**
 * @package App\Http\Controllers\Lov
 * @since 6/1/2016 - 5:41 AM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */
namespace App\Http\util\Lov;

use App\ConstantValue\IApplicationConstant;
use App\Model\ModelBank;

class BankLOV extends ABaseLOV
{
    public function populateData()
    {
        $data = ModelBank::all(
            [IApplicationConstant::NAME, IApplicationConstant::ID]
        );
        return $data;
    }

}