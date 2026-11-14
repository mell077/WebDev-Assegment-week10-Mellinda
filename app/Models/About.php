<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'table_about';

    protected $fillable = [
        'title',
        'author',
        'description',
        'image',
    ];
}