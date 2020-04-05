<?php

namespace App;

class Reservation extends BaseModel
{

    protected $fillable = [
        'name', 'email', 'phone', 'from','to', 'note', 'car_id'
    ];

    public $timestamps = false;

    public function files()
    {
        return $this->morphMany('App\File', 'fileable');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function returner()
    {
        return $this->hasOne('App\User', 'returner_id');
    }

    public function renter()
    {
        return $this->hasOne('App\User', 'renter_id');
    }
}
