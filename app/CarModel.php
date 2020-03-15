<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends BaseModel
{
    
    public function car() 
    {
        return $this->hasMany('App\Car');
    }
}
