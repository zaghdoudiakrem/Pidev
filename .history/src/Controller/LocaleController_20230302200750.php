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
    public function new(Request $request, LocaleManager $localeManager, ValidatorInterface $validator): Response
    {
        $locale = new Locale();
        $form = $this->createForm(LocaleType::class, $locale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the address entered by the user
            $address = $form->get('address')->getData();

            // Use Mapbox API to retrieve the latitude and longitude of the address
            $result = $localeManager->getCoordinatesByAddress($address);
            $latitude = $result['latitude'];
            $longitude = $result['longitude'];

            // Set the latitude and longitude of the locale entity
            $locale->setLatitude($latitude);
            $locale->setLongitude($longitude);

            // Validate the locale entity before persisting
            $errors = $validator->validate($locale);
            if (count($errors) > 0) {
                $this->addFlash('error', 'The locale entity is not valid');
                return $this->redirectToRoute('app_locale_new');
            }

            // Persist the locale entity
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($locale);
            $entityManager->flush();

            $this->addFlash('success', 'The locale entity has been created');

            return $this->redirectToRoute('app_locale_index');
        }

        return $this->render('locale/new.html.twig', [
            'locale' => $locale,
            'form' => $form->createView(),
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
}