<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterLocation extends Model
{
    use HasFactory;

    /**
     * Get the Character associated with the CharacterLocation.
     */
    public function character(): HasOne
    {
        return $this->hasOne(Character::class);
    }

    /**
     * Get the Location associated with the CharacterLocation.
     */
    public function location(): HasOne
    {
        return $this->hasOne(Phone::class);
    }
}
