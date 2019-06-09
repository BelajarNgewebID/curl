<?php

namespace BNI;

class Curl {
    public function init() {
        global $ch;
        $ch = curl_init();
        return new Curl;
    }
    public function setUrl($url) {
        global $ch;
        curl_setopt($ch, CURLOPT_URL, $url);
        return new Curl;
    }
    public function setHeader($param) {
        global $ch;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $param);
        return new Curl;
    }
    public function setBody($param) {
        global $ch;
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        return new Curl;
    }
    public function setOpt($optName, $optValue) {
        global $ch;
        curl_setopt($ch, $optName, $optValue);
        return new Curl;
    }
    public function eksekusi() {
        global $ch;
        $res = curl_exec($ch);
        curl_close($ch);
		return $res;
    }
}
