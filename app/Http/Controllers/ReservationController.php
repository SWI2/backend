<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Customer;
use App\Car;
use App\FileHandlers\BillingFactory;
use App\Enums\ReservationState;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations= Reservation::all();

        return response()
            ->json([ 'data' => $reservations ], Response::HTTP_OK);
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

        $reservation->rent_date = $request->from;
        $reservation->return_date = $request->to;
        $reservation->note = $request->note;
        $reservation->customer()->associate($customer);
        $reservation->state = ReservationState::Created();

        $car = Car::find($request->car_id);

        if ($car == null) {
            return response()
                ->json(['message' => 'Car with given ID '.$request->car_id.' does not exist'], Response::HTTP_NOT_FOUND);
        }

        $reservation->car_id = $request->car_id;

        $reservation->save();

        $this->createFile($reservation);

        return response()
            ->json(['success' => true], Response::HTTP_CREATED);
    }

    public function createFile(Reservation $reservation) 
    {
        $billing = new BillingFactory($reservation);
        $billing->make();
    }
}
