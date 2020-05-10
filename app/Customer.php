<?php

namespace App;

class Customer extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'phone'
    ];

    function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
