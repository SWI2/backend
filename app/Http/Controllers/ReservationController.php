<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Customer;
use App\Car;
use App\File;
use App\FileGenerators\ReservationAdvanceBillingFileGenerator;
use App\Enums\ReservationState;
use App\Http\Resources\ReservationResource;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{

    /**
     * @return ReservationResource
     */
    public function index()
    {
        return ReservationResource::collection(Reservation::all());
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'name' =>'required' ,
            'email' =>'required|email' ,
            'phone' =>'required' ,
            'from' =>'required' ,
            'to' =>'required' ,
            'note' =>'required' ,
            'car_id' =>'required' ,
        ]);

        $reservation = new Reservation();

        $customer = Customer::firstOrCreate(
            ['email' => $request->email],
            ['name' => $request->name, 'phone' => $request->phone]
        );

        $reservation->rent_date = $reservation->correctDateFormatFromISO8601($request->from);
        $reservation->return_date = $reservation->correctDateFormatFromISO8601($request->to);
        $reservation->note = $request->note;
        $reservation->customer()->associate($customer);
        $reservation->state = ReservationState::Created();

        
        $reservation->car()->associate($car);

        $reservation->save();

        $this->craeteAdvanceBillingFile($reservation);

        return response()
            ->json(['success' => true], Response::HTTP_CREATED);
    }

    private function craeteAdvanceBillingFile(Reservation $reservation) 
    {
        $billing = new ReservationAdvanceBillingFileGenerator($reservation);
        $billing->generate();

        $file = new File();
        $file->name = $billing->fileName();
        $file->absolutePath = $billing->filePath();
        $file->reservation()->associate($reservation);

        $file->save();
    }
}
