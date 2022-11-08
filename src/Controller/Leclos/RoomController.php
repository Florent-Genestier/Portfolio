<?php

namespace App\Controller\Leclos;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("Leclos/room", name="app_leClos_room")
 */
class RoomController extends AbstractController
{
    /**
     * @Route("/room", name="_index")
     */
    public function index(): Response
    {
        return $this->render('leClos/room/index.html.twig', [
            'controller_name' => 'RoomController',
        ]);
    }
}
