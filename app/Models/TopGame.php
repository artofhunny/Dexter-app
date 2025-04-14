<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'url',
        'position',
        'platform',
        'price',
        'discount',
        'is_active'
    ];

    /**
     * Get the image URL (accessor)
     */
    public function getImageUrlAttribute()
    {
        return asset($this->image);
    }

    /**
     * Get the discounted price (accessor)
     */
    public function getDiscountedPriceAttribute()
    {
        if ($this->discount && $this->price) {
            return $this->price - ($this->price * $this->discount / 100);
        }
        return $this->price;
    }

    /**
     * Scope for active games
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope ordered by position
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('position');
    }
}