<?php

// app/Http/Controllers/ContactFormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/',
            'location' => 'nullable|string|max:255',
            'purpose' => 'nullable|string|max:1000',
        ]);

        // Create a new contact record in the database
        $contact = new ContactUs;
        $contact->name = $validated['name'];
        $contact->email = $validated['email'];
        $contact->phone_number = $validated['number'] ?? null;
        $contact->location = $validated['location'] ?? null;
        $contact->purpose = $validated['purpose'] ?? null;
        $contact->save();

        // Return a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
