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
        $form = $this->createForm(LocaleType::class, $locale);
        $form->setIdMecanicien($user);
        $form_id = $form->createView()->vars['id'];
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $localeRepository->save($locale, true);

            return $this->redirectToRoute('app_locale_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('locale/new.html.twig', [
            'locale' => $locale,
            'form' => $form,
            'form_id'=>$form_id
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
