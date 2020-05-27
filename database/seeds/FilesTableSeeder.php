<?php

use Illuminate\Database\Seeder;
use App\File;
use App\Reservation;
use App\FileGenerators\ReservationAdvanceBillingFileGenerator;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations = Reservation::all();
        foreach ($reservations as $reservation) {
            $generator = new ReservationAdvanceBillingFileGenerator($reservation);
            $file = $generator->generateFile();
            $file->reservation()->associate($reservation);
            $file->save();
        }
    }
}
