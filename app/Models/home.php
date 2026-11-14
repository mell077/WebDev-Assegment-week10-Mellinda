<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'table_home';

    protected $fillable = [
        'title',
        'category',
        'description',
        'image_url',
    ];
}