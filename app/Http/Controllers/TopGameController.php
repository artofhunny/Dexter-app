<?php

namespace App\Http\Controllers;

use App\Models\TopGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class TopGameController extends Controller
{

    public function create()
    {
        return view('TopGames.TopGames');
    }
    public function store(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'offer_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'offer_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'offer_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'offer_url_1' => 'nullable|url',
        'offer_url_2' => 'nullable|url',
        'offer_url_3' => 'nullable|url',
    ]);

    // Clear existing top games
    TopGame::truncate();

    // Process and store each game slot
    for ($i = 1; $i <= 3; $i++) {
        if ($request->hasFile("offer_image_$i")) {
            $image = $request->file("offer_image_$i");
            $imageName = 'topgame_'.Str::slug($request->input("title_$i", 'game')).'-'.$i.'-'.time().'.'.$image->getClientOriginalExtension();
            
            // Store image
            $imagePath = $image->storeAs('topgames', $imageName, 'public');
                        
            TopGame::create([
                'image' => $imagePath, // Don't store full 'storage/' path here
                'url' => $request->input("offer_url_$i"),
                'position' => $i,
                'title' => $request->input("title_$i"),
                'platform' => $request->input("platform_$i"),
                'price' => $request->input("price_$i"),
                'discount' => $request->input("discount_$i"),
                'is_active' => $request->has("is_active_$i")
            ]);
        }
    }

    return redirect()->back()->with('success', 'Top games saved successfully!');
}
}