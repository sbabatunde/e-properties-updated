<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as MakeRequest;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RequestController extends Controller
{
    public function makeRequest()
    {
        return view('front.forms.requestForm');
    }

    public function submitRequest(Request $request)
    {
        $request->validate([
            'location' => 'required',
            'area' => 'required',
            'budget' => 'required|numeric',
            'further_info' => 'required',
            'name' => 'required',
            'country' => 'required',
            'phone_no' => 'required|numeric',
            'email' => 'required|email',
            'request_type' => 'required',
            'short_description' => 'required',
        ]);

        MakeRequest::create([
            'location' => $request->location,
            'area' => $request->area,
            'budget' => $request->budget,
            'further_info' => $request->further_info,
            'name' => $request->name,
            'country' => $request->country,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'property_type' => $request->request_type,
            'short_description' => $request->short_description,
        ]);
        Alert::success('Congratulations!', 'Your request has been recorded successfully');

        return back();
    }

    public function allPropertyRquests()
    {
        if (Auth::id()) {
            $propertyRequests  = MakeRequest::get();
            // dd(Auth::id());
            return view('front.users.requests.all', compact('propertyRequests'));
        } else {
            Alert::error('Unuathorized Access!', 'You need to login first');
            return back();
        }
    }
}
