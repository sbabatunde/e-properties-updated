<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use RealRashid\SweetAlert\Toaster;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Flasher\Toastr\Laravel\Facade\Toastr;

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

    /**
     * Handle the contact form submission and send an email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactUsForm(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('admin@eproperties.ng ') // Replace with your desired recipient's email address
            ->send(new ContactFormMail($request->name, $request->email, $request->message));
        Toastr::success('Your message has been sent successfully','Success!');
        // Return a response (success message or redirect)
        return back()->with('success', 'Your message has been sent successfully!');
    }
    
}
