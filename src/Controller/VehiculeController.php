<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Entity\User;
use App\Entity\Contrat;
use App\Form\VehiculeType;
use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/vehicule')]
class VehiculeController extends AbstractController
{
    #[Route('/', name: 'app_vehicule_index', methods: ['GET'])]
    public function index(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_vehicule_new', methods: ['GET', 'POST'])]
    public function new(Request $request, VehiculeRepository $vehiculeRepository,FlashBagInterface $flashBag): Response
    {
        $vehicule = new Vehicule();
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $contrat = $this->getDoctrine()->getRepository(Contrat::class)->find(4);
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $vehicule -> setIdClient($user);
            $vehicule -> setIdContrat($contrat);
            $vehiculeRepository->save($vehicule, true);

            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }
         $flashBag->add('success', 'Your action was successful!');
        return $this->renderForm('vehicule/new.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vehicule_show', methods: ['GET'])]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_vehicule_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vehicule $vehicule, VehiculeRepository $vehiculeRepository,FlashBagInterface $flashBag): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $contrat = $this->getDoctrine()->getRepository(Contrat::class)->find(4);
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $vehicule -> setIdClient($user);
            $vehicule -> setIdContrat($contrat);
            $vehiculeRepository->save($vehicule, true);
            $flashBag->add('success', 'Your action was successful!');
            
            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }


        return $this->renderForm('vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vehicule_delete', methods: ['POST'])]
    public function delete(Request $request, Vehicule $vehicule, VehiculeRepository $vehiculeRepository,FlashBagInterface $flashBag): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getId(), $request->request->get('_token'))) {
            $vehiculeRepository->remove($vehicule, true);
        }
        $flashBag->add('success', 'Your action was successful!');

        return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/AllVehicule', name: 'list')]
    public function index_JSON(VehiculeRepository $vehiculeRepository,SerializerInterface $serializer)
    {
       $vehicules = $vehiculeRepository->findAll();

       $json = $serializer->serialize($vehicules,'json',['groups' => "vehicules"]);
       
       return new Response($json);
    }

    #[Route('/addVehiculeJSON/new', name: 'addVehiculeJSON')]
    public function new_JSON(Request $request, NormalizerInterface $Normalizer)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $contrat = $this->getDoctrine()->getRepository(Contrat::class)->find(5);

        $em= $this->getDoctrine()->getManager();
        $vehicule = new Vehicule();
        $vehicule->setMatricule($request->get('matricule'));
        $vehicule->setMarque($request->get('marque'));
        $vehicule->setType($request->get('type'));
        $vehicule->setNbCh($request->get('nb_ch'));

        $vehicule -> setIdClient($user);
        $vehicule -> setIdContrat($contrat);
        $em->persist($vehicule);
        $em->flush();

        $jsonContent = $Normalizer->normalize($vehicule, 'json',['groups' => "vehicules"]);
        return new Response(json_encode($jsonContent));

    }

    #[Route('/{id}', name: 'vehicule')]
    public function show_JSON($id,NormalizerInterface $normalizer,VehiculeRepository $repo): Response
    {
        $vehicule = $repo->find($id);
        $vehiculeNormalises = $normalizer->normalize($vehicule, 'json', ['groups' => "vehicules"]);
        return new Response(json_encode($vehiculeNormalises));
    }

    #[Route('/updateVehiculeJSON/{id}', name: 'updateVehiculeJSON')]
    public function edit_JSON($id,Request $request, NormalizerInterface $Normalizer): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $contrat = $this->getDoctrine()->getRepository(Contrat::class)->find(5);

        $em= $this->getDoctrine()->getManager();

        $vehicule = $em->getRepository(Vehicule::class)->find($id);
        $vehicule->setMatricule($request->get('matricule'));
        $vehicule->setMarque($request->get('marque'));
        $vehicule->setType($request->get('type'));
        $vehicule->setNbCh($request->get('nb_ch'));

        $vehicule -> setIdClient($user);
        $vehicule -> setIdContrat($contrat);

        $em->flush();

        $jsonContent = $Normalizer->normalize($vehicule, 'json',['groups' => "vehicules"]);
        return new Response("Vehicule updated successfully" .json_encode($jsonContent));

       
    }

    #[Route('/deletedVehiculeJSON/{id}', name: 'deletedVehiculeJSON')]
    public function delete_JSON($id,Request $request,NormalizerInterface $Normalizer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $vehicule = $em->getRepository(Vehicule::class)->find($id);
        $em->remove($vehicule);
        $em->flush();
        $jsonContent = $Normalizer->normalize($vehicule, 'json', ['groups' => "vehicules"]);
        return new Response("Vehicule deleted successfully" .json_encode($jsonContent));
       
    }
}
