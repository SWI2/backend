<?php

namespace App\FileGenerators;

use App\Reservation;
use Mpdf\Mpdf;

class ReservationAdvanceBillingFileGenerator extends FileGenerator
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
        $this->createDirectoryIfNotExists();
        $mpdf->Output($this->absolutePath(), \Mpdf\Output\Destination::FILE);
    }

    public function fileName()
    {
        return 'AdvanceBilling.pdf';
    }

    public function directoryPath()
    {
        return storage_path().'/app/reservations/'.$this->reservation->id;
    }
}