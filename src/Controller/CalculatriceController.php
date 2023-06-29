<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CalculatriceController extends AbstractController
{
    #[Route('/calculatrice', name: 'app_calculatrice')]

    public function calculatrice(Request $request): Response
    {
        $ramScores = [
            1 => 30,
            2 => 40,
            3 => 54,
            4 => 65,
            6 => 77,
            8 => 89,
            12 => 101,
        ];

        $storageScores = [
            16 => 31,
            32 => 45,
            64 => 66,
            128 => 82,
            256 => 100,
            512 => 117,
        ];

        $antutuScores = [
            50000 => 40,
            100000 => 44,
            150000 => 49,
            200000 => 53,
            250000 => 58,
            300000 => 62,
            350000 => 67,
            400000 => 71,
            450000 => 76,
            500000 => 80,
            550000 => 85,
            600000 => 89,
            650000 => 94,
            700000 => 98,
            750000 => 103,
            800000 => 107,
            850000 => 112,
            900000 => 116,
            950000 => 121,
            1000000 => 125,
        ];

        $ponderations = [
            "DEEE" => -100,
            "REPARABLE" => -50,
            "BLOQUE" => -10,
            "RECONDITIONABLE" => -5,
            "RECONDITIONNE" => 0,
            "BON ETAT" => 5,
            "TRES BON ETAT" => 10,
        ];

        $ramScore = 0;
        $storageScore = 0;
        $antutuScore = 0;
        $ponderation = 0;
        $finalPrice = 0;

        if ($request->isMethod('POST')) {
            $phoneRam = $request->request->get('phoneRam');
            $phoneStorage = $request->request->get('phoneStorage');
            $phoneAntutu = $request->request->get('phoneAntutu');
            $phoneStatus = $request->request->get('phoneStatus');

            // Calcul du score de la RAM
            $ramScore = $ramScores[$phoneRam] ?? ($phoneRam >= 16 ? 113 : 0);

            // Calcul du score de la mémoire
            $storageScore = $storageScores[$phoneStorage] ?? ($phoneStorage >= 1024 ? 135 : 0);

            // Calcul du score Antutu
            foreach ($antutuScores as $threshold => $score) {
                if ($phoneAntutu < $threshold) {
                    $antutuScore = $score;
                    break;
                }
            }

            // Calcul de la pondération par l'état du téléphone
            $ponderation = $ponderations[$phoneStatus] ?? 0;

            $totalScore = $ramScore + $storageScore + $antutuScore;
            $finalPrice = round($totalScore * (1 + $ponderation / 100), 2);
        }

        return $this->render('Calculatrice/calculatrice.html.twig', [
            'ramScore' => $ramScore,
            'storageScore' => $storageScore,
            'antutuScore' => $antutuScore,
            'ponderation' => $ponderation,
            'finalPrice' => $finalPrice,
        ]);
    }
}
