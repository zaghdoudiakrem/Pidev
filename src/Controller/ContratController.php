<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Entity\User;
use App\Entity\Vehicule;
use App\Form\ContratType;
use App\Repository\ContratRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;



#[Route('/contrat')]
class ContratController extends AbstractController
{
    #[Route('/', name: 'app_contrat_index', methods: ['GET'])]
    public function index(ContratRepository $contratRepository): Response
    {
        return $this->render('contrat/index.html.twig', [
            'contrats' => $contratRepository->findAll(),
        ]);
    }
    #[Route('/mod', name: 'app_modcontrat_index', methods: ['GET'])]
    public function index2(ContratRepository $contratRepository): Response
    {
        return $this->render('contrat/index2.html.twig', [
            'contrats' => $contratRepository->findAll(),
        ]);
    }
    #[Route('/sup', name: 'app_supcontrat_index', methods: ['GET'])]
    public function index3(ContratRepository $contratRepository): Response
    {
        return $this->render('contrat/index3.html.twig', [
            'contrats' => $contratRepository->findAll(),
        ]);
    }

    #[Route('/{id}/pdf', name: 'app_contratpdf')]
    public function generatePdfAction($id)
    {
    $contrat = $this->getDoctrine()->getRepository(Contrat::class)->find($id);
    $user = $this->getDoctrine()->getRepository('App\Entity\User')->findOneBy(['id' => $contrat->getIdClient()]);
    
    $contrat->setClientNom($user ? $user->getNom() : null);
    $contrat->setClientPrenom($user ? $user->getPrenom() : null);
    $contrat->setClientCin($user ? $user->getCin() : null);

    $vehicule = $this->getDoctrine()->getRepository('App\Entity\Vehicule')->findOneBy(['id' => $contrat->getIdVehicule()]);
    $contrat->setVehiculeMatricule($vehicule ? $vehicule->getMatricule() : null);
    $contrat->setVehiculeType($vehicule ? $vehicule->getType() : null);

    // $offre = $this->getDoctrine()->getRepository('App\Entity\Offre')->findOneBy(['id' => $contrat->getIdOffre()]);
    // $contrat->setOffreTitre($offre ? $offre->getTitre() : null);
    // $contrat->setOffrePrix($offre ? $offre->getPrix() : null);

    $html = $this->renderView('contrat/print.html.twig', [
        'contrat' => $contrat,
    ]);

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $pdf = $dompdf->output();

    return new Response($pdf, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="Contrat n°'.$contrat->getId().'.pdf"',
    ]);

    

}
    // #[Route('/front', name: 'app_contratfront_index', methods: ['GET'])]
    // public function index4(Request $request,ContratRepository $contratRepository): Response
    // {
    //     $contrat = new Contrat();
    //     $form = $this->createForm(ContratType::class, $contrat);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $file = $form->get('photo_cin')->getData();
    //         $fileName = md5(uniqid()).'.'.$file->guessExtension();
    //         $file->move('C:/xampp/htdocs/PiDEV_V06/PiDEV_V06/public/upload',$fileName);
            
    //         $contrat->setPhotoCin("/upload/".$fileName);
    //         $contratRepository->save($contrat, true);
    //         return $this->redirectToRoute('app_stripe', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('contrat/index4.html.twig', [
    //         'contrat' => $contrat,
    //         'form' => $form,
    //     ]);
    // }
    #[Route('/new', name: 'app_contrat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ContratRepository $contratRepository): Response
    {
        
        $contrat = new Contrat();
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('photo_cin')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move('C:/xampp/htdocs/PiDEV_V06/PiDEV_V06/public/upload',$fileName);
            
            $contrat->setPhotoCin("/upload/".$fileName);
            $contratRepository->save($contrat, true);
            return $this->redirectToRoute('app_supcontrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contrat/new.html.twig', [
            'contrat' => $contrat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contrat_show', methods: ['GET'])]
    public function show(Contrat $contrat): Response
    {
        return $this->render('contrat/show.html.twig', [
            'contrat' => $contrat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_contrat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contrat $contrat, ContratRepository $contratRepository): Response
    {
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('photo_cin')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move('C:/xampp/htdocs/PiDEV_V06/PiDEV_V06/public/upload',$fileName);
            
            $contrat->setPhotoCin("/upload/".$fileName);
            $contratRepository->save($contrat, true);
            return $this->redirectToRoute('app_modcontrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contrat/edit.html.twig', [
            'contrat' => $contrat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contrat_delete', methods: ['POST'])]
    public function delete(Request $request, Contrat $contrat, ContratRepository $contratRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contrat->getId(), $request->request->get('_token'))) {
            $contratRepository->remove($contrat, true);
        }

        return $this->redirectToRoute('app_modcontrat_index', [], Response::HTTP_SEE_OTHER);
    }
}
