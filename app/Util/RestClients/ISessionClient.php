<?php
/**
 * @project pip.
 * @since 9/1/2016 1:25 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\RestClients;


interface ISessionClient
{
    public function getRefreshedToken();
}