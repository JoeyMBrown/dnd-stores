<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterInventory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'quantity'
    ];

    /**
     * Get the Character associated with the CharacterInventory.
     */
    public function character(): HasOne
    {
        return $this->hasOne(Character::class);
    }

    /**
     * Get the CharacterItems for the CharacterInventory.
     */
    public function items(): HasMany
    {
        return $this->hasMany(CharacterItem::class);
    }
}
