<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // Register Method
    public function register(Request $request)
    {
        // Allowed email domains
        $allowedDomains = ['gmail.com', 'hotmail.com'];

        // Validate & sanitize input
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'unique:users,email',
                'max:255',
                function ($attribute, $value, $fail) use ($allowedDomains) {
                    $domain = substr(strrchr(filter_var($value, FILTER_SANITIZE_EMAIL), "@"), 1);
                    if (!in_array($domain, $allowedDomains) && !dns_get_record($domain, DNS_MX)) {
                        $fail("The email domain '$domain' is not allowed.");
                    }
                }
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Prevent XSS attacks
        $name = strip_tags($validated['name']);
        $email = filter_var($validated['email'], FILTER_SANITIZE_EMAIL);
        $password = $validated['password'];

        // Create user securely
        $user = User::create([
            'id' => Str::uuid(),
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        // Auto-login after registration
        // Auth::login($user);

        // Regenerate session for security
        // $request->session()->regenerate();
        

        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    // // login
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|string|min:8',
    //     ]);
    
    //     if (!Auth::attempt($request->only('email', 'password'))) {
    //         return back()->withErrors(['failed' => 'Invalid credentials.']);
    //     }
    
    //     $user = Auth::user();
    
    //     // Debug sessiom
    //     session(['user_id' => $user->id,
    //             'user_name' => $user->name,    
    // ]);
    
    //     // Save session explicitly
    //     session()->save();
    
    //     return redirect()->route('home')->with('success', 'Logged in successfully! Check session in Tinker.');
    // }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:8',
    ]);

    if (!Auth::attempt($request->only('email', 'password'))) {
        return back()->withErrors(['failed' => 'Invalid credentials.']);
    }

    $user = Auth::user();

    // Store user info in session
    session([
        'user_id'   => $user->id,
        'user_name' => $user->name,
    ]);

    // Redirect based on role (optional)
    if ($user->is_admin) {
        return redirect()->route('wa.admin')->with('success', 'Welcome, Admin!');
    }

    return redirect()->intended(route('home'))->with('success', 'Logged in successfully!');
}

    
    
    

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget(['user_id', 'user_name', 'user_email']);
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
    




    //Reset password 


public function showForgotPasswordForm()
{
    return view('auth.forgot-password'); // Create this view file
}

public function sendResetLink(Request $request)
{
    $request->validate(['email' => 'required|email|exists:users,email']);

    $status = Password::sendResetLink($request->only('email'));

    return $status === Password::RESET_LINK_SENT
        ? back()->with('success', 'Password reset link sent to your email.')
        : back()->withErrors(['email' => __($status)]);
}

public function showResetForm($token)
{
    return view('auth.reset-password', ['token' => $token]); // Create this view file
}

public function resetPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required|string|min:8|confirmed',
        'token' => 'required'
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->save();
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('success', 'Password has been reset successfully!')
        : back()->withErrors(['email' => __($status)]);
}
    
}
