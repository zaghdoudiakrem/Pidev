<?php
namespace App\Service;

use App\Entity\Locale;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class LocaleManager
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createLocale(Locale $locale)
    {
        $this->entityManager->persist($locale);
        $this->entityManager->flush();
    }
}
