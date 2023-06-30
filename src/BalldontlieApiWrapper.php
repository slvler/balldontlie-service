<?php

namespace Slvler\BalldontlieLaravel;

use GuzzleHttp\Client;

class BalldontlieApiWrapper
{
    private Client $httpClient;

    public function __construct(array $parameters)
    {
        $this->httpClient = new Client(
            ['base_uri' => $parameters['base_uri']]
        );
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

}
