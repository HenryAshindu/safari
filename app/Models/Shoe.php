<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $fillable = [
        'shoe_name',
        'category',
        'price',
        'size',
        'image'
    ];

}
