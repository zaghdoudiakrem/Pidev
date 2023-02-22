<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    #[Route('/back', name: 'app_back')]
    public function index(): Response
    {
<<<<<<< HEAD
        return $this->render('back/index.html.twig', [
=======
        return $this->render('base2.html.twig', [
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
            'controller_name' => 'BackController',
        ]);
    }
}
