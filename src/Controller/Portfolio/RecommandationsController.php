<?php

namespace App\Controller\Portfolio;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecommandationsController extends AbstractController
{
    /**
     * @Route("/recommandations", name="app_portfolio_recommandations")
     */
    public function index(): Response
    {
        return $this->render('portfolio/recommandation.html.twig', [
            'controller_name' => 'RecommandationsController',
        ]);
    }
}