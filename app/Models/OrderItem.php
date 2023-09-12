<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'quantity',
        'unit_cost',
        'price_modifier'
    ];

    /**
     * Get the Order that owns the OrderItem.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    
    /**
     * Get the Item for the OrderItem.
     */
    public function item(): HasOne
    {
        return $this->hasOne(Item::class);
    }
}
