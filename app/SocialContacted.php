<?php

namespace Pichai;

use Illuminate\Database\Eloquent\Model;

class SocialContacted extends Model
{
    // TODO table name
    protected $table = "social_contacted";

    // TODO fill table
    protected $fillable = [
        'url', 'title'
    ];
}
