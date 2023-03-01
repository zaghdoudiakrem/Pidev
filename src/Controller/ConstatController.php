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
    public function new(Request $request, ConstatRepository $constatRepository): Response
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
    public function edit(Request $request, Constat $constat, ConstatRepository $constatRepository): Response
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
    public function delete(Request $request, Constat $constat, ConstatRepository $constatRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$constat->getId(), $request->request->get('_token'))) {
            $constatRepository->remove($constat, true);
        }

        return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
    }
}
