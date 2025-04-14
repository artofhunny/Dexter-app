<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Import the model (if using a database)
use Illuminate\Support\Facades\Mail; // Import Mail if sending emails

class ContactController extends Controller
{
    // Show the Contact Form (if needed)
    public function showForm()
    {
        return view('adminpanel.partials.contactRequest'); // Ensure you have a 'contact.blade.php' file
    }

    // Handle Form Submission
    public function storeContact(Request $request)
    {
        // Validate the request
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'app_name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // Option 1: Store in the Database (if needed)
        Contact::create($request->all());

        // Option 2: Send Email (if needed)
        // Mail::to('abhaydelkumar@gmail.c')->send(new ContactMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }

    
    public function showRequests()
    {
        $requests = Contact::latest()->paginate(10); // Fetch latest requests with pagination
        return view('adminpanel.partials.contactRequest', compact('requests'));
    }

}
