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
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Controller\FileException;


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
    public function addRapport(Rapport $rapport = null, ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        $new = false;
        if (!$rapport) {


            $new = true;
            $rapport=new Rapport();
        }

        $form = $this->createForm(RapportType::class, $rapport);
        $form->remove('id_expert');
        $form->remove('id_constat');
        // $form->remove('id_client');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $photo = $form->get('photo')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $photo->move(
                        $this->getParameter('rapport_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $rapport->setImage($newFilename);
            }
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
                'rapport/addrapport.html.twig',
                [
                    'form' => $form->createView(),
                    

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
    #[Route('/deleterapport/{id}', name: 'app_deleterapport')]
    public function deletePerson(Rapport $rapport = null, ManagerRegistry $doctrine, $id): RedirectResponse
    {
        if ($rapport) {
            $manager = $doctrine->getManager();

            $manager->remove($rapport);
            $manager->flush();
            $this->addFlash('success', 'le rapport a ete supprimé avec succe');
        } else {
            $this->addFlash('error', 'le rapport inexistant');
        }
        return $this->redirectToRoute('app_afficherrapport');
    }
    
}
