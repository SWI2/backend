<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public $timestamps = false;

    public function car()
    {
        return $this->hasMany('App\Car');
    }
}
