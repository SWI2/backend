<?php

namespace App;

class Car extends BaseModel
{

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function malfunctions()
    {
        return $this->hasMany('App\Malfunction');
    }

    public function carModel()
    {
        return $this->belongsTo('App\CarModel');
    }
}
