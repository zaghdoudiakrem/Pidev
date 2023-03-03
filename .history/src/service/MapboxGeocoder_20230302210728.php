<?php
namespace App\service;

use Geocoder\Geocoder;
use Geocoder\Provider\Mapbox\Mapbox;
use Geocoder\Query\GeocodeQuery;

class MapboxGeocoder
{
    private $geocoder;
    $mapboxApiKey = 'pk.eyJ1IjoieGVuMjIiLCJhIjoiY2xlcmVjandnMHJubzQ5cDJ6ZzBremU3YSJ9.YLFI_QIf18tUQfLdozgoPA';
    $geocoder = new MapboxGeocoder($mapboxApiKey);

    public function __construct(string $mapboxApiKey)
    {
        $provider = new Mapbox($mapboxApiKey);
        $this->geocoder = new Geocoder($provider);
    }

    public function geocode(string $address): array
    {
        $result = $this->geocoder->geocodeQuery(GeocodeQuery::create($address));
        return $result->toArray();
    }
}

