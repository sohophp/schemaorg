<?php

namespace Sohophp\SchemaOrg\Generator;

class HttpResponse
{
    /**
     * @var resource
     */
    private $ch;
    private $url = '';
    private $params = [];
    private $method = 'GET';
    private $error;
    private $response_raw_header;
    private $response_body;
    private $response_http_code;
    private $response_effective_url;

    public function __construct()
    {
        $this->ch = curl_init();
    }

    public function setOpt($name, $value)
    {
        curl_setopt($this->ch, $name, $value);
    }

    public function proxy($host, $port)
    {
        $this->setOpt(CURLOPT_HTTPPROXYTUNNEL, true);
        $this->setOpt(CURLOPT_PROXYAUTH, CURLAUTH_BASIC);
        $this->setOpt(CURLOPT_PROXY, $host);
        $this->setOpt(CURLOPT_PROXYPORT, $port);
        // $this->setOpt(CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        return $this;
    }

    public function get($url, $params = [])
    {
        $this->url = $url;
        $this->params = $params;
        return $this->execute();
    }

    public function execute()
    {
        $ch = $this->ch;

        if ($this->method === 'POST') {
            curl_setopt($this, CURLOPT_URL, $this->url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($this->params));
        } else {
            $url = $this->url;
            if ($this->params) {
                if (strpos($url, '?') > 0) {
                    $this->url .= '&' . http_build_query($this->params);
                } else {
                    $this->url .= '?' . http_build_query($this->params);
                }
            }
            curl_setopt($this->ch, CURLOPT_URL, $this->url);
        }

        $this->setOpt(CURLOPT_MAXREDIRS, 3);//
        curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $response = curl_exec($ch);
        $error = curl_error($ch);
        if ($error != "") {
            $this->error = $error;
        } else {
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $this->response_raw_header = substr($response, 0, $header_size);
            $this->response_body = substr($response, $header_size);
            $this->response_http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $this->response_effective_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        }
        return $this;
    }

    public function error(){
        return !!$this->error;
    }

    public function getResponseRawHeader()
    {
        return $this->response_raw_header;
    }

    public function getResponseBody()
    {
        return $this->response_body;
    }

    public function getResponseHttpCode()
    {
        return $this->response_http_code;
    }

    public function getResponseEffectiveUrl()
    {
        return $this->response_effective_url;
    }
}
