<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'content',
        'location',
        'user_name',
        'user_phone',
        'user_email'
    ];
}
