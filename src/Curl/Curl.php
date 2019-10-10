<?php

namespace BNI;

class Curl {
    static $method;
    static $ch;
    static $baseUrl;

    public function bindArray($arrays, $prefix) {
        foreach ($arrays as $a) {
            foreach($a as $key => $value) {
                $result[] = $key.$prefix.$value;
            }
        }
        return $result;
    }

    public function get() {
        self::$ch = curl_init();
        self::$method = "GET";
        return new Curl;
    }
    public function post() {
        self::$ch = curl_init();
        self::$method = "POST";
        return new Curl;
    }
    public function url($url) {
        self::$baseUrl = $url;
        if(self::$method == "POST") {
            curl_setopt(self::$ch, CURLOPT_URL, $url);
        }
        return new Curl;
    }
    public function parameter($params) {
        $params = $this->bindArray($params, "=");
        $p = "";
        $i = 0;
        foreach($params as $param) {
            if($i++ == count($params) - 1) {
                $p .= $param;
            }else {
                $p .= $param."&";
            }
        }
        self::$baseUrl .= "?".$p;
        curl_setopt(self::$ch, CURLOPT_URL, self::$baseUrl);
        return new Curl;
    }
    public function header($param) {
        $params = $this->bindArray($param, ":");
        curl_setopt(self::$ch, CURLOPT_HTTPHEADER, $params);
        return new Curl;
    }
    public function body($param) {
        if(self::$method == "POST") {
            curl_setopt(self::$ch, CURLOPT_POST, 1);
        }
        curl_setopt(self::$ch, CURLOPT_POSTFIELDS, $param);
        return new Curl;
    }
    public function timeout($param) {
        curl_setopt(self::$ch, CURLOPT_TIMEOUT, $param);

        return new Curl;
    }
    public function options($optName, $optValue) {
        curl_setopt(self::$ch, $optName, $optValue);
        return new Curl;
    }
    public function eksekusi() {
        $res = curl_exec(self::$ch);
        curl_close(self::$ch);
		return $res;
    }
}
