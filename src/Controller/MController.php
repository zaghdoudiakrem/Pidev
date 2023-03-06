<?php

namespace App\Controller;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface; 
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
class MController extends AbstractController
{
   #[Route ('/liste' ,name:'app_liste')]
    public function listeuser(UserRepository $userRepository)
    {     $user=$userRepository->findAll();
         dump($user); 
         die ;

    }
}
