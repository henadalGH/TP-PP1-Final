<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TurnoController extends AbstractController
{
    #[Route('/', name: 'app_turno')]
    public function index(): Response
    {
        return $this->render('turno/index.html.twig', [
            'controller_name' => 'TurnoController',
        ]);
    }
}
