<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Get the ShopItem that owns the Item.
     */
    public function shopItem(): BelongsTo
    {
        return $this->belongsTo(ShopItems::class);
    }

    /**
     * Get the CharacterItem that owns the Item.
     */
    public function characterItem(): BelongsTo
    {
        return $this->belongsTo(CharacterItem::class);
    }
}
