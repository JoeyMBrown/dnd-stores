<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterItem extends Model
{
    use HasFactory;

    /**
     * Get the CharacterInventory that owns the CharacterItem.
     */
    public function inventory(): BelongsTo
    {
        return $this->belongsTo(CharacterInventory::class);
    }

    /**
     * Get the Character associated with the CharacterItem.
     */
    public function character(): HasOne
    {
        return $this->hasOne(Character::class);
    }

    /**
     * Get the Item associated with the CharacterItem.
     */
    public function item(): HasOne
    {
        return $this->hasOne(Item::class);
    }
}
