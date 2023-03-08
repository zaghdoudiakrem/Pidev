<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Stripe;

class StripeController extends AbstractController
{
        #[Route('/stripe', name: 'app_stripe')]
    public function index(): Response
    {
        return $this->render('stripe/index.html.twig', [
            'stripe_key' => $_ENV["STRIPE_KEY"],
        ]);
    }
    #[Route('/stripeterm', name: 'app_stripe_term')]
    public function index2(): Response
    {
        return $this->render('stripe/index2.html.twig', [
            'stripe_key' => $_ENV["STRIPE_KEY"],
        ]);
    }
 
    #[Route('/stripe/create-charge', name: 'app_stripe_charge', methods: ['POST'])]
public function createCharge(Request $request, SessionInterface $session)
{
    Stripe\Stripe::setApiKey($_ENV["STRIPE_SECRET"]);

    $total = $session->get("total");
    if(!$total){
        throw new \Exception("Le total du panier n'a pas été trouvé.");
    }

    Stripe\Charge::create ([
            "amount" => $total * 100,
            "currency" => "usd",
            "source" => $request->request->get('stripeToken'),
            "description" => "Payement 4Roues Assurances"
    ]);

    $this->addFlash(
        'success',
        'Paiement réussi !'
    );

    return $this->redirectToRoute('app_stripe_term', [], Response::HTTP_SEE_OTHER);
}


}
