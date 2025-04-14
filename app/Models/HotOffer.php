<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HotOffer extends Model
{
    protected $fillable = ['title'];  // Add other fillable fields as needed

    public function apps()
    {
        return $this->belongsToMany(App::class, 'hot_offer_app')
                    ->withPivot('card')
                    ->withTimestamps();
    }
}

