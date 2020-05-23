<?php

namespace App;

class File extends BaseModel
{
    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function malfunction()
    {
        return $this->belongsTo('App\Malfunction');
    }
}
