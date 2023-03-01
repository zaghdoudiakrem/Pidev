<?php

namespace App\Controller;

use App\Entity\RendezVous;
use App\Form\RendezVousType;
use App\Repository\RendezVousRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Role\Role;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class RendezVousController extends AbstractController
{
    
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
    #[Route('/add/{id?0}', name: 'app_addrendez_vous')]
    public function addRendezVous(RendezVous $rendezvous = null, ManagerRegistry $doctrine, Request $request): Response
    {
        $new = false;
        if (!$rendezvous) {
            $new = true;
            $rendezvous = new RendezVous();
        }
    
        $form = $this->createForm(RendezVousType::class, $rendezvous);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            // $selectedClientName = $form->get('id_client')->getData();
            // $selectedExpertName = $form->get('id_expert')->getData();
            // $selectedMechanicName = $form->get('id_mecanicien')->getData();
    
             $entityManager = $doctrine->getManager();
            // $client = $entityManager->getRepository(User::class)->findOneBy(['role' => $selectedClientName]);
            // $expert = $entityManager->getRepository(User::class)->findOneBy(['role' => $selectedExpertName]);
            // $mechanic = $entityManager->getRepository(User::class)->findOneBy(['role' => $selectedMechanicName]);
    
            // $rendezvous->setIdClient($client->getId());
            // $rendezvous->setIdExpert($expert->getId());
            // $rendezvous->setIdMecanicien($mechanic->getId());
    
            $entityManager->persist($rendezvous);
            $entityManager->flush();
    
            if ($new) {
                $message = "a eté ajouté avec succes";
            } else {
                $message = "a eté modifié avec succes";
            }
            $this->addFlash('success', $message);
            return $this->redirectToRoute('app_afficherrendez_vous');
        } else {
            return $this->render(
                'rendez_vous/addrendezvous.html.twig',
                [
                    
                    'form' => $form->createView(),
    
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
    #[Route("/AllRDV", name:"list")]
    public function getRDV(RendezVousRepository $repo,SerializerInterface $serializer)
    {
        $rendezvous=$repo->findAll();
        $json =$serializer->serialize($rendezvous, 'json', ['groups'=>"rendezvous"]);
        return new Response($json);
    }
    #[Route("addRDVJSON/new", name: "addRDVJSON")]
    public function addRendezVousJSON(Request $req,NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $rendezvous = new rendezVous();
        $rendezvous->setDate($req->get('date'));
        $rendezvous->setLieu($req->get('lieu'));
        $em->persist($rendezvous);
        $em->flush();

        $jsonContent = $Normalizer->normalize($rendezvous, 'json', ['groups' => 'rendezvous']);
        return new Response(json_encode($jsonContent));
    }
    #[Route("/deleteRDV/{id}", name: "deleteRDVJSON")]
    public function deleteRDVJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $rendezvous = $em->getRepository(RendezVous::class)->find($id);
        $em->remove($rendezvous);
        $em->flush();
        $jsonContent = $Normalizer->normalize($rendezvous, 'json', ['groups' => 'rendezvous']);
        return new Response("Rendez vous deleted successfully " . json_encode($jsonContent));
    }


}
