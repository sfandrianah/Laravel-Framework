<?php

/**
 * @project pip.
 * @since 8/31/2016 5:50 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Util\RestClients;

use App\ConstantValues\IApplicationConstant;
use Illuminate\Support\Facades\Log;
use Ixudra\Curl\Facades\Curl;
use App\Util\RestClient;
use Illuminate\Support\Facades\Session;

class PIPRestClient implements IRestClient {

    public $token;
    public $sessionClient;

    /**
     * PIPRestClient constructor.
     */
    public function __construct() {
        $this->sessionClient = new PIPSessionClient();
    }

    public function queryParamURL($p_TargetURL) {
        $parts = parse_url($p_TargetURL);
        $merge_array_key = array();
        if (isset($parts['query'])) {
//            print_r($parts['query']);
            $a = explode('&', $parts['query']);
            foreach ($a as $result) {
                $b = explode('=', $result);
                $array[$b[0]] = $b[1];
            }

            $merge_array_key = array_merge($merge_array_key, $array);
        }
        return $merge_array_key;
    }

    public function doGET($p_TargetURL, $param = array()) {
        $merge_array_key = $this->queryParamURL($p_TargetURL);
        $page_url = strtok($p_TargetURL, '?');
        $this->getRefreshedToken();
        $merge_param = array_merge($this->token, $param, $merge_array_key);
        $rs_url = new RestClient();
        $response = $rs_url->to($page_url)
                ->setParam($merge_param)
                ->get();
        if (isset(json_decode($response->getHeader)->Authorization)) {
            $this->setSessionFromBearer(json_decode($response->getHeader)->Authorization);
        } else {
            $this->failGetBearer();
        }
        Log::info('Do Get menu');
        return $response;
    }

    public function failGetBearer() {
        /* Session::forget(IApplicationConstant::SESSION_USER);
          Session::flush(); */
        session_destroy();
        return \Redirect::to(IApplicationConstant::URL_LOGIN)->send();
    }

    public function setSessionFromBearer($bearer) {
//        echo $bearer;
        $this->getRefreshedToken();
        $value = explode(' ', $bearer);

        if ($value != null) {
            $user = Array(
                IApplicationConstant::TOKEN => $value[1],
                IApplicationConstant::USER_CODE => $this->token[IApplicationConstant::USER_CODE]);
            //Session::put(IApplicationConstant::SESSION_USER, $user);
            $_SESSION[IApplicationConstant::SESSION_USER] = $user;
        } else {
            return \Redirect::to(IApplicationConstant::URL_LOGIN)->send();
        }
    }

    public function doGETWithHeader($p_TargetURL, $p_Header) {
        $this->getRefreshedToken();
        $response = Curl::to($p_TargetURL)
                ->withData(array(IApplicationConstant::TOKEN => $this->token))
                ->withHeader($p_Header)
                ->get();
        return $response;
    }

    public function doPOSTLogin($p_TargetURL, $user_code, $header = array()) {
        session_start();
//        $merge_array_key = $this->queryParamURL($p_TargetURL);
        $page_url = strtok($p_TargetURL, '?');
//        $this->getRefreshedToken();
//        $merge_param = array_merge($merge_array_key);
        $rs_url = new RestClient();
        $response = $rs_url->to($page_url)
                ->setHeader($header)
                ->post();
        if (isset(json_decode($response->getBody)->token)) {
            $this->setSessionFromLogin(json_decode($response->getBody), $user_code);
        } else {
            $this->failGetBearer();
        }
        Log::info('Do POST');
        return $response;
    }

    public function setSessionFromLogin($token, $user_code) {

        if (property_exists($token, 'error')) {
            $this->failGetBearer();
        } else {
            $user = Array(
                IApplicationConstant::TOKEN => $token->token,
                IApplicationConstant::USER_CODE => $user_code);
//            Log::info('user:' . $user_code . '; token:' . $token->token);
            //Session::put(IApplicationConstant::SESSION_USER, $user);
            $_SESSION[IApplicationConstant::SESSION_USER] = $user;
        }
    }

    public function doPOST($p_TargetURL, $param = array(), $header = array(), $body = array()) {
        $merge_array_key = $this->queryParamURL($p_TargetURL);
        $page_url = strtok($p_TargetURL, '?');
        $this->getRefreshedToken();
        $merge_param = array_merge($this->token, $param, $merge_array_key);

        $rs_url = new RestClient();
        $response = $rs_url->to($page_url)
                ->setParam($merge_param)
                ->setHeader($header)
                ->setBody($body)
                ->post();
        if (isset(json_decode($response->getHeader)->Authorization)) {
            $this->setSessionFromBearer(json_decode($response->getHeader)->Authorization);
        } else {
            $this->failGetBearer();
        }
        Log::info('Do POST');
        return $response;
    }

    public function doDelete($p_TargetURL, $param = array(), $header = array(), $body = array()) {
        $merge_array_key = $this->queryParamURL($p_TargetURL);
        $page_url = strtok($p_TargetURL, '?');
        $this->getRefreshedToken();
        $merge_param = array_merge($this->token, $param, $merge_array_key);

        $rs_url = new RestClient();
        $response = $rs_url->to($page_url)
                ->setParam($merge_param)
                ->setHeader($header)
                ->setBody($body)
                ->delete();
        if (isset(json_decode($response->getHeader)->Authorization)) {
//            print_r(json_decode($response->getHeader));
            $this->setSessionFromBearer(json_decode($response->getHeader)->Authorization);
        } else {
            $this->failGetBearer();
        }
        Log::info('Do DELETE');
        return $response;
    }

    public function doPut($p_TargetURL, $param = array(), $header = array(), $body = array()) {
        $merge_array_key = $this->queryParamURL($p_TargetURL);
        $page_url = strtok($p_TargetURL, '?');
        $this->getRefreshedToken();
        $merge_param = array_merge($this->token, $param, $merge_array_key);

        $rs_url = new RestClient();
        $response = $rs_url->to($page_url)
                ->setParam($merge_param)
                ->setHeader($header)
                ->setBody($body)
                ->put();
        if (isset(json_decode($response->getHeader)->Authorization)) {
            $this->setSessionFromBearer(json_decode($response->getHeader)->Authorization);
        } else {
            $this->failGetBearer();
        }
        Log::info('Do PUT');
        return $response;
    }

    public function doPOSTWithHeader($p_TargetURL, $p_Header) {
        $this->getRefreshedToken();
        $response = Curl::to($p_TargetURL)
                ->withData(array(IApplicationConstant::TOKEN => $this->token))
                ->withHeader($p_Header)
                ->post();
        return $response;
    }

    public function doPOSTWithBody($p_TargetURL, array $p_Body) {
        $this->getRefreshedToken();
        $response = Curl::to($p_TargetURL)
                ->withData(array(IApplicationConstant::TOKEN => $this->token))
                ->withData($p_Body)
                ->post();
        return $response;
    }

    public function doPOSTWithJSONBody($p_TargetURL, array $p_Body, $associated) {
        $this->getRefreshedToken();
        if (is_null($associated)) {
            $response = Curl::to($p_TargetURL)
                    ->withData(array(IApplicationConstant::TOKEN => $this->token))
                    ->withData($p_Body)
                    ->asJson()
                    ->post();
        } else {
            $response = Curl::to($p_TargetURL)
                    ->withData(array(IApplicationConstant::TOKEN => $this->token))
                    ->withData($p_Body)
                    ->asJson($associated)
                    ->post();
        }

        return $response;
    }

    public function doPUTWithBody($p_TargetURL, array $p_Body) {
        $this->getRefreshedToken();
        $response = Curl::to($p_TargetURL)
                ->withData(array(IApplicationConstant::TOKEN => $this->token))
                ->withData($p_Body)
                ->asJson()
                ->post();
        return $response;
    }

    public function getRefreshedToken() {
        $this->token = $this->sessionClient->getRefreshedToken();
    }

}
