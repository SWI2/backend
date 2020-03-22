<?php

namespace App;

class CarModel extends BaseModel
{

    public function car()
    {
        return $this->hasMany('App\Car');
    }
}
