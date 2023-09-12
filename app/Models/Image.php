<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'storage_path'
    ];

    /** TODO: Revisit
     * Get the item that owns the image.
     */
    public function item(): BelongsTo
    {
        return $this->belongsTo(ItemImage::class);
    }
}
