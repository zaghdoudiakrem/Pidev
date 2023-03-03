<?php
// src/Service/LocaleManager.php

namespace App\Service;

use App\Entity\Locale;
use Doctrine\ORM\EntityManagerInterface;

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

