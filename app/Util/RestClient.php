<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Util;

class RestClient {

    protected $url;
    protected $curlOptions = array(
        'RETURNTRANSFER' => true,
        'FAILONERROR' => true,
        'FOLLOWLOCATION' => false,
        'CONNECTTIMEOUT' => '',
        'TIMEOUT' => 30,
        'USERAGENT' => '',
        'URL' => '',
        'POST' => false,
        'PARAM_URL' => array(),
        'POST_BODY' => array(),
        'HTTPHEADER' => array(),
    );
    public function __construct() {
        
    }
    public $response, $getHeaderSize, $getHeader, $getBody;

    public function to($url) {
        return $this->setCurlOption('URL', $url);
    }

    public function setHeader($header) {
        return $this->setCurlOption('HTTPHEADER', $header);
    }

    public function setBody($body) {
        return $this->setCurlOption('POST_BODY', $body);
    }

    public function post() {
        $array_http_header = array('Content-Type: application/json', 'Accept: application/json');
        $data_json = json_encode($this->curlOptions['POST_BODY']);
        $ch = curl_init();
        $param_url = '';
        if(!empty($this->curlOptions['PARAM_URL'])){
            $param_url = $this->curlOptions['PARAM_URL'];
        }
        curl_setopt($ch, CURLOPT_URL, $this->curlOptions['URL'].$param_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge($array_http_header, $this->curlOptions['HTTPHEADER']));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
//        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//        curl_setopt($ch, CURLOPT_USERPWD, "$fixusrnm:$fixusrps");
        $response = curl_exec($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $this->getHeaderSize = $header_size;
        $header = substr($response, 0, $header_size);
//        $header2 = explode(":", $header);
        $this->getHeader = json_encode($this->get_headers_from_curl_response($response));
        $body = substr($response, $header_size);
        $this->getBody = $body;
        curl_close($ch);  // Seems like good practice
        return $this->result($response);
    }
    
    public function delete() {
        $array_http_header = array('Content-Type: application/json', 'Accept: application/json');
        $data_json = json_encode($this->curlOptions['POST_BODY']);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->curlOptions['URL'].$this->curlOptions['PARAM_URL']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge($array_http_header, $this->curlOptions['HTTPHEADER']));
//        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
//        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//        curl_setopt($ch, CURLOPT_USERPWD, "$fixusrnm:$fixusrps");
        $response = curl_exec($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $this->getHeaderSize = $header_size;
        $header = substr($response, 0, $header_size);
//        $header2 = explode(":", $header);
        $this->getHeader = json_encode($this->get_headers_from_curl_response($response));
        $body = substr($response, $header_size);
        $this->getBody = $body;
        curl_close($ch);  // Seems like good practice
        return $this->result($response);
    }
    
    public function put() {
        $array_http_header = array('Content-Type: application/json', 'Accept: application/json');
        $data_json = json_encode($this->curlOptions['POST_BODY']);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->curlOptions['URL'].$this->curlOptions['PARAM_URL']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge($array_http_header, $this->curlOptions['HTTPHEADER']));
//        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
//        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//        curl_setopt($ch, CURLOPT_USERPWD, "$fixusrnm:$fixusrps");
        $response = curl_exec($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $this->getHeaderSize = $header_size;
        $header = substr($response, 0, $header_size);
//        $header2 = explode(":", $header);
        $this->getHeader = json_encode($this->get_headers_from_curl_response($response));
        $body = substr($response, $header_size);
        $this->getBody = $body;
        curl_close($ch);  // Seems like good practice
        return $this->result($response);
    }

    public function setParam($param) {
        $final = "?" . http_build_query($param);
        if ($final == "?")
            $final = "";
        
        return $this->setCurlOption('PARAM_URL', $final);
    }

    public function get() {
        $array_http_header = array('Content-Type: application/json', 'Accept: application/json');
//        $data_json = json_encode($this->curlOptions['POST_BODY']);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->curlOptions['URL'].$this->curlOptions['PARAM_URL']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge($array_http_header, $this->curlOptions['HTTPHEADER']));
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        $response = curl_exec($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $this->getHeaderSize = $header_size;
        $header = substr($response, 0, $header_size);
        $header2 = explode(":", $header);
        $this->getHeader = json_encode($this->get_headers_from_curl_response($response));
        $body = substr($response, $header_size);
        $this->getBody = $body;
        curl_close($ch);  // Seems like good practice
        return $this->result($response);
    }

    public function get_headers_from_curl_response($response) {
        $headers = array();

        $header_text = substr($response, 0, strpos($response, "\r\n\r\n"));

        foreach (explode("\r\n", $header_text) as $i => $line)
            if ($i === 0)
                $headers['http_code'] = $line;
            else {
                list ($key, $value) = explode(': ', $line);

                $headers[$key] = $value;
            }

        return $headers;
    }

    protected function result($response) {
        $this->response = $response;
        return $this;
    }

    function sendPostData($url, $data_json) {


//    echo $fixusrnm . ' - ' . $fixusrps;
        $parts = parse_url($url . '&' . $data_json);
        parse_str($parts['query'], $query);
        $fixusrnm = $query['username'];
        $fixusrps = $query['password'];
//    echo $url.'&'.$data_json.'= username'.$query['username'];
        $ch = curl_init();
//    echo rb_json_config;
        curl_setopt($ch, CURLOPT_URL, rb_json_config . $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_USERPWD, "$fixusrnm:$fixusrps");
        $response = curl_exec($ch);
        curl_close($ch);  // Seems like good practice
        return $response;
    }

    protected function setCurlOption($key, $value) {
        $this->curlOptions[$key] = $value;
        return $this;
    }

}
