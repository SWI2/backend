<?php

namespace App;

class Customer extends BaseModel
{

    function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
