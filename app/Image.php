<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends BaseModel
{
    
    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
