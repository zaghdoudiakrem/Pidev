<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/reponse')]
class ReponseController extends AbstractController
{
    #[Route('/', name: 'app_reponse_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository): Response
    {

        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }

    #[Route('/listeR', name:'listeR')]
    public function getReponse(ReponseRepository $reponseRepository,SerializerInterface $serializerInterface){
        $reponse=$reponseRepository->findAll();
        $json=$serializerInterface->serialize($reponse,'json',['groups'=>'reclamation']);
        //dump($reclamation);
        return new Response($json);
        //die;
    }

    #[Route('/parR/{id}', name:'reponse')]
    public function ReponseId($id,NormalizerInterface $normalizer,ReponseRepository $reponseRepository){
        $reponse=$reponseRepository->find($id);
        $reponseNormalises=$normalizer->normalize($reponse,'json',['groups'=>"reclamation"]);
        return new Response(json_encode($reponseNormalises));
    }

    #[Route('/addReponseJSON/new', name:'addReponseJSON')]
    public function addReponseJSON(Request $request, NormalizerInterface $normalizer){
        $em=$this->getDoctrine()->getManager();
        $reponse=new Reponse();
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find(2);
        $reponse -> setIdAssureur($user);
        $reponse -> setIdReclamation($reclamation);
        $reponse->setDescription($request->get('description'));
        $em->persist($reponse);
        $em->flush();
        $jsonContent=$normalizer->normalize($reponse,'json',['groups'=>'reclamation']);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/updateReponseJSON/{id}', name:'updateReponseJSON')]
    public function updateReponseJSON(Request $request,$id,NormalizerInterface $normalizer){
        $em=$this->getDoctrine()->getManager();
        $reponse=$em->getRepository(Reponse::class)->find($id);
        $reponse->setDescription($request->get('description'));
        $em->flush();
        $jsonContent=$normalizer->normalize($reponse,'json',['groups'=>'reclamation']);
        return new Response('Reponse updated succefully'.json_encode($jsonContent));
    }

    #[Route('/deleteReponseJSON/{id}', name:'deleteReponseJSON')]
    public function deleteReponseJSON(Request $request,$id,NormalizerInterface $normalizer){
        $em=$this->getDoctrine()->getManager();
        $reponse=$em->getRepository(Reponse::class)->find($id);
        //$em->flush;
        $jsonContent=$normalizer->normalize($reponse,'json',['groups'=>'reclamation']);
        return new Response('Reponse delete succefuly'.json_encode($jsonContent));
    }

    #[Route('/new', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReponseRepository $reponseRepository): Response
    {
        $reponse = new Reponse();
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponse -> setIdAssureur($user);
            $reponseRepository->save($reponse, true);

            return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, ReponseRepository $reponseRepository): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find(2);
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponse -> setIdAssureur($user);
            $reponse -> setIdReclamation($reclamation);
            $reponseRepository->save($reponse, true);

            return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, ReponseRepository $reponseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $reponseRepository->remove($reponse, true);
        }

        return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
    }
}
