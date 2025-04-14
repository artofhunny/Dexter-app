<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class UserController extends Controller{
    public function profile($id)
    {
        // Admins can view any user's profile
        $user = User::findOrFail($id);
        
        return view('Userprofile.Userprofile', compact('user'));
    }
    
    public function updateProfile(Request $request, $id)
    {
        $user = User::findOrFail($id); // Fetch user by ID
    
        // Validate input
        $request->validate([
            'profile_image' => 'nullable|image|max:2048',
            'address' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|string|max:15',
        ]);
    
        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }
    
        // Update user details
        $user->address = $request->address;
        $user->mobile_number = $request->mobile_number;
        $user->save();
    
        return redirect()->route('profile', ['id' => $user->id])->with('success', 'Profile updated successfully!');
    }
    
}