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
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class OffreMObileController extends AbstractController
{

    #[Route("/AllOffres", name: "app-offrejson_index")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et StudentRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getOffres(OffreRepository $repo, SerializerInterface $serializer)
    {
        $offres = $repo->findAll();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* students en  tableau associatif simple.
        // $studentsNormalises = $normalizer->normalize($students, 'json', ['groups' => "students"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($studentsNormalises);

        $json = $serializer->serialize($offres, 'json', ['groups' => "offres"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        // return new Response($json);
        dump ($offres);
        die;
    }
    
    #[Route("showoffre/{id}", name: "offre")]
    public function Offre($id, NormalizerInterface $normalizer, OffreRepository $repo)
    {
        $offre = $repo->find($id);
        $offreNormalises = $normalizer->normalize($offre, 'json', ['groups' => "offres"]);
        dump ($offre);
        die;
    }

    // #[Route('/FindFormationMobile/{id}', name: '$app_formation_findJson', methods: ['GET', 'POST'])]
    // public function FindFormationMobile(FormationRepository $formationRepository,NormalizerInterface $normalizer,$id)
    // {

    //     $formations = $formationRepository->findOneArray($id);

    //     $formationNormalizees = $normalizer->normalize($formations,'json',['groups' => "Formation"]);



    //     return new JsonResponse($formationNormalizees);
    // }

    #[Route('/AddOffres', name: '$app_offre_AddJson', methods: ['GET', 'POST'])]
    public function AddOffreMobile(OffreRepository $offreRepository,NormalizerInterface $normalizer,Request $request)
    {

        $offre = new Offre();

        $offre->setDescription($request->get('description'));
        $offre->setPrix($request->get('prix'));
        $offre->setTitre($request->get('titre'));
        $offre->setValiditeOffre($request->get('validite_offre'));
        $offre->setImageOffre($request->get('image_offre'));



        $offreRepository->save($offre,true);

        $offres = $offreRepository->findAll();
        $jsoncontent = $normalizer->normalize($offres,'json',['groups' => "offres"]);


        dump ($offres);
        die;

    }

    // #[Route('/ModifyFormationMobile/{id}', name: '$app_formation_ModifyJson', methods: ['GET', 'POST'])]
    // public function ModifyFormationMobile(FormationRepository $formationRepository,NormalizerInterface $normalizer,Request $request,$id)
    // {



    //     $formation = $formationRepository->find($id);
    //     $formation->setNomFormation($request->get('NomFormation'));
    //     $formation->setNiveauFormation($request->get('NiveauFormation'));
    //     $formation->setImageFormation($request->get('ImageFormation'));
    //     $formation->setDescriptionFormation($request->get('DescriptionFormation'));


    //     $formationRepository->save($formation,true);
    //     $formation = $formationRepository->findOneArray($id);

    //     $jsoncontent = $normalizer->normalize($formation,'json',['groups' => "Formation"]);


    //     return new JsonResponse($jsoncontent);
    // }

    // #[Route('/DeleteFormationMobile', name: '$app_formation_DeleteJson', methods: ['GET', 'POST'])]
    // public function deleteFormationMobile(Request $request,ManagerRegistry $doctrine): JsonResponse
    // {
    //     $id = $request->get("id");

    //     $em = $doctrine->getManager();
    //     $formation = $em->getRepository(Formation::class)->find($id);
    //     if($formation!=null ) {
    //         $em->remove($formation);
    //         $em->flush();

    //         $serialize = new Serializer([new ObjectNormalizer()]);
    //         $formatted = $serialize->normalize("Formation a ete supprimee avec success.");
    //         return new JsonResponse($formatted);

    //     }
    //     return new JsonResponse("id formation invalide.");


    // }
}