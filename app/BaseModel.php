<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    const CORRECT_DATE_FORMAT = 'Y-m-d H:i:s';
    
    public $timestamps = false;

    public function correctDateFormatFromISO8601(string $isoDate) {
        return date(BaseModel::CORRECT_DATE_FORMAT, strtotime($isoDate));
    }
}
