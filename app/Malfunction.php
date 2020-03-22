<?php

namespace App;

class Malfunction extends BaseModel
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
