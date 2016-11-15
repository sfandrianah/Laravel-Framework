<?php

/**
 * @project pip.
 * @since 8/25/2016 2:54 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\Http\Controllers\Pages;

use App\ConstantValues\IApplicationConstant;
use App\Http\Controllers\Controller;
use App\Util\PIPCrypt;
use App\Util\PIPAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Ixudra\Curl\Facades\Curl;
use App\Util\RestClients\PIPRestClient;

class AuthLoginController extends Controller {

    public function doLogin(Request $p_Request) {

        $pip_rest_client = new PIPRestClient();
        $data = $p_Request->all();
        $pipCrypt = new PIPCrypt();
        $encrypted = $pipCrypt->encrypt(
                $data[IApplicationConstant::USER_CODE] .
                IApplicationConstant::COLON .
                $data[IApplicationConstant::VALIDATION_KEY_PASSWORD]
        );

        $url_login = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_LOGIN;
        $rs_url = $pip_rest_client->doPOSTLogin($url_login, $data[IApplicationConstant::USER_CODE], array(IApplicationConstant::AUTHORIZATION . IApplicationConstant::COLON . ' ' . $encrypted));
        try {
          
//            session_start();
            $getKey = key(json_decode($rs_url->getBody));

            if ($getKey == IApplicationConstant::TOKEN) {

                sleep(1);
                $url = env(IApplicationConstant::PIP_URL_REST) . IApplicationConstant::API_MENU;
                $rs_url = $pip_rest_client->doGet($url);

                //Session::put(IApplicationConstant::MENU_COOKIES, $rs_url->getBody);
                $_SESSION[IApplicationConstant::MENU_COOKIES] = $rs_url->getBody;

                return redirect(IApplicationConstant::URL_DASHBOARD);
            } elseif ($getKey == IApplicationConstant::ERROR) {
                return redirect(IApplicationConstant::URL_LOGIN)->with('msg', 'Invalid Username & password');
            }
        } catch (\Exception $e) {
            return redirect(IApplicationConstant::URL_LOGIN)->with('msg', 'connection problem ' . $e->getFile() . ' ' . $e->getLine() . ' ' . $e->getMessage());
        }
    }

    public function doLogout() {
        session_start();
        $pipRestClient = new PIPRestClient();
        $result = $pipRestClient->doGET(env('PIP_URL_REST') . IApplicationConstant::API_LOGOUT);
        try {
            if (key($result) == IApplicationConstant::SUCCESS) {
                /* Session::forget(IApplicationConstant::SESSION_USER);
                  Session::forget(IApplicationConstant::MENU_COOKIES);
                  Session::flush(); */
                session_destroy();
//                return redirect(IApplicationConstant::URL_LOGIN);
                return Redirect::to(IApplicationConstant::URL_LOGIN)->send();
            } else {
                print_r('failed logout');
            }
        } catch (\Exception $e) {
            print_r('failed logout => ' . $e->getMessage());
        }
    }

}
