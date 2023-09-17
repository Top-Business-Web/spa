<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @method static find($page)
 */
class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'top_title',
        'top_title_ar',
        'top_description',
        'top_description_ar',
        'view',
        'down_title',
        'down_title_ar',
        'down_description',
        'down_description_ar',
        'category_id',
    ];

    /**
     * Get the associated category for this model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
