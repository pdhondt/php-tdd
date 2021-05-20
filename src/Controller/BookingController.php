<?php

namespace App\Controller;

use App\Entity\Bookings;
use App\Entity\Room;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookingController extends AbstractController
{
    #[Route('/booking', name: 'booking')]
    public function index(): Response
    {
        return $this->render('booking/index.html.twig', [
            'controller_name' => 'BookingController',
        ]);
    }

    #[Route('/booking/{id}', name: 'booking_room')]
    public function bookRoom($id): Response
    {
        $room = $this->getDoctrine()->getRepository(Room::class)->find($id);

        /** @var User $user */
        $user = $this->getUser();

        $booking = new Bookings();
        $booking->setRoom($room);
        $booking->setUser($user);


        return $this->render('booking/index.html.twig', [
            'room' => $room,
        ]);
    }
}
