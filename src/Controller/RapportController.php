<?php

namespace App\Controller;

use App\Entity\Rapport;
use App\Form\RapportType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RapportController extends AbstractController
{
    #[Route('/rapport', name: 'app_rapport')]
    public function index(): Response
    {
        return $this->render('rapport/index.html.twig', [
            'controller_name' => 'RapportController',
        ]);
    }
    #[Route('/addrapport/{id?0}', name: 'appadd_rapport')]
    public function addRapport(Rapport $rapport = null, ManagerRegistry $doctrine, Request $request): Response
    {
        $new = false;
        if (!$rapport) {
            $new = true;
            $rapport = new Rapport();
        }

        $form = $this->createForm(RapportType::class, $rapport);
        $form->remove('id_expert');
        $form->remove('id_constat');
        //$form->remove('id_client');
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $entitymanager = $doctrine->getManager();
            $entitymanager->persist($rapport);

            $entitymanager->flush();
            if ($new) {
                $message = "a eté ajouté avec succes";
            } else {
                $message = "a eté modifié avec succes";
            }
            $this->addFlash('success', $message);
            //$form->getData();
            return $this->redirectToRoute('app_afficherrapport');
        } else {
            return $this->render(
                'rapport/addraaport.html.twig',
                [
                    'form' => $form->createView()

                ]

            );
        }
    }
    #[Route('/afficherrapport', name: 'app_afficherrapport')]
    public function afficher(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Rapport::class);
        $rapport = $repository->findAll();


        return $this->render(
            'rapport/afficherrapport.html.twig',
            [
                'rapports' => $rapport
            ]

        );
    }
}
