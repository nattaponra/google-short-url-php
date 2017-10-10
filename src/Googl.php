<?php

namespace Googl;

class Googl
{

    private $apiUrl;
    private $apiKey;
    private $client;

    public function __construct($apiKey)
    {
        $this->apiKey  = $apiKey;
        $this->apiUrl  = 'https://www.googleapis.com/urlshortener/v1/url?';
        $isApiKeyFound = ($this->apiKey == null) ? false : true;

        if ($isApiKeyFound) {
            $this->apiUrl .= 'key=' . $this->apiKey . '&';
        }

        $this->client = curl_init();
        curl_setopt($this->client, CURLOPT_URL, $this->apiUrl);
        curl_setopt($this->client, CURLOPT_RETURNTRANSFER, true);
    }

    public function __destruct() {
        curl_close($this->client);
        $this->client = null;
    }

    public function shorten($longUrl) {

        $parameters = array('longUrl' => $longUrl);
        curl_setopt($this->client, CURLOPT_POST, count($parameters));
        curl_setopt($this->client, CURLOPT_POSTFIELDS, json_encode($parameters));
        curl_setopt($this->client, CURLOPT_HTTPHEADER, Array('Content-Type: application/json'));
        return curl_exec($this->client);

    }

    public function expand($shortUrl) {

        curl_setopt($this->client, CURLOPT_HTTPGET, true);
        curl_setopt($this->client, CURLOPT_URL, $this->apiUrl.'shortUrl='.$shortUrl);
        return curl_exec($this->client);
        
    }

    public function lookUpAnalytics($shortUrl){

        curl_setopt($this->client, CURLOPT_HTTPGET, true);
        curl_setopt($this->client, CURLOPT_URL, $this->apiUrl.'shortUrl='.$shortUrl.'&projection=FULL');
        return curl_exec($this->client);

    }


}