<?php

namespace App;

use App\FileGeneratos\FileGenerator;

class File extends BaseModel
{
    // Relationships

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
