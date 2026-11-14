<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'table_blog';

    protected $fillable = [
        'title',
        'date',
        'description',
        'image',
    ];
}