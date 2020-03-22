<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaseModel;

class File extends BaseModel
{

    public $timestamps = false;

    public function fileable()
    {
        return $this->morphTo();
    }
}
