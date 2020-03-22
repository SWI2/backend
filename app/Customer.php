<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaseModel;

class Customer extends BaseModel
{
    public $timestamps = false;

    function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
