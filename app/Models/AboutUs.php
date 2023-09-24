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
        'top_title_ar',
        'top_description',
        'top_description_ar',
        'down_title',
        'down_title_ar',
        'down_description',
        'down_description_ar',
        'year',
        'top_image'
    ];

    protected $casts = [
        'images' => 'json',
    ];
}
