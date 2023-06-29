<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LaundingController extends AbstractController
{
    #[Route('/', name: 'app_launding')]
    public function index(): Response
    {
        return $this->render('launding/index.html.twig', [
            'controller_name' => 'laundingController',
        ]);
    }
}
