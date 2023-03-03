<?php
// src/Service/LocaleManager.php

namespace App\service;

use App\Entity\Locale;
use Doctrine\ORM\EntityManagerInterface;

$mapboxApiKey = 'your_mapbox_api_key_here';
$geocoder = new MapboxGeocoder($mapboxApiKey);

class LocaleManager
{
    private $entityManager;
    private $mapboxGeocoder;
  

    public function __construct(EntityManagerInterface $entityManager, MapboxGeocoder $mapboxGeocoder)
    {
        $this->entityManager = $entityManager;
        $this->mapboxGeocoder = $mapboxGeocoder;
    }

    public function saveLocale(Locale $locale, string $address)
    {
        $locationData = $this->mapboxGeocoder->geocode($address);

        if (count($locationData) > 0) {
            $locale
                ->setAddress($locationData[0]['formatted_address'])
                ->setLatitude($locationData[0]['latitude'])
                ->setLongitude($locationData[0]['longitude']);

            $this->entityManager->persist($locale);
            $this->entityManager->flush();
        }
    }
}

