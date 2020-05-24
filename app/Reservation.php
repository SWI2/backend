<?php

namespace App;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\ReservationState;

class Reservation extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'renter_id', 
        'returner_id', 
    ];

    protected $dates = [
        'rent_date', 
        'return_date'
    ];

    /**
     * The attributes which are represented as enum.
     */
    protected $enumCasts = [
        'state' => ReservationState::class
    ];

    /**
     * The cast of enum values.
     */
    protected $casts = [
        'state' => 'int'
    ];

    public function files()
    {
        return $this->hasMany('App\File');
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

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
