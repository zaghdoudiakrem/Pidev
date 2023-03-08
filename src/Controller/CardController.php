<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


 #[Route("/cart")]
 
class CartController extends AbstractController
{
    
    #[Route('/', name: 'cart_index', methods: ['GET'])]
    
    public function index(SessionInterface $session, OffreRepository $offreRepository)
    {
        $panier = $session->get("panier", []);

        // On "fabrique" les données
        $dataPanier = [];
        $total = 0;

        foreach($panier as $id => $quantite){
            $offres = $offreRepository->find($id);
            $dataPanier[] = [
                "produit" => $offres,
                "quantite" => $quantite
            ];
            $total += $offres->getPrix() ;
        }

        return $this->render('offre/panier.html.twig', compact("dataPanier", "total"));
    }

    
     
     #[Route('/add/{id}', name: 'cart_add', methods: ['GET'])]
     
     public function add(Offre $offre, SessionInterface $session)
     {
         // On récupère le panier actuel
         $panier = $session->get("panier", []);
         $id = $offre->getId();
     
         if(!empty($panier[$id])){
             $panier[$id]++;
         }else{
             $panier[$id] = 1;
         }
     
         // On calcule le total du panier
         $total = 0;
         foreach($panier as $id => $quantite){
             $offre = $this->getDoctrine()
                           ->getRepository(Offre::class)
                           ->find($id);
             $total += $offre->getPrix() * $quantite;
         }
     
         // On sauvegarde le total dans la session
         $session->set("panier", $panier);
         $session->set("total", $total);
     
         return $this->redirectToRoute("cart_index");
     }

    
    // #[Route('/remove/{id}', name: 'cart_remove', methods: ['GET'])]
    // public function remove(Offre $offre, SessionInterface $session)
    // {
    //     // On récupère le panier actuel
    //     $panier = $session->get("panier", []);
    //     $id = $offre->getId();

    //     if(!empty($panier[$id])){
    //         if($panier[$id] > 1){
    //             $panier[$id]--;
    //         }else{
    //             unset($panier[$id]);
    //         }
    //     }

    //     // On sauvegarde dans la session
    //     $session->set("panier", $panier);

    //     return $this->redirectToRoute("cart_index");
    // }

    #[Route('/remove/{id}', name: 'cart_remove', methods: ['GET'])]
    public function remove(Offre $offre, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $offre->getId();

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/delete", name="delete_all")
     */
    #[Route('/delete', name: 'cart_delete_all', methods: ['GET'])]
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("panier");

        return $this->redirectToRoute("app_offrefront_index");
    }

    #[Route('/pay', name: 'cart_pay_all', methods: ['GET'])]
    public function payAll(SessionInterface $session)
    {
        $session->remove("panier");

        return $this->redirectToRoute("app_stripe");
    }

}
