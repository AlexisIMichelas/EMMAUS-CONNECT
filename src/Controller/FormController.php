<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormController extends AbstractController
{
#[Route('/questionnaire', name: 'app_form')]
public function index( Request $request, CharacterRepository $characterRepository): Response
{
  $character = new Character();
  $form = $this->createForm(CharacterType::class, $character);
  $form->handleRequest($request);

  if ($form->isSubmitted() && $form->isValid()) {
    $characterRepository->save($character, true);

    return $this->redirectToRoute('app_character_index');
  }

  return $this->render('questionnaire/index.html.twig', [
    'character' => $character,
    'form' => $form,
  ]);
}
}
