<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'title',
        'title_ar',
        'address_ar',
        'phone',
        'email',
        'work_hours',
        'map',
        'social_links',
    ];

    protected $casts = [
        'social_links' => 'json',
    ];
}
