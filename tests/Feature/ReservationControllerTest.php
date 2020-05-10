<?php

namespace Tests\Feature;

use Tests\SeededTest;
use App\Reservation;

class ReservationControllerTest extends SeededTest
{

    /** @test*/
    public function reservation_create_success()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('api/reservation', [
            'name' => 'Robo Oravec',
            'email' => 'roravec141@gmail.com',
            'phone' => '+420123456789',
            'from' => '2020-03-06T19:30Z',
            'to' => '2020-03-06T19:30Z',
            'note' => 'Some note',
            'car_id' => 1
        ]);

        $response->assertStatus(201);
    }
}
