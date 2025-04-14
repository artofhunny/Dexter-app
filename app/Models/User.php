<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';  // UUIDs are strings
    public $incrementing = false;   // Disable auto-incrementing

    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'profile_image', 
        'address', 
        'mobile_number',
    ];

    protected static function boot()
    {
        parent::boot();

        // ✅ Generate UUID and ensure it's a string
        static::creating(function ($user) {
            $user->id = Str::uuid()->toString();
        });
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }
    public function follows()
    {
    return $this->hasMany(Follow::class);
    }

}
