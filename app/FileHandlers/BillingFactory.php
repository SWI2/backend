<?php

namespace App\FileHandlers;

use App\Reservation;
use Mpdf\Mpdf;

class BillingFactory
{
    // Properties

    public $reservation;

    // Init

    public function __construct(Reservation $reservation) {
        $this->reservation = $reservation;
    }

    // Make billing

    public function make()
    {
        $mpdf = new Mpdf();
        $mpdf->WriteHTML('Hello World');
        $content = $mpdf->Output(storage_path().'/app/Test.pdf', \Mpdf\Output\Destination::FILE);
        dd($content);
    }
}