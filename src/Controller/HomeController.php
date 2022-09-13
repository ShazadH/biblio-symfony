<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Repository\LivreRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(LivreRepository $lr): Response
    {
        // dd($lr->findAll());

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            "livres" => $lr->findAll()
        ]);
    }
}
