<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    use HasFactory;

    /**
     * Get the Item that owns the ItemImage.
     */
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }

    /**
     * Get the Image that owns the ItemImage.
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
