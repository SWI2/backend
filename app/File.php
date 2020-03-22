<?php

namespace App;

class File extends BaseModel
{

    public function fileable()
    {
        return $this->morphTo();
    }
}
