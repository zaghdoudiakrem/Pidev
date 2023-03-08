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
use Twilio\Rest\Client;


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
            $accountSid='ACeb4f42e01aed761f46989f2f9ddbdc08';
            $authToken='02e7513394c1c4e5f44e0f3765892a8f';
            $twilio= new Client($accountSid,$authToken);
            $message = $twilio->messages->create('+21654207503',array( 'from'=>'+15674302677','body'=>'Votre rendez-vous aura lieu'.$rendezvous->getLieu().'à :'.$rendezvous->getDate()->format('Y-m-d H:i:s'),));
             
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

    #[Route("/addRendezVousJSON", name:"add_rendezvousJSON")]
    public function AddRdvJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $rendezvous = new RendezVous();
        $rendezvous->setDate($request->get('date'));
        $rendezvous->setLieu($request->get('lieu'));
        $rendezvous-> setIdExpert($request->get('id_expert'));
        $em->persist($rendezvous);
        $em->flush();
        $jsonContent = $Normalizer->normalize($rendezvous,'json',['groups'=>'rendezvous']);
         return new Response(json_encode($jsonContent));
    }
    #[Route("/deleteRDV/{id}", name: "deleteRDVJSON")]
    public function deleteRDVJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {

        
        $em = $this->getDoctrine()->getManager();
        $rendezvous = $em->getRepository(RendezVous::class)->find($id);
        dd($rendezvous);
        $em->remove($rendezvous);
        $em->flush();
        $jsonContent = $Normalizer->normalize($rendezvous, 'json', ['groups' => 'rendezvous']);
        return new Response("Rendez vous deleted successfully " . json_encode($jsonContent));
    }

    #[Route("/updateRDV/{id}", name: "updateRDVJSON")]
    public function UpdateVoyageJSON($id,Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $rendezvous = $this->getDoctrine()->getRepository(RendezVous::class)->find($id);
        $rendezvous->setLieu($request->get('lieu'));
        $rendezvous->setIdExpert($request->get('id_expert'));
        $rendezvous->setDate($request->get('date'));
        //$Voyage->setDate($request->get('Date'));
        $em->flush();
        $jsonContent = $Normalizer->normalize($rendezvous,'json',['groups'=>'rendezvous']);
        return new Response("Update successfully".json_encode($jsonContent));
    }



    
    #[Route("/stat", name: "statistique")]
    public function statistique(RendezVousRepository $repository) :Response 
    {
        $rendezvouss=$repository->findAll();
        $lieux=[];
        $countlieux=[];
        //$nbrerendezvous=[];
        //calculer le nombre des rendezvous par lieux
        foreach($rendezvouss as $rendez){
            $lieux[]=$rendez->getLieu();
            
            $countlieux[]=$repository->countbylieux($rendez->getLieu());
            
            

        }
        //dd($countlieux);
        
       
        
        
       
       
        //$rendezvouscount=[];

       /* foreach($rendezvouss as $rendez)
        {
            $lieux[]=$rendez->getLieu();
            $countlieu[]

           // $rendezvouscount[]= count($lieux);
            
        }*/
       



        return $this->render('rendez_vous/stat.html.twig',[
            'lieux'=>json_encode( $lieux),
            'rendezvouscount'=>json_encode($countlieux),
        ])
           
        ;
    }


    #[Route('/calendar', name: 'calendar_events')]
    public function eventsrendezvous(RendezVousRepository $repo): Response
    {    $events=[];
         $rendezvouss=$repo->findAll();
         //dd($rendezvouss);
        foreach($rendezvouss as $rendezvous)
        {
            $events[] = 
                [
                    'title' => $rendezvous->getLieu(),
                    'start' => $rendezvous->getDate()->format('Y-m-d H:i:s'),
                    
                ];
                

        }




        
      

        //return new JsonResponse($events);
        return $this->render('rendez_vous/calendar.html.twig',
        ['events'=>json_encode($events)
        ]);
    }

    
}
