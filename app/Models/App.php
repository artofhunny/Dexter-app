<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $table = 'apps';

    protected $fillable = [
        'user_id',
        'app_name',
        'app_icon',
        'app_category',
        'website_url',
        'instagram_url',
        'facebook_url',
        'x_url',
        'app_images',
        'about_intro',
        'about_overview',
        'about_features',
        'about_get_started',
        'app_tags',
        'faq',
        'likes',
        'followers',
        'is_verified',  // Fixed from 'verified' to 'is_verified'
        'seo_title', 
        'seo_description', 
        'seo_keywords',
    ];

    protected $casts = [
        'app_images' => 'array',
        'app_tags' => 'array',
        'faq' => 'array',
        'is_verified' => 'boolean', // Fixed key name
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeVerified($query)
    {
        return $query->where('is_verified', true); // Fixed scope column name
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    
    public function followers()
    {
    return $this->hasMany(Follow::class);
    }

    public function hotOffers()
    {
        return $this->belongsToMany(HotOffer::class, 'hot_offer_app')
                    ->withPivot('card')
                    ->withTimestamps();
    }


    
}
