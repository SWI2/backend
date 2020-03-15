<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    public $timestamps = false;

    public function fileable()
    {
        return $this->morphTo();
    }
}
