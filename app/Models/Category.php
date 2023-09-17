<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'title_ar',
        'description',
        'description_ar',
        'top',
        'service_id',
    ];

    /**
     * Get the associated service for this model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    /**
     * Get the associated page for this model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function page(): HasMany
    {
        return $this->hasMany(Page::class);
    }
}
