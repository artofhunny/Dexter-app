<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use App\Models\HotOffer;


class HotOffersController extends Controller
{
    public function create()
    {
        $apps = App::all();
 


        return view('HotOffers.hot-offers-create', compact('apps'));
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'card_1_app_1' => 'nullable|exists:apps,id',
            'card_1_app_2' => 'nullable|exists:apps,id',
            'card_1_app_3' => 'nullable|exists:apps,id',
            'card_2_app_1' => 'nullable|exists:apps,id',
            'card_2_app_2' => 'nullable|exists:apps,id',
            'card_2_app_3' => 'nullable|exists:apps,id',
            'card_3_app_1' => 'nullable|exists:apps,id',
            'card_3_app_2' => 'nullable|exists:apps,id',
            'card_3_app_3' => 'nullable|exists:apps,id',
        ]);
    
        // Try to find the first HotOffer. If it doesn't exist, create one.
        $hotOffer = HotOffer::first() ?? HotOffer::create([
            'title' => 'Hero Section Offer', // Ensure you have a title
        ]);
    
        // Selected apps for each card (with positions)
        $selectedApps = [
            ['card' => 1, 'apps' => [$request->card_1_app_1, $request->card_1_app_2, $request->card_1_app_3]],
            ['card' => 2, 'apps' => [$request->card_2_app_1, $request->card_2_app_2, $request->card_2_app_3]],
            ['card' => 3, 'apps' => [$request->card_3_app_1, $request->card_3_app_2, $request->card_3_app_3]],
        ];
    
        // Loop through the selected apps and update or attach them
        foreach ($selectedApps as $cardData) {
            $card = $cardData['card'];
            $apps = array_filter($cardData['apps']); // Remove null values from the apps
    
            // First, remove all existing apps for this card
            $hotOffer->apps()->wherePivot('card', $card)->detach();
    
            // Then, reattach the new selected apps for this card and store their positions
            foreach ($apps as $index => $appId) {
                $hotOffer->apps()->attach($appId, ['card' => $card, 'position' => $index + 1]); // Position starts from 1
            }
        }
    
        // Redirect with success message
        return redirect()->route('admin.homepagemenu')->with('success', 'Hot Offer updated successfully!');
    }

    public function updateAppOrder(Request $request)
{
    // Assuming you have an array of app IDs with their new positions and the card
    $request->validate([
        'app_order' => 'required|array', // Array of app IDs with their new positions
    ]);

    foreach ($request->app_order as $appOrderData) {
        $appId = $appOrderData['app_id']; // The app ID
        $position = $appOrderData['position']; // The new position

        // Find the app in the pivot table for the card and update the position
        $hotOfferApp = HotOfferApp::where('app_id', $appId)
                                    ->where('card', $appOrderData['card'])
                                    ->first();
        if ($hotOfferApp) {
            $hotOfferApp->position = $position; // Update the position
            $hotOfferApp->save(); // Save the change
        }
    }

    return edirect()->route('admin.homepagemenu')->with('success', 'Hot Offer updated successfully!');
}

    
}
