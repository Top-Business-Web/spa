<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'images',
        'top_title',
        'top_description',
        'down_title',
        'down_description',
        'year',
    ];

    protected $casts = [
        'images' => 'json',
    ];
}
