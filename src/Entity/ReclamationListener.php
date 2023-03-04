<?php

namespace App\EventListener;


use App\Entity\Evaluation;
use App\Entity\Reclamation;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use App\Repository\ReclamationListenerRepository;
use Doctrine\ORM\Mapping as ORM;

//#[ORM\Entity(repositoryClass: ReclamationListenerRepository::class)]
class ReclamationListener
{


    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if ($entity instanceof Reclamation) {
            $entityManager = $args->getObjectManager();

            $evaluation = new Evaluation();
            $evaluation->setReclamation($entity);
            $evaluation->setDateCreation(new \DateTime());

            $entityManager->persist($evaluation);
            $entityManager->flush();
        }
    }
}
