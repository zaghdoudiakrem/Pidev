<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\AppUserAuthentificatorAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
<<<<<<< HEAD
use App\Repository\UserRepository;
use Symfony\Component\Mailer\MailerInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class RegistrationController extends AbstractController
{
    

    #[Route('/register', name: 'app_register')]
    public function register(Request $request,TokenGeneratorInterface $tokenGenerator, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppUserAuthentificatorAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
=======
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppUserAuthentificatorAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
<<<<<<< HEAD
            $user->setPassword($userPasswordHasher->hashPassword($user,$form->get('plainPassword')->getData()));
            
            if(!$user)//user mech maoujoud 
            {
                $this->addFlash('danger','cette adresse n\est pas valide  '); 
     
            }
            //token 3ibara ala autorisation lya bech nekhdem 
            //reset password mayhelha ken user autorise 
            $token=$tokenGenerator->generateToken(); 
           
            try 
            {
                $user->setActivationToken($token); 
                $em=$this->getDoctrine()->getManager(); 
                $em->persist($user);
                $em->flush(); 
     
                
            }catch(\Exception $e){
                    $this->addFlash('warning','une erreur est survenue :'.$e->getMessage());
                    return $this->redirectToRoute('app_register'); 
            }
            $url = $this->generateUrl('app_verify_email', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
            $transport = Transport::fromDsn('smtp://4.roues.assurances@gmail.com:eauvsyslukyzjceq@smtp.gmail.com:587?verify_peer=0');
            $mailer = new Mailer($transport);
            $email= new Email();
                    //bundle mailer 
            $email->from('4.roues.assurances@gmail.com') 
            ->To($user->getEmail())
            ->html("<p>Bonjour , </p> une demande d'activation de mail a éte effectuée  . Veuillez cliquer sur le lien suivant :" .$url ,'text/html' ); 
     
            //send mailer 
            $mailer->send($email); 
            $this->addFlash('message','Un e-mail d\'activation de compte  vous a été envoyé'); 
            return $this->render('registration\activation_compte.html.twig',
            ['token' => $user->getActivationToken(),'form'=> $form->createView()] ); 
            //return $this->redirectToRoute('app_login'); 
     
=======
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
<<<<<<< HEAD
        return $this->redirectToRoute('app_login'); 
    }


    #[Route('/activation/{token}', name:'app_verify_email')]
    public function activation($token, UserRepository $usersRepo) 
    
    {
        // On vérifie si un utilisateur a ce token
        $user = $usersRepo->findOneBy(['activation_token' => $token]);

        // Si aucun utilisateur n'existe avec ce token
        if(!$user){
            // Erreur 404
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }

        // On supprime le token
        $user->setActivationToken('null');
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // On envoie un message flash
        $this->addFlash('message', 'Vous avez bien activé votre compte , Connectez vous s\'il vous plait ');

        // On retoure à login
        return $this->redirectToRoute('app_login');
    }
}

            // do anything else you need here, like send an email
            
            
      //  $signatureComponents = $this->verifyEmailHelper->generateSignature(
        //    'app_verify_email',
          //  $user->getId(),
            //$user->getEmail()
        //);
    
        //$email = new TemplatedEmail();
        //$email->from('4.roues.assurances@gmail.com');
        //$email->to($user->getEmail());
        //$email->htmlTemplate('registration/confirmation_email.html.twig');
        //$email->context(['signedUrl' => $signatureComponents->getSignedUrl()]);
    
  //   $this->mailer->send($email);


           

   // #[Route ('/verify/email3', name:'app_verify_email')]
    //public function verifyUserEmail(Request $request): Response
   // {
     //   $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
       // $user = $this->getUser();

        // Do not get the User's Id or Email Address from the Request object
        //try {
           // $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getId(), $user->getEmail());
        //} catch (VerifyEmailExceptionInterface $e) {
          //  $this->addFlash('verify_email_error', $e->getReason());

           // return $this->redirectToRoute('app_register');
        //}

        // Mark your user as verified. e.g. switch a User::verified property to true

        //$this->addFlash('success', 'Your e-mail address has been verified.');

        //return $this->redirectToRoute('app_front');
    //}

=======
    }
}
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
