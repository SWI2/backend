<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Customer;

class ReservationController extends Controller
{
    //
    public function index()
    {
        $reservations= Reservation::all();

        return response()->json([ 'data' => $reservations ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'name' =>'required' ,
            'email' =>'required' ,
            'phone' =>'required' ,
            'from' =>'required' ,
            'to' =>'required' ,
            'note' =>'required' ,
            'car_id' =>'required' ,
        ]);

        $reservation = new Reservation();

        $customer = Customer::where('email', $request->email)->findOr(function () {
            $newCustomer = new Customer();
            $newCustomer->email = $request->email;
            $newCustomer->phone = $request->phone;
        });

        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->from = $request->from;
        $reservation->to = $request->to;
        $reservation->note = $request->note;
        $reservation->car_id = $request->car_id;

        return response()
            ->json(['success' => true], 201);
    }

    /*public function show($id)
    {
        $reservation = Reservation::find($id);

        return response()->json([ 'data' => $reservation ], 200);
    }

    public function insert(Request $request)
    {
        print_r($request->input('id'));
    }

    public function store(Request $request)
    {
        $values = $request->only( 'name', 'email', 'phone', 'from','to', 'note', 'car_id');

        $eservation = Reservation::create($values);

        return response()->json(['message' => 'Reservation is correctly added'], 201);
    }

    public function update(Request $request, $id)
    {
        $reservation= Reservation::find($id);
        $reservation->save();

        return response()->json(['message' => 'The reservation has been updated'], 200);
    }

    public function destroy($id)
    {
        $reservation= Reservation::find($id);

        return response()->json([ 'message' => 'The reservation has been deleted'], 200);
    }*/
}
