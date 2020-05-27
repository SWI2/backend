<?php

namespace Tests\Feature;

use Tests\SeededTest;
use App\Reservation;
use App\Customer;
use Illuminate\Support\Facades\Storage;

class ReservationControllerTest extends SeededTest
{

    /** @test*/
    public function reservation_create_success()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('api/reservation', [
            'name' => 'Example',
            'email' => 'example@email.com',
            'phone' => '+420123456789',
            'from' => '2020-03-06T19:30Z',
            'to' => '2020-03-06T19:30Z',
            'car_id' => 1
        ]);

        $response->assertStatus(201);
    }

    /** @test*/
    public function reservation_advance_billing_created()
    {
        $this->withoutExceptionHandling();

        $note = uniqid();
        $this->post('api/reservation', [
            'name' => 'Example',
            'email' => 'example@email.com',
            'phone' => '+420123456789',
            'from' => '2020-03-06T19:30Z',
            'to' => '2020-03-06T19:30Z',
            'note' => $note,
            'car_id' => 1
        ]);

        $reservation = Reservation::where('note', $note)->first();

        $path = '/public/reservations/'.$reservation->id.'/AdvanceBilling.pdf';
        $fileExists = Storage::disk('local')->exists($path);

        $this->assertTrue($fileExists);
    }
}
