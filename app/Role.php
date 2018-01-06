<?php
// @TODO https://medium.com/@ezp127/laravel-5-4-native-user-authentication-role-authorization-3dbae4049c8a
namespace Pichai;

use Illuminate\Database\Eloquent\Model;
use Pichai\RoleUsers as RoleUser;

class Role extends Model
{
    protected $table = "roles";

    protected $fillable = ['name', 'description'];

    public $timestamps = true;

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $dates = ['created_at', 'updated_id'];

    // Relation
    public function roleUsers()
    {
        return $this->hasOne('Pichai\RoleUsers', 'role_id', 'id');
    }

    public function scopeSearchName($query, $search)
    {
        return $query->where('name', 'like', "%{$search}%");
    }
}
