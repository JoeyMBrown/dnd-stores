<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterStats extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'level',
        'experience',
        'health',
        'charisma',
        'strength',
        'wisdom',
        'intelligence',
        'dexterity',
        'constitution'
    ];

    /**
     * Get the Character that owns the CharacterStats.
     */
    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
