<?php


namespace App\Tests;

use App\Entity\Room;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

//class had to end with Test
class RoomAvailabilityTest extends TestCase
{
    /**
     * function has to start with Test
     */
    public function testPremiumRoom(): void
    {
        $room = new Room(false);
        $user = new User(false);

        $this->assertTrue($room->canBook($user));
    }

}