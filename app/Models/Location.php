<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
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
     * Get the CharacterLocation that owns the Location.
     */
    public function characterLocation(): BelongsTo
    {
        return $this->belongsTo(CharacterLocation::class);
    }

    /**
     * Get the Region associated with the Location.
     */
    public function region(): HasOne
    {
        return $this->hasOne(Region::class);
    }
}
