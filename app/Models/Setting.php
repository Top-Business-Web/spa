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
        'address',
        'phone',
        'email',
        'work_hours',
        'map',
        'social_links',
    ];
}
