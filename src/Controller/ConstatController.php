<?php

namespace App\Controller;

use App\Entity\Constat;
use App\Form\ConstatType;
use App\Entity\User;
use App\Entity\Vehicule;
use App\Repository\ConstatRepository;
use App\Service\YousignService;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use DateTime;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;





#[Route('/constat')]
class ConstatController extends AbstractController
{
    #[Route('/', name: 'app_constat_index', methods: ['GET'])]
    public function index(ConstatRepository $constatRepository): Response
    {
        return $this->render('constat/index.html.twig', [
            'constats' => $constatRepository->findAll(),
        ]);
    }

    // Tri
    #[Route('/trier-par-date', name:'constat_sort_by_date')]
     public function sortByDate(ConstatRepository $constatRepository, EntityManagerInterface $entityManager): Response
    {
        $constats = $constatRepository->findAll();
      // Obtenir le QueryBuilder pour l'entité Constat
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->select('c')
                 ->from('App\Entity\Constat', 'c')
                 ->orderBy('c.Date_creation', 'DESC');

      // Exécuter la requête et récupérer les résultats triés
       $constats = $queryBuilder->getQuery()->getResult();

    return $this->render('constat/index.html.twig', [
        'constats' => $constats,
        ]);
    }

    /*#[Route('/filtrer-par-mois/{month}', name: 'constat_filter_by_month')]
    public function filterByMonth(Request $request, ConstatRepository $constatRepository): Response
    {
        $form = $this->createFormBuilder()
            ->add('month', ChoiceType::class, [
                'choices' => [
                    'Janvier' => 1,
                    'Février' => 2,
                    'Mars' => 3,
                    // Ajouter les autres mois ici
                ],
                'placeholder' => 'Sélectionner un mois',
                'required' => true,
            ])
            ->getForm();
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
    
            $constats = $constatRepository->createQueryBuilder('c')
                ->where('MONTH(c.Date_creation) = :month')
                ->setParameter('month', $data['month'])
                ->getQuery()
                ->getResult();
        } 
        else 
        {
            $constats = [];
        }
    
        return $this->render('constat/index.html.twig', [
            'form' => $form->createView(),
            'constats' => $constats,
        ]);
    }*/
    



