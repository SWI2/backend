<?php

namespace App\FileGenerators;

use App\Reservation;
use Mpdf\Mpdf;
use Illuminate\Support\Facades\Storage;

class ReservationAdvanceBillingFileGenerator extends FileGenerator
{
    // Properties

    private Reservation $reservation;
    private string $storagePath;

    // Init

    public function __construct(Reservation $reservation, string $storagePath) {
        $this->reservation = $reservation;
        $this->storagePath = $storagePath;
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
        return '/reservations/'.$this->reservation->id;
    }
}