<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Follow;



class launchpadController extends Controller
{
    public function launch(Request $request)
    {
        $validatedData = $request->validate([
            'app_icon' => 'required|file|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'app_name' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s\-_]+$/',
            'app_category' => 'required|in:AI Driven,Airdrop,Arbitrage,Audit,Browser,DAO,Defi,DEX,DIA,Exchange,GameFi,Launchpad,Marketplace,Metaverse,NFT,Play-to-Earn,Research & Analysis,Staking,Swapping,Token,Trading,Use to Earn,Utilities,Wallet',
            'social_media' => 'nullable|string|max:255|url',
            'website_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'facebook_url' => 'nullable|url|max:255',
            'x_url' => 'nullable|url|max:255',
            'app_images.*' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'about_intro' => 'nullable|string|min:10|max:500',
            'about_overview' => 'nullable|string|min:10|max:1000',
            'about_features' => 'nullable|string|min:10|max:1000',
            'about_get_started' => 'nullable|string|min:10|max:1000',
            'app_tags' => 'nullable|string|max:255',
            'app_tags.*' => 'required|string|max:50|regex:/^[a-zA-Z0-9\s\-_]+$/',
        
            'faq_question' => 'nullable|array|min:1|required_with:faq_answer',
            'faq_question.*' => 'string|max:255',
            'faq_answer' => 'nullable|array|min:1|required_with:faq_question',
            'faq_answer.*' => 'string|max:1000',
        
            // SEO Fields
            'seo_title' => 'nullable|string|max:60',
            'seo_description' => 'nullable|string|max:160',
            'seo_keywords' => 'nullable|string|max:255',
        ]);
        
    
        // Check if the app already exists for the user
        $existingApp = App::where('user_id', auth()->id())
                          ->where('app_name', $validatedData['app_name'])
                          ->first();
         if ($existingApp) {
            return redirect()->back()->with('error', 'This app already exists under your account.');
         }
                        

    
        // Handle File Upx`x`
        $appIconPath = $request->hasFile('app_icon') 
            ? $request->file('app_icon')->store('app_icons', 'public') 
            : null;
    
        // Handle Multiple Image Uploads
        $appImagesPaths = [];
        if ($request->hasFile('app_images')) {
            foreach ($request->file('app_images') as $image) {
                $appImagesPaths[] = $image->store('app_images', 'public');
            }
        }
    
        // Store Data in Database
        $app = App::create([
            'user_id' => auth()->id(),
            'app_icon' => $appIconPath,
            'app_name' => $validatedData['app_name'],
            'app_category' => $validatedData['app_category'],
            'social_media' => $validatedData['social_media'] ?? null,
            'website_url' => $validatedData['website_url'] ?? null,
            'instagram_url' => $validatedData['instagram_url'] ?? null,
            'facebook_url' => $validatedData['facebook_url'] ?? null,
            'x_url' => $validatedData['x_url'] ?? null,
            'about_intro' => strip_tags($validatedData['about_intro'] ?? ''),
            'about_overview' => strip_tags($validatedData['about_overview'] ?? ''),
            'about_features' => strip_tags($validatedData['about_features'] ?? ''),
            'about_get_started' => strip_tags($validatedData['about_get_started'] ?? ''),
            'app_images' => $appImagesPaths,
            'app_tags' => json_encode(explode(',', $validatedData['app_tags'] ?? '')),
            'faq' => $this->formatFaq($validatedData),
        
            // Save SEO fields
            'seo_title' => $validatedData['seo_title'] ?? null,
            'seo_description' => $validatedData['seo_description'] ?? null,
            'seo_keywords' => json_encode(explode(',', $validatedData['seo_keywords'] ?? '')), 
        ]);
        
        return redirect()->route('home');

    }
    

    /**
     * Format FAQ data before storing it in the database
     */
    private function formatFaq(array $validatedData): array
    {
        if (!isset($validatedData['faq_question']) || !isset($validatedData['faq_answer'])) {
            return [];
        }

        $faq = [];
        foreach ($validatedData['faq_question'] as $index => $question) {
            if (!empty($question) && !empty($validatedData['faq_answer'][$index])) {
                $faq[] = [
                    'question' => $question,
                    'answer' => $validatedData['faq_answer'][$index],
                ];
            }
        }
        return $faq;
    }


    public function toggleFollow(Request $request, $appId)
    {
        $user = Auth::user();

        // Check if the user already follows the app
        $existingFollow = Follow::where('user_id', $user->id)->where('app_id', $appId)->first();

        if ($existingFollow) {
            // If already following, unfollow
            $existingFollow->delete();
            $isFollowing = false;
        } else {
            // If not following, follow
            Follow::create([
                'user_id' => $user->id,
                'app_id' => $appId,
            ]);
            $isFollowing = true;
        }

        // Return updated follow status and count
        return response()->json([
            'is_following' => $isFollowing,
            'follow_count' => Follow::where('app_id', $appId)->count(),
        ]);
    }

}
