<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\App;
use App\Models\Contact;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index() // If the method is named "index"
    {
        $users = User::all();
        $contactReq = Contact::all();
        $products = App::all();
        $notVerifiedProducts = App::where('is_verified', false)->count(); // Count unverified products

        return view('adminpanel.adminpanel', compact(['users','products','notVerifiedProducts', 'contactReq'])); // Make sure this view exists
    }   

    public function users()
    {
        $users = User::all();
        return view('adminpanel.partials.users', compact('users'));
    }

    public function applications(){
        return view('adminpanel.partials.applications');
    }


    public function userMain(){
        return view('adminpanel.partials.userMain');
    }

    public function homepagemenu(){
        return view('adminpanel.partials.homepagemenu');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('adminpanel.partials.edit-user', compact('user'));
    }
    

    public function updateUser(Request $request, $id)
    {
    $user = User::findOrFail($id);

    $request->validate([
        'profile_image' => 'nullable|image|max:2048',
        'address' => 'nullable|string|max:255',
        'mobile_number' => 'nullable|string|max:15',
    ]);

    if ($request->hasFile('profile_image')) {
        $path = $request->file('profile_image')->store('profile_images', 'public');
        $user->profile_image = $path;
    }

    $user->address = $request->address;
    $user->mobile_number = $request->mobile_number;
    $user->save();

    return redirect()->route('wa.admin')->with('success', 'User updated successfully!');
    }


    public function products()
    {
        $products = App::all();
        return view('adminpanel.partials.products', compact('products'));
    }

    public function editProduct($id)
    {
        $app = App::findOrFail($id);
    
        // Ensure `faq` is always an array
        $app->faq = is_string($app->faq) ? json_decode($app->faq, true) ?? [] : ($app->faq ?? []);
        
        // Ensure `app_images` is always an array
        $app->app_images = is_string($app->app_images) ? json_decode($app->app_images, true) ?? [] : ($app->app_images ?? []);
        
        // Ensure `app_tags` is always an array
        $app->app_tags = is_string($app->app_tags) ? json_decode($app->app_tags, true) ?? [] : ($app->app_tags ?? []);
    
        return view('adminpanel.partials.edit-product', compact('app'));
    }
    
    public function updateApp(Request $request, $id)
    {
        $app = App::findOrFail($id);
    
        // Validate input data
        $request->validate([
            'app_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'app_name' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s\-_]+$/',
            'app_category' => 'required|in:AI Driven,Airdrop,Arbitrage,Audit,Browser,DAO,Defi,DEX,DIA,Exchange,GameFi,Launchpad,Marketplace,Metaverse,NFT,Play-to-Earn,Research & Analysis,Staking,Swapping,Token,Trading,Use to Earn,Utilities,Wallet',
            'social_media' => 'nullable|url|max:255',
            'website_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'facebook_url' => 'nullable|url|max:255',
            'x_url' => 'nullable|url|max:255',
            'app_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'about_intro' => 'nullable|string|min:10|max:500',
            'about_overview' => 'nullable|string|min:10|max:1000',
            'about_features' => 'nullable|string|min:10|max:1000',
            'about_get_started' => 'nullable|string|min:10|max:1000',
            'app_tags' => 'nullable|string|max:255',
            'faq_question' => 'nullable|array|required_with:faq_answer',
            'faq_question.*' => 'string|max:255',
            'faq_answer' => 'nullable|array|required_with:faq_question',
            'faq_answer.*' => 'string|max:1000',
            'followers' => 'nullable|integer|min:0',
            'likes' => 'nullable|integer|min:0',
            'is_verified' => 'nullable|boolean', // ✅ Correct validation
        ]);
    
        // Handle App Icon Upload
        if ($request->hasFile('app_icon')) {
            if ($app->app_icon) {
                Storage::disk('public')->delete($app->app_icon);
            }
            $app->app_icon = $request->file('app_icon')->store('app_icons', 'public');
        }
    
        // Handle Multiple Image Uploads
        $appImagesPaths = is_string($app->app_images) ? json_decode($app->app_images, true) : ($app->app_images ?? []);
        if ($request->hasFile('app_images')) {
            foreach ($request->file('app_images') as $image) {
                $appImagesPaths[] = $image->store('app_images', 'public');
            }
        }
    
        // Convert tags from a comma-separated string to a JSON array
        $appTags = json_encode(array_filter(array_map('trim', explode(',', $request->app_tags ?? ''))));
    
        // Update App Data
        $app->update([
            'app_name' => $request->app_name,
            'app_category' => $request->app_category,
            'social_media' => $request->social_media,
            'website_url' => $request->website_url,
            'instagram_url' => $request->instagram_url,
            'facebook_url' => $request->facebook_url,
            'x_url' => $request->x_url,
            'about_intro' => strip_tags($request->about_intro),
            'about_overview' => strip_tags($request->about_overview),
            'about_features' => strip_tags($request->about_features),
            'about_get_started' => strip_tags($request->about_get_started),
            'app_images' => json_encode($appImagesPaths),
            'app_tags' => $appTags,  // ✅ Store as JSON
            'faq' => json_encode($this->formatFaq($request->all())),
            'followers' => $request->followers ?? $app->followers,
            'likes' => $request->likes ?? $app->likes,
            'is_verified' => $request->has('is_verified') ? 1 : 0, // ✅ Correctly stored
        ]);
    
        return redirect()->route('admin.app.edit', $id)->with('success', 'App updated successfully!');
    }
    
// Format FAQ data
private function formatFaq(array $data): array
{
    if (!isset($data['faq_question']) || !isset($data['faq_answer'])) {
        return [];
    }

    $faq = [];
    foreach ($data['faq_question'] as $index => $question) {
        if (!empty($question) && !empty($data['faq_answer'][$index])) {
            $faq[] = [
                'question' => $question,
                'answer' => $data['faq_answer'][$index],
            ];
        }
    }
    return $faq;
}

function settings(){
    return view('adminpanel.partials.settings');
}

// Utility controller
 //
 public function createUtility(){
    $apps = App::all();
    return view('TopUtility.topUtility', compact('apps'));
}
    


public function searchApps(Request $request)
{
    $query = $request->query('q');

    // Search for apps based on name or category
    $apps = App::where('app_name', 'like', "%{$query}%")
                ->orWhere('app_category', 'like', "%{$query}%")
                ->limit(10) // Limit search results
                ->get(['id', 'app_name', 'app_category']);

    return response()->json($apps);
}

public function getMultipleAppDetails(Request $request)
{
    $ids = explode(',', $request->query('ids'));

    $apps = App::whereIn('id', $ids)->get([
        'id', 'app_name', 'app_icon', 'app_category', 'about_intro', 'likes'
    ]);

    return response()->json($apps);
}


}