<?php
// src/Service/LocaleManager.php

namespace App\Service;

use GuzzleHttp\Client;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class LocaleManager
{
    private $params;
    private $client;

    public function __construct(ParameterBagInterface $params,EntityManagerInterface $entityManager, GeocodingInterface $geocoding)
    )
    {
        $this->params = $params;
        $this->client = new Client();
    }

    public function getCoordinatesByAddress(string $address): array
    {
        $url = sprintf('https://api.mapbox.com/geocoding/v5/mapbox.places/%s.json?access_token=%s', urlencode($address), $this->params->get('mapbox_token'));

        $response = $this->client->get($url);
        $data = json_decode($response->getBody()->getContents(), true);

        if (isset($data['features'][0]['center'])) {
            return $data['features'][0]['center'];
        }

        return [];
    }
}

