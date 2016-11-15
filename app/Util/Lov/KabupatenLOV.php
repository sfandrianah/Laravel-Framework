<?php

/**
 * @project pip.
 * @since 8/31/2016 3:23 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\util\Lov;


use App\ConstantValues\IApplicationConstant;
use App\Http\util\Lov\ABaseLOV;
use Ixudra\Curl\Facades\Curl;

class KabupatenLOV extends ABaseLOV
{

    public function populateData()
    {
        $targetUrl = env('PIP_URL_REST') . 'kabupaten/select/all';
        $response = Curl::to($targetUrl)
            ->withHeader(IApplicationConstant::AUTHORIZATION.IApplicationConstant::COLON.$encrypted)
            ->post();

        $resp = json_decode($response, true);
    }
}