<?php

use Illuminate\Database\Seeder;
use App\Reservation;
use App\FileGenerators\ReservationAdvanceBillingFileGenerator;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Reservation::class, 3)->create();
        $reservations = Reservation::all();
        foreach ($reservations as $reservation) {
            $generator = new ReservationAdvanceBillingFileGenerator($reservation);
            $file = $generator->generateFile();
            $file->reservation()->associate($reservation);
            $file->save();
        }
    }
}
