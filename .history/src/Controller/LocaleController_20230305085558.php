<?php

namespace App\Controller;

use App\Entity\Locale;
use App\Entity\User;
use App\Form\LocaleType;
use App\Repository\LocaleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\LocaleManager;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/locale')]
class LocaleController extends AbstractController
{
    #[Route('/', name: 'app_locale_index', methods: ['GET'])]
    public function index(LocaleRepository $localeRepository): Response
    {
        return $this->render('locale/index.html.twig', [
            'locales' => $localeRepository->findAll(),
        ]);
    }
    
    #[Route('/new', name: 'app_locale_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LocaleRepository $localeRepository): Response
    {
        $locale = new Locale();
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $form = $this->createForm(LocaleType::class,$locale);
        $locale->setIdMecanicien($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $localeRepository->save($locale, true);

            return $this->redirectToRoute('app_locale_index',[], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('locale/new.html.twig', [
            'locale' => $locale,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_locale_show', methods: ['GET'])]
    public function show(Locale $locale): Response
    {
        return $this->render('locale/show.html.twig', [
            'locale' => $locale,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_locale_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Locale $locale, LocaleRepository $localeRepository): Response
    {
        $form = $this->createForm(LocaleType::class, $locale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $localeRepository->save($locale, true);

            return $this->redirectToRoute('app_locale_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('locale/edit.html.twig', [
            'locale' => $locale,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_locale_delete', methods: ['POST'])]
    public function delete(Request $request, Locale $locale, LocaleRepository $localeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$locale->getId(), $request->request->get('_token'))) {
            $localeRepository->remove($locale, true);
        }

        return $this->redirectToRoute('app_locale_index', [], Response::HTTP_SEE_OTHER);
    }



  #[Route('/search', name:'ajax_search', methods: ['GET'])]
  public function searchAction(Request $request,NormalizerInterface $Normalizer)
  {
      $em = $this->getDoctrine()->getManager();

      $requestString = $request->get('q');

      $entities =  $em->getRepository(Locale::class)->findEntitiesByString($requestString);

      if(!$entities) {
          $result['entities']['error'] = "keine Einträge gefunden";
      } else {
          $result['entities'] = $this->getRealEntities($entities);
      }

      return new Response(json_encode($result));

      $repository = $this->getDoctrine()->getRepository(Locale::class);
      $requestString=$request->get('q');
      $students = $sr->findEntitiesByString($requestString);
      $jsonContent = $Normalizer->normalize($students, 'json',['groups'=>'g']);
      $retour=json_encode($jsonContent);
      return new Response($retour);
  }

  public function getRealEntities($entities){

      foreach ($entities as $entity){
          $realEntities[$entity->getId()] = $entity->getAdresse();
      }

      return $realEntities;
  }
}
