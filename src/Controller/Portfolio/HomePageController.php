<?php

namespace App\Controller\Portfolio;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="app_front_home")
     */
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
}