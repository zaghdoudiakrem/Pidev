<?php
namespace App\service;

use Geocoder\Geocoder;
use Geocoder\Provider\Mapbox\Mapbox;
use Geocoder\Query\GeocodeQuery;
use Psr\Http\Client\ClientInterface;
use GuzzleHttp\Client;





class MapboxGeocoder
{
    private $client;
    private $mapboxApiKey='';
    private $geocoder;
    

    public function __construct(string $mapboxApiKey)
    {
        $this->mapboxApiKey = $mapboxApiKey;
        $this->client = new Client(); // Initialize Guzzle client
        $this->geocoder = new Geocoder(new Mapbox($this->client, $this->mapboxApiKey));
    }
    

    public function geocode(string $address): array
    {
        $result = $this->geocoder->geocodeQuery(GeocodeQuery::create($address));
        return $result->toArray();
    }
}

