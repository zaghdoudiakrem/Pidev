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
    private $mapboxApiKey;
    private $geocoder
    

    public function __construct(string $mapboxApiKey)
    {
        
        $client = new GuzzleClient();
        $provider = new MapboxProvider($client, $mapboxApiKey);
        $this->geocoder = new Geocoder($provider);
    }
    

    public function geocode(string $address): array
    {
        $result = $this->geocoder->geocodeQuery(GeocodeQuery::create($address));
        return $result->toArray();
    }
}

