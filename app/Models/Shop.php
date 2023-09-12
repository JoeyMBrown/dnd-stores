<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'gold',
        'price_modifier'
    ];

    /**
     * Get the character that owns the shop.
     */
    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    /**
     * Get the ShopType for the Shop.
     */
    public function type(): HasOne
    {
        return $this->hasOne(ShopType::class);
    }
}
