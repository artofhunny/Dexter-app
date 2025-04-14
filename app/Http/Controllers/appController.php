<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use App\Models\User;
use App\Models\HotOffer;
use App\Models\Contact;
use App\Models\Review;
use App\Models\HotPick;
use App\Models\TopGame;
use App\Models\Follow;
use App\Models\TopUtility;

use Illuminate\Support\Facades\Auth;  // Import Auth facade
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Storage;

class appController extends Controller
{
    //

    public function index()
    {
        $apps = App::all();
        $hotOffers = HotOffer::with('apps')->get(); // Eager load apps for each hot offer
        $topGames = TopGame::orderBy('position')->take(3)->get();
        
        // Add this line to get top utilities
        $topUtilities = TopUtility::with('app')
                        ->orderBy('position')
                        ->take(5)
                        ->get()
                        ->map(function($item) {
                            return $item->app;
                        });

                        // Add this line to get Hot Picks
        $hotPicks = HotPick::with('app')
                    ->orderBy('position')
                    ->take(5)
                    ->get()
                    ->map(function($item) {
                        return $item->app;
                    });

        
        return view('index', compact('apps', 'hotOffers', 'topGames', 'topUtilities', 'hotPicks'));
    }
       //

       public function appView($id) {
        $appDetails = App::find($id);
        $appDetails->app_tags = json_decode($appDetails->app_tags, true);
        $appDetails->reviews = Review::where('app_id', $id)->latest()->get(); // Load user reviews
    
        // Get the logged-in user's ID
        $userId = auth()->id();  // This will get the current authenticated user's ID
    

        $ratingsBreakdown = [
            5 => $appDetails->reviews->where('rating', 5)->count(),
            4 => $appDetails->reviews->where('rating', 4)->count(),
            3 => $appDetails->reviews->where('rating', 3)->count(),
            2 => $appDetails->reviews->where('rating', 2)->count(),
            1 => $appDetails->reviews->where('rating', 1)->count(),
        ];
        

        // Check if the user is following the app
        $isFollowing = Follow::where('user_id', $userId)->where('app_id', $id)->exists();
        $followersCount = Follow::where('app_id', $id)->count();

        $chartData = null;

        if (!empty($appDetails->gecko_id)) {
            $response = Http::get("https://api.coingecko.com/api/v3/coins/{$appDetails->gecko_id}/market_chart", [
                'vs_currency' => 'usd',
                'days' => 7,
                'interval' => 'daily',
            ]);
        
            if ($response->successful() && isset($response['prices'])) {
                $prices = $response['prices'];
        
                $labels = [];
                $priceData = [];
        
                foreach ($prices as $pricePoint) {
                    $labels[] = date('M d', $pricePoint[0] / 1000);
                    $priceData[] = $pricePoint[1];
                }
        
                $chartData = [
                    'labels' => $labels,
                    'upper_band' => array_map(fn($p) => $p * 1.05, $priceData),
                    'lower_band' => array_map(fn($p) => $p * 0.95, $priceData),
                ];
            }
        }

        $tokenStats = [];
        if ($appDetails->gecko_id) {
            $response = Http::get("https://api.coingecko.com/api/v3/coins/{$appDetails->gecko_id}");
            if ($response->successful()) {
                $data = $response->json();
                $tokenStats = [
                    'market_cap_usd' => $data['market_data']['market_cap']['usd'] ?? null,
                    'total_volume_usd' => $data['market_data']['total_volume']['usd'] ?? null,
                    'fully_diluted_valuation' => $data['market_data']['fully_diluted_valuation']['usd'] ?? null,
                    'circulating_supply' => $data['market_data']['circulating_supply'] ?? null,
                    'max_supply' => $data['market_data']['max_supply'] ?? null,
                    'publisher' => $data['asset_platform_id'] ?? 'Unknown', // fallback if publisher is not available
                ];
            }
        }

        
                
        return view('viewApp', compact(['appDetails', 'isFollowing','followersCount','ratingsBreakdown', 'chartData','tokenStats']));  // Pass $isFollowing to the view
    }
    
    

    // public function appView($id) {
    //     $appDetails = App::find($id);
    //     $appDetails->app_tags = json_decode($appDetails->app_tags, true);
    //     $appDetails->reviews = Review::where('app_id', $id)->latest()->get(); // Load user reviews
    
    //     return view('appView', compact('appDetails'));
    // }
    public function dashboard($id) {
        $user = User::find($id);
        $appDetails = App::where('user_id', $id)->get(); // Fetch all apps for the user
        return view('Dashboard.dashboard', compact(['user', 'appDetails']));
    }


    public function submitReview(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
        ]);
    
        // Store review
        Review::create([
            'app_id' => $id,
            'user_name' => auth()->user()->name ?? 'Anonymous',
            'rating' => $request->rating,
            'comment' => $request->review,
        ]);
    
        // Ensure the ratings update correctly
        $this->updateAppRatings($id);
    
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
    
    
    private function updateAppRatings($appId)
    {
    $averageRating = Review::where('app_id', $appId)->avg('rating') ?? 0;
    $totalReviews = Review::where('app_id', $appId)->count();

    App::where('id', $appId)->update([
        'average_rating' => $averageRating,
        'total_reviews' => $totalReviews
    ]);
    }



    public function toggleFollow($appId)
    {
        $user = Auth::user();
    
        // Check if the user is already following this app
        $follow = Follow::where('user_id', $user->id)->where('app_id', $appId)->first();
    
        if ($follow) {
            // If the user is following, delete the follow record
            $follow->delete();
            $followStatus = false;
        } else {
            // If the user is not following, create a new follow record
            Follow::create([
                'user_id' => $user->id,
                'app_id' => $appId
            ]);
            $followStatus = true;
        }
    
        // Redirect back to the app's page with the updated follow status
        return redirect()->route('app.view', ['id' => $appId])
            ->with('followStatus', $followStatus); // Pass follow status to the view
    }
    

}
    



    
