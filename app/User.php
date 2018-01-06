<?php

namespace Pichai;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'address', 'phone', 'avatar', 'gender', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Defining Guarded Attributes On A Model
     */
    protected $guarded = ['id', 'password'];

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;


    public function scopeSearchName($query, $search)
    {
        return $query->where('name', 'like', "%{$search}%");
    }

    public $enumGender = [''=>'None', 'm'=>'Male', 'f'=>'Female'];

    public function scopeGetGenderName($res)
    {
        foreach ($this->enumGender as $item => $value){
            if($res == $item){
                return $value;
            }
        }

        return null;
    }
}
