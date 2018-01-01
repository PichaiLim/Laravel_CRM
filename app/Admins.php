<?php

namespace Pichai;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Admins extends Model
{
    //
    use Notifiable;

    // TODO Default table name
    protected $table = 'admins';

    // TODO Enable or Disabling Auto Timestamps
    public $timestamps = true;

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    // TODO Providing A Custom Timestamp Format
    // Drop Function error Carbon.php 'trailing data'
    /*protected function getDateFormat()
    {
        return 'U';
    }*/

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name', 'email', 'password'];

    /**
     * Defining Guarded Attributes On A Model
     */
    protected $guarded = ['id', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    # Relation
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function roleUser(){
        return $this->hasOne('Pichai\RoleUsers', 'user_id', 'id');
    }

    # Query
    public function scopeSearchName($query, $search){
        return $query->where('name', 'like', "%{$search}%");
    }

    public function scopePassword($password){
        return bcrypt((empty($password))? $password="password":$password);
    }
}
