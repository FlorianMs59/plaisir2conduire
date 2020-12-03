<?php

namespace App\Controller;

use App\Repository\VehiculesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voitures", name="voitures")
     */
    public function index(VehiculesRepository $repository): Response
    {
        $voiture = $repository->findAll();

        return $this->render('voiture/index.html.twig', [
            'voiture' => $voiture,
        ]);
    }
}
