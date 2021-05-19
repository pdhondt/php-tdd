<?php

namespace App\Controller;

use App\Entity\Room;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        $rooms = $this->getDoctrine()->getRepository(Room::class)->findAll();

        return $this->render('home/index.html.twig', [
            'rooms' => $rooms,
        ]);
    }
}
