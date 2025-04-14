<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'featured_image', 'tags', 'status',
        'scheduled_at', 'user_id', 'allow_comments', 'is_featured', 'meta_title', 'meta_description'
    ];


    protected $casts = [
        'categories' => 'array',
        'tags' => 'array',
        'scheduled_at' => 'datetime',
        'allow_comments' => 'boolean',
        'is_featured' => 'boolean'
    ];

    // Generate Slug Automatically
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (!$post->slug) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
