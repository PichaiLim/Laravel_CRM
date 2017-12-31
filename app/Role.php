<?php
// @TODO https://medium.com/@ezp127/laravel-5-4-native-user-authentication-role-authorization-3dbae4049c8a
namespace Pichai;

use Illuminate\Database\Eloquent\Model;
use Pichai\Admins;

class Role extends Model
{
    protected $table = "roles";

    //
    public function admins()
    {
        return $this->belongsToMany(Admins::class);
    }
}
