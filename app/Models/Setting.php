<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_title',
        'tagline',
        'wp_url',
        'site_url',
        'admin_email',
        'users_can_register',
        'default_role',
        'timezone',
        'date_format',
        'time_format',
        'start_of_week'
    ];
}