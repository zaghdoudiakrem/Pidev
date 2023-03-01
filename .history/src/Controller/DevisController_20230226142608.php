<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Entity\User;
use Dompdf\Dompdf;
use App\Form\DevisType;
use App\Entity\DevisItem;
use App\Repository\DevisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
#[Route('/devis')]
class DevisController extends AbstractController
{
    #[Route('/', name: 'app_devis_index', methods: ['GET'])]
    public function index(DevisRepository $devisRepository): Response
    {
        $devis = $this->getDoctrine()->getRepository(Devis::class)->findAll();

        $devisWithExpert = array_map(function ($devi) {
            $expert = $this->getDoctrine()->getRepository('App\Entity\User')->findOneBy(['id' => $devi->getIdExpert()]);
            $devi->setIdMecanicien($this->getUser());
            $devi->setExpertNom($expert ? $expert->getNom() : null);
            $devi->setExpertPrenom($expert ? $expert->getPrenom() : null);
            return $devi;
        }, $devis);

        return $this->render('devis/index.html.twig', [
            'devis' => $devisWithExpert,
        ]);
    }

    #[Route("/allDevis", name: "list")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et StudentRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getDevis(DevisRepository $repo, SerializerInterface $serializer)
    {
        $devis = $this->getDoctrine()->getRepository(Devis::class)->findAll();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* students en  tableau associatif simple.
        // $studentsNormalises = $normalizer->normalize($students, 'json', ['groups' => "students"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($studentsNormalises);

        $json = $serializer->serialize($devis, 'json', ['groups' => "devis"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    }

    #[Route('/new', name: 'app_devis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DevisRepository $devisRepository): Response
    {
        $devi = new Devis();
        $devi->setIdexpert(1);
        $user2 = $this->getDoctrine()->getRepository(User::class)->find(2); // get user with ID 1
        $devi->setIdmecanicien($user2);
        $devi->addItem(new DevisItem());
        
        $form = $this->createForm(DevisType::class, $devi);
        $form_id = $form->createView()->vars['id'];
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $date = new \DateTime();
            $devi->setDate($date);
            $devisRepository->save($devi, true);

            return $this->redirectToRoute('app_devis_index', [['id' => $devi->getId()]], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('devis/new.html.twig', [
            'devi' => $devi,
            'form' => $form,
            'form_id'=>$form_id
        ]);
    }

    #[Route("addDevisJSON/new", name: "addStudentJSON")]
    public function addStudentJSON(Request $req,   NormalizerInterface $Normalizer)
    {
        
        $devi = new Devis();
        $devi->setIdexpert(1);
        $user2 = $this->getDoctrine()->getRepository(User::class)->find(2); // get user with ID 1
        $devi->setIdmecanicien($user2);
        $devi->addItem(new DevisItem());
        $date = new \DateTime();
            $devi->setDate($date);
            $devisRepository->save($devi, true);

        $em = $this->getDoctrine()->getManager();

        $em->persist($student);
        $em->flush();

        $jsonContent = $Normalizer->normalize($student, 'json', ['groups' => 'students']);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/{id}', name: 'app_devis_show', methods: ['GET'])]
    public function show(Devis $devi): Response
    {
        return $this->render('devis/show.html.twig', [
            'devi' => $devi,
        ]);
    }
    
    #[Route("/devi/{id}", name: "devi")]
    public function DeviId($id, NormalizerInterface $normalizer, DevisRepository $repo)
    {
        $devis = $repo->find($id);
        
        $devisNormalises = $normalizer->normalize($devis, 'json', ['groups' => "devis"]);
        return new Response(json_encode($devisNormalises));
    }

    #[Route('/{id}/edit', name: 'app_devis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Devis $devi, DevisRepository $devisRepository): Response
    {
        $form = $this->createForm(DevisType::class, $devi);
        $form->handleRequest($request);
        $form_id = $form->createView()->vars['id'];

        if ($form->isSubmitted() && $form->isValid()) {
            $devisRepository->save($devi, true);

            return $this->redirectToRoute('app_devis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('devis/edit.html.twig', [
            'devi' => $devi,
            'form' => $form,
            'form_id'=>$form_id
        ]);
    }

    #[Route('/{id}', name: 'app_devis_delete', methods: ['POST'])]
    public function delete(Request $request, Devis $devi, DevisRepository $devisRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$devi->getId(), $request->request->get('_token'))) {
            $devisRepository->remove($devi, true);
        }

        return $this->redirectToRoute('app_devis_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/pdf', name: 'app_devis_generate_pdf')]
    public function generatePdfAction($id)
{
    $devis = $this->getDoctrine()->getRepository(Devis::class)->find($id);
    
    $html = $this->renderView('devis/pdf.html.twig', [
        'devi' => $devis,
    ]);
    
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    
    $pdf = $dompdf->output();
    
    return new Response($pdf, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="devis_'.$devis->getId().'.pdf"',
    ]);
}
}
