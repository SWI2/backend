<?php

namespace App;

class File extends BaseModel
{

    public function reservation()
    {
        return $this->hasOne('App\Reservation', 'reservation_id');
    }
}
