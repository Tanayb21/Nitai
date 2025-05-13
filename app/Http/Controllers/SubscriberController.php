<?php
namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        // Validate the email input
        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Store the email in the database
        Subscriber::create([
            'email' => $validated['email'],
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}