    #[Route('/new', name: 'app_constat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ConstatRepository $constatRepository,FlashBagInterface $flashBag): Response
    {
        $constat = new Constat();
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find(1);
        $form = $this->createForm(ConstatType::class, $constat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $constat -> setIdExpert($user);
            $constat -> setIdVehicule($vehicule);

            $file = $form->get('photoaccid')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move('C:/xampp/htdocs/PiDEV/public/upload',$fileName);
            $constat->setPhotoaccid("/upload/".$fileName);

            $flashBag->add('success', 'Your action was successful!');
        
            $constatRepository->save($constat, true);
            return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constat/new.html.twig', [
            'constat' => $constat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_constat_show', methods: ['GET'])]
    public function show(Constat $constat): Response
    {
        return $this->render('constat/show.html.twig', [
            'constat' => $constat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_constat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Constat $constat, ConstatRepository $constatRepository,FlashBagInterface $flashBag): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find(1);
        $form = $this->createForm(ConstatType::class, $constat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $constat -> setIdExpert($user);
            $constat -> setIdVehicule($vehicule);        
          
            $file = $form->get('photoaccid')->getData();

            if($file){
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move('C:/xampp/htdocs/PiDEV/public/upload',$fileName);
            $constat->setPhotoaccid("/upload/".$fileName);
        
            }
            else
            {
                $constat->setPhotoaccid($constat->getPhotoaccid());
            }
            $flashBag->add('success', 'Your action was successful!');            

            $constatRepository->save($constat, true);

            return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constat/edit.html.twig', [
            'constat' => $constat,
            'form' => $form,

        ]);
    }

    #[Route('/{id}', name: 'app_constat_delete', methods: ['POST'])]
    public function delete(Request $request, Constat $constat, ConstatRepository $constatRepository,FlashBagInterface $flashBag): Response
    {
        if ($this->isCsrfTokenValid('delete'.$constat->getId(), $request->request->get('_token'))) {
            $constatRepository->remove($constat, true);
        }
        $flashBag->add('success', 'Your action was successful!');

        return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
    } 
     
    //partie PDF
    #[Route('/{id}/pdf', name: 'app_constat_pdf' , methods: ['GET'])]
    public function pdf(Request $request, Constat $constat, ConstatRepository $constatRepository)
    {
        $dompdf = new Dompdf();
        $html = $this->renderView('constat/pdf.html.twig', [
            'constat' => $constat,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $output = $dompdf->output();
        $filename = 'Constat_'.$constat->getId().'.pdf';
        $file = $this->getParameter('kernel.project_dir').'/public/pdf/'.$filename;

        $constat->setPdfSansSignature($filename);
        $constatRepository->save($constat, true);

        file_put_contents($file, $output);

        return $this->redirectToRoute('app_constat_show', ['id' => $constat->getId()],Response::HTTP_SEE_OTHER);

        #dd($html);    
        #return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/signature', name: 'app_constat_signature', methods:['GET'])]
    
    public function signature(Constat $constat, ConstatRepository $constatRepository, YousignService $yousignService): Response
    {
        //1 création de la demande de signature
        $yousignSignatureRequest = $yousignService->signatureRequest();
        $constat->setSignatureId($yousignSignatureRequest['id']);
        $constatRepository->save($constat, true);

        //2 upload du document
        $uploadDocument = $yousignService->addDocumentToSignatureRequest($constat->getSignatureId(), $constat->getPdfSansSignature() );
        $constat->setDocumentId($uploadDocument['id']);
        $constatRepository->save($constat, true);

        //3 ajout des signataires
        $signerId = $yousignService->addSignerToSignatureRequest(
            $constat->getSignatureId(),
            $constat->getDocumentId(),
            $constat->getMail(),
            $constat->getPrenomclientE(),
            $constat->getNomclientE()
        );

        $constat->setSignerId($signerId['id']);
        $constatRepository->save($constat,true);
        

        //4 Envoi de la demande de signature
        $yousignService->activateSignatureRequest($constat->getSignatureId());
        
        return $this->redirectToRoute('app_constat_show', ['id' => $constat->getId()], Response::HTTP_SEE_OTHER);
    }

     //bundle Excel  
    #[Route('/{id}/excel', name: 'app_constat_excel', methods:['GET'])]
    public function exportExcelAction()
    {
    // get the data from your constat
    $constatData = $this->getDoctrine()->getRepository(Constat::class)->findAll();

    // sort the data by name
    usort($constatData, function($a, $b) {
        //return strcmp($a->getDateCreation(), $b->getDateCreation());
        return strcmp($a->getDateCreation()->format('Y-m-d H:i:s'), $b->getDateCreation()->format('Y-m-d H:i:s'));
    });

    // create new spreadsheet
    $spreadsheet = new Spreadsheet();

    // set the worksheet title
    $spreadsheet->getActiveSheet()->setTitle('Constat');

    // add data to the worksheet
    $spreadsheet->getActiveSheet()->setCellValue('A1', 'Nom : ');
    $spreadsheet->getActiveSheet()->setCellValue('B1', 'Prénom :');
    $spreadsheet->getActiveSheet()->setCellValue('C1', 'Type Vehicule : ');
    $spreadsheet->getActiveSheet()->setCellValue('D1', 'Marque Vehicule : ');
    $spreadsheet->getActiveSheet()->setCellValue('E1', 'Assurance Client : ');
    $spreadsheet->getActiveSheet()->setCellValue('F1', 'Adresse Client : ');
    $spreadsheet->getActiveSheet()->setCellValue('G1', 'Emplacement Accident : ');
    $spreadsheet->getActiveSheet()->setCellValue('I1', 'Description Degat : ');
    $spreadsheet->getActiveSheet()->setCellValue('J1', 'Observations : ');
    $spreadsheet->getActiveSheet()->setCellValue('K1', 'Numéro Contrat : ');
    $spreadsheet->getActiveSheet()->setCellValue('L1', 'Email : ');
    $spreadsheet->getActiveSheet()->setCellValue('M1', 'Date Création : ');
    $spreadsheet->getActiveSheet()->setCellValue('N1', 'Id Expert : ');
    $spreadsheet->getActiveSheet()->setCellValue('O1', 'ID Vehicule : ');

    $row = 2;
    foreach($constatData as $constat) {
        $spreadsheet->getActiveSheet()->setCellValue('A'.$row, $constat->getNomClientE());
        $spreadsheet->getActiveSheet()->setCellValue('B'.$row, $constat->getPrenomClientE());
        $spreadsheet->getActiveSheet()->setCellValue('C'.$row, $constat->getTypevehiculeE());
        $spreadsheet->getActiveSheet()->setCellValue('D'.$row, $constat->getMarquevehiculeE());
        $spreadsheet->getActiveSheet()->setCellValue('E'.$row, $constat->getAssuranceclientE());
        $spreadsheet->getActiveSheet()->setCellValue('F'.$row, $constat->getAdresseclientE());
        $spreadsheet->getActiveSheet()->setCellValue('G'.$row, $constat->getEmplacementaccid());
        $spreadsheet->getActiveSheet()->setCellValue('I'.$row, $constat->getDescriptiondegat());
        $spreadsheet->getActiveSheet()->setCellValue('J'.$row, $constat->getObservations());
        $spreadsheet->getActiveSheet()->setCellValue('K'.$row, $constat->getNumcontratE());
        $spreadsheet->getActiveSheet()->setCellValue('L'.$row, $constat->getMail());
        $spreadsheet->getActiveSheet()->setCellValue('M'.$row, $constat->getDatecreation());
        $spreadsheet->getActiveSheet()->setCellValue('N'.$row, $constat->getIdExpert());
        $spreadsheet->getActiveSheet()->setCellValue('O'.$row, $constat->getIdVehicule());



        $row++;
    }

    // save the spreadsheet as a file
    $writer = new Xlsx($spreadsheet);
    $filename = 'constat.xlsx';
    $writer->save($filename);

    // return the file as a response
    return $this->file($filename);
}

 
   


    // partie JSON
    #[Route('/AllConstat', name: 'list')]
    public function index_Json(ConstatRepository $constatRepository,SerializerInterface $serializer): Response
    {
        
            $constats = $constatRepository->findAll();

            $json = $serializer->serialize($constats,'json', ['groups' => "constats"]);        

            return new  Response($json);
       
    }

    #[Route('/addConstatJSON/new', name: 'addConstatJSON')]
    public function new_JSON(Request $request, NormalizerInterface $Normalizer): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find(1);

        $em = $this->getDoctrine()->getManager();
        $constat = new Constat();
        $constat->setNomclientE($request->get('nomclient_e'));
        $constat->setPrenomclientE($request->get('prenomclient_e'));
        $constat->setTypevehiculeE($request->get('typevehicule_e'));
        $constat->setMarquevehiculeE($request->get('marquevehicule_e'));
        $constat->setAssuranceclientE($request->get('assuranceclient_e'));
        $constat-> setAdresseclientE($request->get('adresseclient_e'));
        $constat->setEmplacementaccid($request->get('emplacementaccid'));
        $constat-> setPhotoaccid($request->get('photoaccid'));
        $constat-> setDescriptiondegat($request->get('descriptiondegat'));
        $constat-> setObservations($request->get('observations'));
        $constat-> setNumcontratE($request->get('numcontrat_e'));
        $constat->setMail($request->get('mail'));
        if ($request->get('Date_creation')) {
            $constat->setDateCreation(new DateTime($request->get('Date_creation')));
        }        
    
        $constat -> setIdExpert($user);
        $constat -> setIdVehicule($vehicule);
        $em->persist($constat);
        $em->flush();

        $jsonContent = $Normalizer->normalize($constat, '$json', ['groups' => "constats"]);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/show/{id}', name: 'constat')]
    public function show_JSON($id,NormalizerInterface $normalizer,ConstatRepository $repo): Response
    {
        $constat = $repo->find($id);
        $contstatNormalises = $normalizer->normalize($constat, 'json',['groups' => "constats"]);
        return new Response(json_encode($contstatNormalises));
    }

    #[Route('/updateConstatJSON/{id}', name: 'updateConstatJSON')]
    public function edit_JSON(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find(1);

        $em = $this->getDoctrine()->getManager();
        $constat = $em->getRepository(Constat::class)->find($id);
        $constat->setNomclientE($request->get('nomclient_e'));
        $constat->setPrenomclientE($request->get('prenomclient_e'));
        $constat->setTypevehiculeE($request->get('typevehicule_e'));
        $constat->setMarquevehiculeE($request->get('marquevehicule_e'));
        $constat->setAssuranceclientE($request->get('assuranceclient_e'));
        $constat-> setAdresseclientE($request->get('adresseclient_e'));
        $constat->setEmplacementaccid($request->get('emplacementaccid'));
        $constat-> setPhotoaccid($request->get('photoaccid'));
        $constat-> setDescriptiondegat($request->get('descriptiondegat'));
        $constat-> setObservations($request->get('observations'));
        $constat-> setNumcontratE($request->get('numcontrat_e'));
        $constat-> setIdExpert($request->get('id_expert'));
        $constat->setIdVehicule($request->get('id_vehicule'));
        $constat->setMail($request->get('mail'));
        if ($request->get('Date_creation')) {
            $constat->setDateCreation(new DateTime($request->get('Date_creation')));
        }        
    

        $constat -> setIdExpert($user);
        $constat -> setIdVehicule($vehicule);        

        $em->flush();

        $jsonContent = $Normalizer->normalize($constat, '$json', ['groups' => "constats"]);
        return new Response("Constat updated successfully" . json_encode($jsonContent));
        
    }

    
    #[Route('/deletedConstatJSON/{id}', name: 'deleteConstatJSON')]
    public function delete_JSON($id,Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $constat = $em->getRepository(Constat::class)->find($id);
        $em->remove($constat);
        $em->flush();
        $jsonContent = $Normalizer->normalize($constat, 'json', ['groups' => 'constats']);
        return new Response("Constat deleted successfully" . json_encode($jsonContent));
     }

}
 