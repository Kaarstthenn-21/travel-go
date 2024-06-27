<?php

namespace App\Services;

use GuzzleHttp\Client;

class IpGeolocationService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = config('services.ipgeolocation.key');
    }

    public function getLocation($ip = null)
{
    $url = "https://api.ipgeolocation.io/ipgeo?apiKey={$this->apiKey}";

    if ($ip) {
        $url .= "&ip={$ip}";
    }

    $response = $this->client->get($url);

    return json_decode($response->getBody(), true);
}
}