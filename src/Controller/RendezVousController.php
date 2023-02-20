<?php

namespace App\Controller;

use App\Entity\RendezVous;
use App\Form\RendezVousType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Role\Role;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RendezVousController extends AbstractController
{
    #[Route('/rendez/vous', name: 'app_rendez_vous')]
    public function index(): Response
    {
        return $this->render('rendez_vous/index.html.twig', [
            'controller_name' => 'RendezVousController',
        ]);
    }
    #[Route('/afficher', name: 'app_afficherrendez_vous')]
    public function afficher(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(RendezVous::class);
        $rendezvous = $repository->findAll();


        return $this->render(
            'rendez_vous/afficher.html.twig',
            [
                'rendezvouss' => $rendezvous
            ]

        );
    }
    #[Route('/add/{id?0}', name: 'app_rendez_vous')]
    public function addRendezVous(RendezVous $rendezvous = null, ManagerRegistry $doctrine, Request $request): Response
    {
        $new = false;
        if (!$rendezvous) {
            $new = true;
            $rendezvous = new RendezVous();
        }

        $form = $this->createForm(RendezVousType::class, $rendezvous);
        $form->remove('id_expert');
        $form->remove('id_mecanicien');
        $form->remove('id_client');
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $entitymanager = $doctrine->getManager();
            $entitymanager->persist($rendezvous);
            $entitymanager->flush();
            if ($new) {
                $message = "a eté ajouté avec succes";
            } else {
                $message = "a eté modifié avec succes";
            }
            $this->addFlash('success', $message);
            //$form->getData();
            return $this->redirectToRoute('app_afficherrendez_vous');
        } else {
            return $this->render(
                'rendez_vous/addrendezvous.html.twig',
                [
                    'form' => $form->createView()

                ]

            );
        }
    }
    #[Route('/delete/{id}', name: 'app_delete')]
    public function deletePerson(RendezVous $rendezvous = null, ManagerRegistry $doctrine, $id): RedirectResponse
    {
        if ($rendezvous) {
            $manager = $doctrine->getManager();

            $manager->remove($rendezvous);
            $manager->flush();
            $this->addFlash('success', 'la personne a ete supprimé avec succe');
        } else {
            $this->addFlash('error', 'la personne inexistant');
        }
        return $this->redirectToRoute('app_afficherrendez_vous');
    }
    #[Route('/afficherfront', name: 'app_affichefrontrrendez_vous')]
    public function afficherfront(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(RendezVous::class);
        $rendezvous = $repository->findAll();


        return $this->render(
            'rendez_vous/afficherrendezvousfront.html.twig',
            [
                'rendezvouss' => $rendezvous
            ]

        );
    }
}
