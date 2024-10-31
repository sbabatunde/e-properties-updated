<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Toaster;
use RealRashid\SweetAlert\Facades\Alert;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email input
        try {
            $request->validate([
                'email' => 'required|email|unique:subscribers,email',
            ]);
            // Store the email in the subscribers table
            Subscriber::create([
                'email' => $request->email,
            ]);
    
            // Trigger success message
            Alert::success('Success', 'Thank you for subscribing to our newsletter!');
    
            // Redirect back with a success message
            return back()->with('success', 'Thank you for subscribing to our newsletter!');
        } catch (\Exception $e) {
            // Handle any errors (e.g., database issues)
            Alert::error('Error', 'Something went wrong. Please try again later.');
    
            // Redirect back with an error message
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
    
}
