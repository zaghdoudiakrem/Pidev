<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Form\SearchReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    
    #[Route('/', name: 'app_reclamation_index')]
    public function index(Request $request,ReclamationRepository $repository): Response
    {
        $reclamations= $repository->findAll();
        $formSearch= $this->createForm(SearchReclamationType::class);
        $formSearch->handleRequest($request);
        if($formSearch->isSubmitted()){
            $description= $formSearch->get('description')->getData();
            $result= $repository->searchReclamation($description);
            return $this->renderForm("reclamation/index.html.twig",
                array("reclamations"=>$result,
                    "searchForm"=>$formSearch));
        }
          return $this->renderForm("reclamation/index.html.twig",
            array("reclamations"=>$reclamations,
                 "searchForm"=>$formSearch));
    }

    

    #[Route('/sup', name: 'app_reclamation_index1', methods: ['GET'])]
    public function index1(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index1.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }


    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true); 
            return $this->redirectToRoute('app_reclamation_index1', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation -> setIdClient($user);
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation, true);
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

    
}
