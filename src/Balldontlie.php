<?php

namespace Slvler\BalldontlieLaravel;

use Illuminate\Contracts\Container\Container;
use InvalidArgumentException;


class Balldontlie extends BalldontlieApiWrapper
{

    public function __construct(Container $app)
    {
        parent::__construct(
            [
                'base_uri' =>  $app['config']->get('balldontlie.base_uri')
            ]
        );
    }

    public function players(string $uri): string
    {
        if (empty($uri)) {
            throw new InvalidArgumentException("id is required to see player");
        }

        $response = $this->getHttpClient()->request('GET','players/'.$uri);
        $value =  new HttpResponse($response);
        return $value->getBody();
    }

    public function teams(string $uri): string
    {
        if (empty($uri)) {
            throw new InvalidArgumentException("id is required to see player");
        }

        $response = $this->getHttpClient()->request('GET','teams/'.$uri);
        $value =  new HttpResponse($response);
        return $value->getBody();
    }

    public function games(string $uri): string
    {
        if (empty($uri)) {
            throw new InvalidArgumentException("id is required to see player");
        }

        $response = $this->getHttpClient()->request('GET','games/'.$uri);
        $value =  new HttpResponse($response);
        return $value->getBody();
    }

    public function stats(): string
    {
        $response = $this->getHttpClient()->request('GET','stats');
        $value =  new HttpResponse($response);
        return $value->getBody();
    }
}
