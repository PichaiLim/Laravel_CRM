<?php

namespace Pichai;

use Illuminate\Database\Eloquent\Model;
use Pichai\Admins;
use Pichai\Role;

class RoleUsers extends Model
{
    //TODO table name
    protected $table = "role_user";

    protected $fillable = ['role_id', 'user_id'];

    public $timestamps = true;

    protected $dateFormat = "Y-m-d H:i:s";

    protected $guarded = ['id', 'role_id', 'user_id'];

    protected $dates = ['created_at', 'update_at'];

    # Relation model 'Admins'

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin()
    {
        return $this->belongsTo('Pichai\Admins', 'user_id', 'id');
    }

    public function roles()
    {
        return $this->belongsTo('Pichai\Role', 'role_id', 'id');
    }

    public function scopeSearchRoleId($query, $role_id){
        return $query->where('role_id', $this)->get();
    }

}
