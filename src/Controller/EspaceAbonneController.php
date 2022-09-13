<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspaceAbonneController extends AbstractController
{
    /**
     * @Route("/espace-abonne", name="app_espace_abonne")
     */
    public function index(): Response
    {
        return $this->render('espace_abonne/index.html.twig');
    }
}
