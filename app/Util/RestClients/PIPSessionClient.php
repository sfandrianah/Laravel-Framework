<?php

/**
 * @project pip.
 * @since 9/1/2016 1:26 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\RestClients;


use App\ConstantValues\IApplicationConstant;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class PIPSessionClient implements ISessionClient
{

    private $currentSession;

    public function getRefreshedToken()
    {
        /*$currentSession = Session::get(IApplicationConstant::SESSION_USER);*/

        $this->currentSession = $_SESSION[IApplicationConstant::SESSION_USER];
//        Log::info('current session '. \Carbon\Carbon::now());
//        Log::info($this->currentSession);

        return $this->currentSession;
    }
}