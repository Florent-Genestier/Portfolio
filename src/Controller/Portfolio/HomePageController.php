<?php

namespace App\Controller\Portfolio;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="app_portfolio_home")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }
}