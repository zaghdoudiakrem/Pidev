<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\OffreType;
use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/offre')]
class OffreController extends AbstractController
{
    #[Route('/', name: 'app_offre_index', methods: ['GET'])]
    public function index(OffreRepository $offreRepository): Response
    {
        return $this->render('offre/index.html.twig', [
            'offres' => $offreRepository->findAll(),
        ]);
    }

    #[Route('/mod', name: 'app_modoffre_index', methods: ['GET'])]
    public function index2(OffreRepository $offreRepository): Response
    {
        return $this->render('offre/index2.html.twig', [
            'offres' => $offreRepository->findAll(),
        ]);
    }
    #[Route('/sup', name: 'app_supoffre_index', methods: ['GET'])]
    public function index3(OffreRepository $offreRepository): Response
    {
        return $this->render('offre/index3.html.twig', [
            'offres' => $offreRepository->findAll(),
        ]);
    }
    #[Route('/front', name: 'app_offrefront_index', methods: ['GET'])]
    public function index4(OffreRepository $offreRepository): Response
    {
        return $this->render('offre/index4.html.twig', [
            'offres' => $offreRepository->findAll(),
        ]);
    }
    #[Route('/new', name: 'app_offre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OffreRepository $offreRepository): Response
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image_offre')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move('C:/xampp/htdocs/PiDEV_V06/PiDEV_V06/public/upload',$fileName);
            
            $offre->setImageOffre("/upload/".$fileName);
            $offreRepository->save($offre, true);
            return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offre/new.html.twig', [
            'offre' => $offre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_offre_show', methods: ['GET'])]
    public function show(Offre $offre): Response
    {
        return $this->render('offre/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_offre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offre $offre, OffreRepository $offreRepository): Response
    {
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image_offre')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move('C:/xampp/htdocs/PiDEV_V06/PiDEV_V06/public/upload',$fileName);
            
            $offre->setImageOffre("/upload/".$fileName);
            $offreRepository->save($offre, true);
            return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offre/edit.html.twig', [
            'offre' => $offre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_offre_delete', methods: ['POST'])]
    public function delete(Request $request, Offre $offre, OffreRepository $offreRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->request->get('_token'))) {
            $offreRepository->remove($offre, true);
        }

        return $this->redirectToRoute('app_modoffre_index', [], Response::HTTP_SEE_OTHER);
    }
    // #[Route('/front1', name: 'app_offre_showfront')]
    // public function showfront(Offre $offre=null ): Response
    // {
        


    //     return $this->render('offre/index4.html.twig', [
    //         'offres' => $offre->findAll(),
    //     ]);
    // }
}
// $pictureFile = $form->get('ImageCategorie')->getData();
// if ($pictureFile) {
//     $pictureFileName = uniqid() . '.' . $pictureFile->guessExtension();
//     $pictureFile->move(
//         $this->getParameter('pictures_directory'),
//         $pictureFileName
//     );
//     $pictureFileName = 'Back/images/CategorieImages/' . $pictureFileName;
//     $categorie->setImageCategorie($pictureFileName);
// }
// else 
// $categorie->setImageCategorie($pictureFileName);

