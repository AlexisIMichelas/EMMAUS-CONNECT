<?php

namespace App\Controller;

use App\Entity\Character;
use App\Form\CharacterType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CharacterRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FormController extends AbstractController
{
    #[Route('/questionnaire', name: 'show')]
public function show( Request $request, CharacterRepository $characterRepository): Response
{
    $character = new Character();
    $form = $this->createForm(CharacterType::class, $character);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $characterRepository->save($character, true);

      return $this->redirectToRoute('app_questionnaire_index');
    }

  return $this->render('questionnaire/show.html.twig', [
    'character' => $character,
    'form' => $form,

  ]);
}
}
