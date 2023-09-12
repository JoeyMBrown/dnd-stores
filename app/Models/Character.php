<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
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
        'alive',
        'npc'
    ];

    /**
     * Get the CharacterStats associated with the Character.
     */
    public function stats(): HasOne
    {
        return $this->hasOne(CharacterStat::class);
    }

    /**
     * Get the CharacterInventory associated with the Character.
     */
    public function inventory(): HasOne
    {
        return $this->hasOne(CharacterInventory::class);
    }

    
    /**
     * Get the CharacterClass associated with the Character.
     */
    public function class(): HasOne
    {
        return $this->hasOne(CharacterClass::class);
    }
    
    /**
     * Get the Race associated with the Character.
     */
    public function race(): HasOne
    {
        return $this->hasOne(Race::class);
    }

    /**
     * Get the CharacterItems for the Character.
     */
    public function items(): HasMany
    {
        return $this->hasMany(CharacterItem::class);
    }

    /**
     * Get the Shops for the Character.
     */
    public function shops(): HasMany
    {
        return $this->hasMany(Shop::class);
    }

    /**
     * Get the Orders for the Character.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
