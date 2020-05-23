<?php

namespace App\FileGenerators;

use App\Reservation;
use Mpdf\Mpdf;

class ReservationAdvanceBillingFileGenerator extends FileGenerator
{
    // Properties

    private Reservation $reservation;

    // Init

    public function __construct(Reservation $reservation) {
        $this->reservation = $reservation;
    }

    // IFileGenerator

    protected function generate()
    {
        $mpdf = new Mpdf();
        $mpdf->WriteHTML('Hello World');
        $this->createDirectoryIfNotExists();
        $mpdf->Output($this->absolutePath(), \Mpdf\Output\Destination::FILE);
    }

    protected function fileName()
    {
        return 'AdvanceBilling.pdf';
    }

    protected function directoryPath()
    {
        return storage_path().'/app/reservations/'.$this->reservation->id;
    }
}