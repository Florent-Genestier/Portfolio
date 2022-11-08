<?php

namespace App\Controller\Portfolio;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PictureProjectsController extends AbstractController
{
    /**
     * @Route("/PictureProjects", name="app_portfolio_pictureProjects")
     */
    public function index(): Response
    {
        return $this->render('portfolio/pictureProjects.html.twig', [
            'controller_name' => 'PictureProjectsController',
        ]);
    }
}