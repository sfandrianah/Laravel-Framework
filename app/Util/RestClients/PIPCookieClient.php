<?php

/**
 * @project pip.
 * @since 8/31/2016 6:31 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\RestClients;


use Illuminate\Support\Facades\Cookie;

class PIPCookieClient implements ICookieClient
{

    public function getRefreshedToken()
    {
        $refreshedToken = Cookie::get('XSRF-TOKEN');
        if ($refreshedToken != null){
            return $refreshedToken;
        }else{
            return null;
        }
    }
}