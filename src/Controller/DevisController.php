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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

#[Route('/devis')]
class DevisController extends AbstractController


{#[Route('/', name: 'app_devis_index', methods: ['GET'])]
public function index(Request $request, DevisRepository $devisRepository): Response
{
    $sortOrder = $request->query->get('sort') ?? 'asc'; // default sorting order is ascending
    $devis = $devisRepository->findAllWithSorting($sortOrder);

    $devisWithExpert = array_map(function ($devi) {
        $expert = $this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => $devi->getIdExpert(),'roles'=>"Expert"]);
        $devi->setIdMecanicien($this->getUser());
        if ($expert) {
            $devi->setExpertNom($expert->getNom());
            $devi->setExpertPrenom($expert->getPrenom());
        }
        return $devi;
    }, $devis);
    

    $sortOptions = [
        'asc' => 'Ascending',
        'desc' => 'Descending'
    ];
    $currentSort = $request->query->get('sort');

    return $this->render('devis/index.html.twig', [
        'devis' => $devisWithExpert,
        'sortOptions' => $sortOptions,
        'currentSort' => $currentSort
    ]);
}
    

    #[Route("/allDevis", name: "list")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et devisRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getDevis(DevisRepository $repo, SerializerInterface $serializer)
    {
        $devis = $this->getDoctrine()->getRepository(Devis::class)->findAll();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* deviss en  tableau associatif simple.
        // $devissNormalises = $normalizer->normalize($deviss, 'json', ['groups' => "deviss"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($devissNormalises);

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

    #[Route("/addDevisJSON/new", name: "adddevisJSON")]
    public function adddevisJSON(Request $req, DevisRepository $devisRepository,   normalizerInterface $Normalizer)
    {
        
        $devi = new Devis();
        $devi->setIdexpert(1);
        $user2 = $this->getDoctrine()->getRepository(User::class)->find(2); // get user with ID 1
        $devi->setIdmecanicien($user2);  
        $date = new \DateTime();
            $devi->setDate($date);
            $devisRepository->save($devi, true);
        $deviItem=new DevisItem();
        $devi->addItem($deviItem);
        $deviItem->setDescription($req->get('description'));
        $deviItem->setQuantite($req->get('quantite'));
        $deviItem->setUnitprice($req->get('unitprice'));
        $total=$req->get('quantite')*$req->get('unitprice');
        $deviItem->setTotalprice($total);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($devi);
        $em->flush();

        $em = $this->getDoctrine()->getManager();
        $em->persist($deviItem);
        $em->flush();

        $jsonContent = $Normalizer->normalize([$devi,$deviItem], 'json', ['groups' => 'devisItem','groups' => 'devis']);
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

    #[Route("/updateDevisJSON/{id}", name: "updateDevisJSON")]
    public function updatedevisJSON(Request $req, $id, NormalizerInterface $Normalizer, DevisRepository $devisRepository)
    {

        $em = $this->getDoctrine()->getManager();
        $devis = $em->getRepository(Devis::class)->find($id);
        $devis->setIdexpert(1);
        $user2 = $this->getDoctrine()->getRepository(User::class)->find(2); // get user with ID 1
        $devis->setIdmecanicien($user2);  
        $date = new \DateTime();
            $devis->setDate($date);
            $devisRepository->save($devis, true);

        $em->flush();

        $jsonContent = $Normalizer->normalize($devis, 'json', ['groups' => 'devis']);
        return new Response("devis updated successfully " . json_encode($jsonContent));
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
    $expert = $this->getDoctrine()->getRepository('App\Entity\User')->findOneBy(['id' => $devis->getIdExpert(),'roles'=>"expert"]);
    
    $devis->setExpertNom($expert ? $expert->getNom() :" null");
    $devis->setExpertPrenom($expert ? $expert->getPrenom() : "null");
    
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

   #[Route('/send-mail/{id}', name:'app_send_mail', methods: ['GET'])]
    public function sendMail(Request $request, Devis $devi): Response
    {
        //Create a new PHPMailer instance
        $mail = new PHPMailer();

        //Set the mailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        //SMTP::DEBUG_OFF = off (for production use)
        //SMTP::DEBUG_CLIENT = client messages
        //SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        //Use SMTP authentication
        $mail->SMTPAuth = true;

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Set the username and password to use for SMTP authentication
        $mail->Username = 'wadii.sdouga@esprit.tn';
        $mail->Password = '223JMT7061';

        
// Get the user associated with the mecanicien id
$userRepository = $this->getDoctrine()->getRepository(User::class);
$mecanicien = $userRepository->find($devi->getIdMecanicien());

// Check if the mecanicien user exists and has an email address
if ($mecanicien && $mecanicien->getEmail()) {
    // Set the recipient address using the mecanicien user's email
    $mail->addAddress($mecanicien->getEmail(), 'Mecanicien');
} else {
    // Handle the case where the mecanicien user does not exist or has no email address
    return new Response('Could not send email: invalid mecanicien user');
}
$entityManager = $this->getDoctrine()->getManager();
$expert = $entityManager->getRepository(User::class)->find($devi->getIdExpert());

// Get the expert's email
$expertEmail = $expert->getEmail();
    

 
     //Set who the message is to be sent to
     $mail->addAddress($expertEmail, 'Expert Name');
        //Set who the message is to be sent from
       
        //Set the subject line
        $mail->Subject = 'Devis PDF';

        //Get the PDF content using Dompdf
        $dompdf = new Dompdf();
        $html = $this->renderView('devis/pdf.html.twig', [
            'devi' => $devi,
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdfContent = $dompdf->output();

        //Attach the PDF to the email
        $mail->addStringAttachment($pdfContent, 'Devis.pdf');

        //Set the email body
        $mail->Body = 'Please see the attached PDF for your Devis.';
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
         );
        //Send the email
        if ($mail->send()) {
           
            $this->addFlash('success', 'Email sent successfully');
            return $this->redirectToRoute('app_devis_show', ['id' => $devi->getId()]);
        } else {
  
    $this->addFlash('error', 'Failed to send email');
    return $this->redirectToRoute('app_devis_show', ['id' => $devi->getId()]);
        }
    }

    
}
