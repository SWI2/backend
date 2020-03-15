<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
