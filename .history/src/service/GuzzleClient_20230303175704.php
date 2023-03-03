<?php

namespace App\service;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;

class GuzzleClient implements ClientInterface
{
    private Client $client;

    public function __construct(array $config = [])
    {
        $this->client = new Client($config);
    }

    public function sendRequest(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\ResponseInterface
    {
        return $this->client->send($request);
    }
}
