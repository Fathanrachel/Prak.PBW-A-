<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillabel =[
        'title',
        'slug',
        'body',
        'teaser',
        'meta_title',
        'meta_description',
    ];
}
