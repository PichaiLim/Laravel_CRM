<?php

namespace Pichai;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Pichai\Role;

class Admins extends Model
{
    //
    use Notifiable;

    // TODO Default table name
    protected $table = 'admins';

    // TODO Endable or Disabling Auto Timestamps
    public $timestamps = false;

    // TODO Providing A Custom Timestamp Format
    protected function getDateFormat()
    {
        return 'U';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relation
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @param string|array $roles
     * @return bool
     */
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) || 
                    abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) || 
                abort(401, 'This action is unauthorized.');
    }

    /**
     * Check multiple roles
     * @param array $roles
     * @return bool
     */
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    /**
     * Check one role
     * @param string $role
     * @return bool
     */
    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }

    public function scopeSearchName($query, $search){
        return $query->where('name', 'like', "%{$search}%");
    }
}
