<?php

namespace App;

class Image extends BaseModel
{

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
