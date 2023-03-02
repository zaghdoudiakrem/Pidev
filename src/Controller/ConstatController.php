<?php

namespace App\Controller;

use App\Entity\Constat;
use App\Form\ConstatType;
use App\Entity\User;
use App\Entity\Vehicule;
use App\Repository\ConstatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;



#[Route('/constat')]
class ConstatController extends AbstractController
{
    #[Route('/', name: 'app_constat_index', methods: ['GET'])]
    public function index(ConstatRepository $constatRepository): Response
    {
        return $this->render('constat/index.html.twig', [
            'constats' => $constatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_constat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ConstatRepository $constatRepository,FlashBagInterface $flashBag): Response
    {
        $constat = new Constat();
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find(1);
        $form = $this->createForm(ConstatType::class, $constat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $constat -> setIdExpert($user);
            $constat -> setIdVehicule($vehicule);

            $file = $form->get('photoaccid')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move('C:\wamp64\www\PiDEV\public\upload',$fileName);
        
            $constat->setPhotoaccid("/upload/".$fileName);

            $flashBag->add('success', 'Your action was successful!');
        
            $constatRepository->save($constat, true);
            return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constat/new.html.twig', [
            'constat' => $constat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_constat_show', methods: ['GET'])]
    public function show(Constat $constat): Response
    {
        return $this->render('constat/show.html.twig', [
            'constat' => $constat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_constat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Constat $constat, ConstatRepository $constatRepository,FlashBagInterface $flashBag): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find(1);
        $form = $this->createForm(ConstatType::class, $constat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $constat -> setIdExpert($user);
            $constat -> setIdVehicule($vehicule);        
          
            $file = $form->get('photoaccid')->getData();
            if($file){
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move('C:\wamp64\www\PiDEV\public\upload',$fileName);
            $constat->setPhotoaccid("/upload/".$fileName);
            $flashBag->add('success', 'Your action was successful!');            

            }

            $constatRepository->save($constat, true);

            return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constat/edit.html.twig', [
            'constat' => $constat,
            'form' => $form,

        ]);
    }

    #[Route('/{id}', name: 'app_constat_delete', methods: ['POST'])]
    public function delete(Request $request, Constat $constat, ConstatRepository $constatRepository,FlashBagInterface $flashBag): Response
    {
        if ($this->isCsrfTokenValid('delete'.$constat->getId(), $request->request->get('_token'))) {
            $constatRepository->remove($constat, true);
        }
        $flashBag->add('success', 'Your action was successful!');

        return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
    } 



    #[Route('/AllConstat', name: 'list')]
    public function index_Json(ConstatRepository $constatRepository,SerializerInterface $serializer): Response
    {
        
            $constats = $constatRepository->findAll();

            $json = $serializer->serialize($constats,'json', ['groups' => "constats"]);        

            return new  Response($json);
       
    }

    #[Route('/addConstatJSON/new', name: 'addConstatJSON')]
    public function new_JSON(Request $request, NormalizerInterface $Normalizer): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find(1);

        $em = $this->getDoctrine()->getManager();
        $constat = new Constat();
        $constat->setNomclientE($request->get('nomclient_e'));
        $constat->setPrenomclientE($request->get('prenomclient_e'));
        $constat->setTypevehiculeE($request->get('typevehicule_e'));
        $constat->setMarquevehiculeE($request->get('marquevehicule_e'));
        $constat->setAssuranceclientE($request->get('assuranceclient_e'));
        $constat-> setAdresseclientE($request->get('adresseclient_e'));
        $constat->setEmplacementaccid($request->get('emplacementaccid'));
        $constat-> setPhotoaccid($request->get('photoaccid'));
        $constat-> setDescriptiondegat($request->get('descriptiondegat'));
        $constat-> setObservations($request->get('observations'));
        $constat-> setNumcontratE($request->get('numcontrat_e'));

        $constat -> setIdExpert($user);
        $constat -> setIdVehicule($vehicule);
        $em->persist($constat);
        $em->flush();

        $jsonContent = $Normalizer->normalize($constat, '$json', ['groups' => "constats"]);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/{id}', name: 'constat')]
    public function show_JSON($id,NormalizerInterface $normalizer,ConstatRepository $repo): Response
    {
        $constat = $repo->find($id);
        $contstatNormalises = $normalizer->normalize($constat, 'json',['groups' => "constats"]);
        return new Response(json_encode($contstatNormalises));
    }

    #[Route('/updateConstatJSON/{id}', name: 'updateConstatJSON')]
    public function edit_JSON(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find(1);

        $em = $this->getDoctrine()->getManager();
        $constat = $em->getRepository(Constat::class)->find($id);
        $constat->setNomclientE($request->get('nomclient_e'));
        $constat->setPrenomclientE($request->get('prenomclient_e'));
        $constat->setTypevehiculeE($request->get('typevehicule_e'));
        $constat->setMarquevehiculeE($request->get('marquevehicule_e'));
        $constat->setAssuranceclientE($request->get('assuranceclient_e'));
        $constat-> setAdresseclientE($request->get('adresseclient_e'));
        $constat->setEmplacementaccid($request->get('emplacementaccid'));
        $constat-> setPhotoaccid($request->get('photoaccid'));
        $constat-> setDescriptiondegat($request->get('descriptiondegat'));
        $constat-> setObservations($request->get('observations'));
        $constat-> setNumcontratE($request->get('numcontrat_e'));
        $constat-> setIdExpert($request->get('id_expert'));
        $constat->setIdVehicule($request->get('id_vehicule'));

        $constat -> setIdExpert($user);
        $constat -> setIdVehicule($vehicule);        

        $em->flush();

        $jsonContent = $Normalizer->normalize($constat, '$json', ['groups' => "constats"]);
        return new Response("Constat updated successfully" . json_encode($jsonContent));
        
    }

    
    #[Route('/deletedConstatJSON/{id}', name: 'deleteConstatJSON')]
    public function delete_JSON($id,Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $constat = $em->getRepository(Constat::class)->find($id);
        $em->remove($constat);
        $em->flush();
        $jsonContent = $Normalizer->normalize($constat, 'json', ['groups' => 'constats']);
        return new Response("Constat deleted successfully" . json_encode($jsonContent));
     }

}
 