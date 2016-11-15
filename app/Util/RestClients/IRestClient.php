<?php
/**
 * @project pip.
 * @since 8/31/2016 5:51 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\RestClients;


interface IRestClient
{

    public function doGET($p_TargetURL);

    public function doGETWithHeader($p_TargetURL, $p_Header);

    public function doPOST($p_TargetURL);

    public function doPOSTWithHeader($p_TargetURL, $p_Header);

    public function doPOSTWithBody($p_TargetURL, array $p_Body);
    
    public function failGetBearer();
    
    public function setSessionFromBearer($bearer);

    /**
     * @param $p_TargetURL
     * @param array $p_Body
     * @param $associated true or null
     * @return mixed
     */
    public function doPOSTWithJSONBody($p_TargetURL, array $p_Body, $associated);

    public function doPUTWithBody($p_TargetURL, array $p_Body);

}