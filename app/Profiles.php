<?php

namespace Pichai;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'urls', 'title', 'caption', 'alt_text', 'description', 'last_year', 'status_show'
    ];

}
