<?php
/**
 * @project pip.
 * @since 8/31/2016 6:30 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\RestClients;


interface ICookieClient
{

    public function getRefreshedToken();
}