<?php
/// App\Models\TopUtility.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopUtility extends Model
{
    protected $fillable = ['app_id', 'position'];
    
    public function app()
    {
        return $this->belongsTo(App::class);
    }
}