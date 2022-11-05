<?php

namespace App\Controller\Leclos;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/leClos", name="app_leClos_home")
     */
    public function index(): Response
    {
        return $this->render('leClos/homepage/home.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
}
