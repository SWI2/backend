<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malfunction extends Model
{
    public $timestamps = false;

    public function files()
    {
        return $this->morphMany('App\File', 'fileable');
    }

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
