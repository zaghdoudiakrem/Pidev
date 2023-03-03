<?php
namespace App\service;

use Geocoder\Geocoder;
use Geocoder\Provider\Mapbox\Mapbox;
use Geocoder\Query\GeocodeQuery;
use GuzzleHttp\Client as GuzzleClient;
use Psr\Http\Client\ClientInterface;


$mapboxApiKey = 'pk.eyJ1IjoieGVuMjIiLCJhIjoiY2xlcmVjandnMHJubzQ5cDJ6ZzBremU3YSJ9.YLFI_QIf18tUQfLdozgoPA ';
$guzzleClient = new GuzzleClient();
$geocoder = new MapboxGeocoder($guzzleClient,$mapboxApiKey);


class MapboxGeocoder
{

    

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

