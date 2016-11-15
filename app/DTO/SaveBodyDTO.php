<?php

/**
 * @project pip.
 * @since 9/8/2016 6:15 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\DTO;


use App\ConstantValues\IApplicationConstant;

class SaveBodyDTO
{

    public function getInstance(){
        return $body = array(
            IApplicationConstant::CODE => $_POST[IApplicationConstant::CODE],
            IApplicationConstant::NAME => $_POST[IApplicationConstant::NAME]
        );
    }
}