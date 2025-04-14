<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['app_id', 'user_name', 'rating', 'comment'];

    public function app()
    {
        return $this->belongsTo(App::class);
    }
}
