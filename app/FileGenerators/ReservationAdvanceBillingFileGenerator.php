<?php

namespace App\FileGenerators;

use App\Reservation;
use Mpdf\Mpdf;
use Illuminate\Support\Facades\Storage;

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
        $content = $mpdf->Output('', \Mpdf\Output\Destination::STRING_RETURN);
        Storage::put($this->absolutePath(), $content);
    }

    protected function fileName()
    {
        return 'AdvanceBilling.pdf';
    }

    protected function directoryPath()
    {
        return '/public/reservations/'.$this->reservation->id;
    }
}