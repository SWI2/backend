<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaseModel;

class Customer extends BaseModel
{
    
    function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
