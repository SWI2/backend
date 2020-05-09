<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\UserType;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, CastsEnums;

    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'role'
    ];

    /**
     * The attributes which are represented as enum.
     */
    protected $enumCasts = [
        'type' => UserType::class
    ];

    /**
     * The caset of enum values.
     */
    protected $casts = [
        'type' => 'int'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function files()
    {
        return $this->morphMany('App\File', 'fileable');
    }
}
