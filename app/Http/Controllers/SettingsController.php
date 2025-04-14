<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        // Get settings or create default if none exist
        $settings = Setting::firstOrCreate([], [
            'site_title' => 'My WordPress Site',
            'tagline' => 'Just another WordPress site',
            'wp_url' => url('/'),
            'site_url' => url('/'),
            'admin_email' => 'admin@example.com',
            'users_can_register' => false,
            'default_role' => 'subscriber',
            'timezone' => 'UTC',
            'date_format' => 'F j, Y',
            'time_format' => 'g:i a',
            'start_of_week' => '0'
        ]);

        return view('admin.partials.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'site_title' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'wp_url' => 'required|url',
            'site_url' => 'required|url',
            'admin_email' => 'required|email',
            'users_can_register' => 'boolean',
            'default_role' => 'required|in:subscriber,contributor,author,editor,administrator',
            'timezone' => 'required|string',
            'date_format' => 'required|string',
            'time_format' => 'required|string',
            'start_of_week' => 'required|in:0,1,2,3,4,5,6'
        ]);

        Setting::first()->update($validated);

        return redirect()->route('settings.general')
            ->with('success', 'Settings updated successfully!');
    }
}