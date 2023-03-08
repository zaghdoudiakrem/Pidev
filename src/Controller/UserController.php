<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\JsonResponse;
=======
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481

#[Route('/user')]
class UserController extends AbstractController
{
<<<<<<< HEAD
   
    #[Route('/search', name: 'app_user_search')]
    public function search(UserRepository $userRepository, Request $request): Response
   {
        $admin = $request->getSession()->get('user');
    
            return $this->render('user/search.html.twig', [
                'users' => $userRepository->findAll(), 'admin' => $admin
            ]);
        
    }
    #[Route('/recherche_ajax', name: 'recherche_ajax')]
    public function rechercheAjax(Request $request, UserRepository $sr): JsonResponse
    {
        $requestString = $request->query->get('searchValue');
        $resultats = $sr->findUserByNsc($requestString);
        return $this->json($resultats);
    }
   
=======
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
<<<<<<< HEAD
    
    }
    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]

=======
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

<<<<<<< HEAD
 

=======
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
<<<<<<< HEAD
    

   
=======
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
}
