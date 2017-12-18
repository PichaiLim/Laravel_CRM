<?php

namespace Pichai;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    //
    protected $fillable = [
        'image', 'chapter', 'last_year', 'list_index', 'status_show'
    ];
}
