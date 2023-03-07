<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Evaluation;
use App\Entity\Reclamation;
use App\Form\EvaluationType;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Form\SearchReclamationType;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\Recipient;
use Doctrine\ORM\EntityManagerInterface;


#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    
    #[Route('/', name: 'app_reclamation_index')]
    public function index(Request $request,ReclamationRepository $repository,PaginatorInterface $paginator): Response
    {
    
        $reclamations= $repository->findAll();
        $pagination = $paginator->paginate(
            $reclamations, /* query NOT result */
            $request->query->getInt('page', 1),
            3
        );
       

        $formSearch= $this->createForm(SearchReclamationType::class);
        $formSearch->handleRequest($request);
       
        if($formSearch->isSubmitted()){
          
            $objet= $formSearch->get('objet')->getData();
            $result= $repository->searchReclamation($objet);
            return $this->renderForm("reclamation/index.html.twig",
                array("reclamations"=>$result,
                    "searchForm"=>$formSearch,));
        }
          return $this->renderForm("reclamation/index.html.twig",
            array('reclamations' => $pagination,
                 "searchForm"=>$formSearch,));
    }


    #[Route('/searchReclamationx', name: 'searchReclamationx')]
    public function searchReclamationx(Request $request,NormalizerInterface $Normalizer,ReclamationRepository $sr)
    {
     $repository = $this->getDoctrine()->getRepository(Reclamation::class);
     $requestString=$request->get('searchValue');
     $reclamation = $sr->searchReclamation($requestString);
     $jsonContent = $Normalizer->normalize($reclamation,'json',['groups'=>'reclamation']);
     $retour=json_encode($jsonContent);
    return new Response($retour);
    }



  
    #[Route('/liste', name:'liste')]
    public function getReclamation(ReclamationRepository $reclamationRepository,SerializerInterface $serializerInterface){
        $reclamation=$reclamationRepository->findAll();
        $json=$serializerInterface->serialize($reclamation,'json',['groups'=>'reclamation']);
        //dump($reclamation);
        return new Response($json);
        //die;
    }

    #[Route('/par/{id}', name:'reclamation')]
    public function ReclamationId($id,NormalizerInterface $normalizer,ReclamationRepository $reclamationRepository){
        $reclamation=$reclamationRepository->find($id);
        $reclamationNormalises=$normalizer->normalize($reclamation,'json',['groups'=>"reclamation"]);
        return new Response(json_encode($reclamationNormalises));
    }

    #[Route('/addReclamationJSON/new', name:'addReclamationJSON')]
    public function addReclamationJSON(Request $request, NormalizerInterface $normalizer){
        
        $reclamation=new Reclamation();
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $reclamation -> setIdClient($user);
        $reclamation->setDescription($request->get('description'));
        $reclamation->setObjet($request->get('objet'));
        $reclamation->setNote($request->get('note'));
        $em=$this->getDoctrine()->getManager();
        $em->persist($reclamation);
        $em->flush();
        $jsonContent=$normalizer->normalize($reclamation,'json',['groups'=>'reclamation']);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/updateReclamationJSON/{id}', name:'updateReclamationJSON')]
    public function updateReclamationJSON(Request $request,$id,NormalizerInterface $normalizer){
        $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository(Reclamation::class)->find($id);
        $reclamation->setDescription($request->get('description'));
        $reclamation->setObjet($request->get('objet'));
        $reclamation->setNote($request->get('note'));
        $em->flush();
        $jsonContent=$normalizer->normalize($reclamation,'json',['groups'=>'reclamation']);
        return new Response('Reclamation updated succefully'.json_encode($jsonContent));
    }


    
    #[Route('/deleteReclamationJSON/{id}', name:'deleteReclamationJSON')]
    public function deleteReclamationJSON(Request $request,$id,NormalizerInterface $normalizer){
        $id=$request->get("id");
        $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository(Reclamation::class)->find($id);
        //if($reclamation!=null){
            $em->remove($reclamation);
            $em->flush();
        
        $jsonContent=$normalizer->normalize($reclamation,'json',['groups'=>'reclamation']);
        return new Response('Reclamation delete succefuly'.json_encode($jsonContent));
    }




    #[Route('/sup', name: 'app_reclamation_index1', methods: ['GET'])]
    public function index1(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index1.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

   

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true); 
            return $this->redirectToRoute('app_reclamation_index1', [], Response::HTTP_SEE_OTHER);
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            // gérer les erreurs de validation ici
        }
       
        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Request $request,Reclamation $reclamation): Response
    {

        $evaluation = new Evaluation();
        $evaluation->setReclamation($reclamation);

        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($evaluation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_show', ['id' => $reclamation->getId()]);
        }

        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation -> setIdClient($user);
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation, true);
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/pdf', name: 'app_reclamation_pdf')]
    public function generatePdfAction($id)
    {
    $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);
    $user = $this->getDoctrine()->getRepository('App\Entity\User')->findOneBy(['id' => $reclamation->getIdClient()]);
    
    $reclamation->setClientNom($user ? $user->getNom() : null);
    $reclamation->setClientPrenom($user ? $user->getPrenom() : null);
    
    $html = $this->renderView('reclamation/pdf.html.twig', [
        'reclamation' => $reclamation,
    ]);
    
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    
    $pdf = $dompdf->output();
    
    return new Response($pdf, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="reclamation_'.$reclamation->getId().'.pdf"',
    ]);

    }


    
}
