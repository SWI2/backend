<?php

namespace App\FileGenerators;

use App\Reservation;
use Mpdf\Mpdf;

class ReservationAdvanceBillingFileGenerator implements IFileGenerator
{
    // Properties

    public Reservation $reservation;

    // Init

    public function __construct(Reservation $reservation) {
        $this->reservation = $reservation;
    }

    // IFileGenerator

    public function generate()
    {
        $mpdf = new Mpdf();
        $mpdf->WriteHTML('Hello World');
        $mpdf->Output($this->filePath(), \Mpdf\Output\Destination::FILE);
    }

    public function fileName()
    {
        return 'AdvanceBilling';
    }

    public function filePath()
    {
        return storage_path().'/app/reservations/'.$this->reservation->id.'/'.$this->fileName();
    }
}