<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\Admin\Blacklist;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Yoeunes\Toastr\Facades\Toastr;

class BlacklistController extends Controller
{
    

    public function index()
    {
        $blacklists = Blacklist::with(['reporter','reported','blacklister'])->paginate(10);

        return view('dashboard.blacklist.index',compact('blacklists'));
    }

    public function addToBlacklist(Request $request,$id)
    {
        // Define validation rules
        $rules = [
            'category' => 'required|string',
            'business_name' => 'required|string',
            'org_description' => 'required|string',
            'reason' => 'required|string',
            'reported_by' => 'required',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            // Get the first error message
            $errors = $validator->errors();
            $firstError = $errors->first();

            // Show an alert with the first error message
            Alert::error('Oops!!', $firstError);

            // Optionally, redirect back with errors
            return redirect()->back()->withErrors($errors)->withInput();
        }else{
            $blacklist = Blacklist::create([
                'reported_id' => $id,
                'reporter_id' => $request->reported_by,
                'blacklisted_by' => Auth::id(),
                'business_name' => $request->business_name,
                'category' => $request->category,
                'org_description' => $request->org_description,
                'reason' => $request->reason,
                'reported_on' => $request->reported_on,
                'rating' => $request->rating,
            ]);

            Toastr::success('Sucess','User has been added to blacklist');
            
            return redirect()->back()->with('User has been added to blacklist','Success');

        }
    }

    public function verifyUser($id)
    {
        // Check if a record already exists with the given property_id in Trending table
        $existingTrending = Blacklist::where('id', $id)->update(['status'=>'Verified']);
    
          // Return a JSON response indicating success
          return response()->json(['success' => true]);
    }
 
    public function removeFromBlacklist($id)
    {
       // Check if a record already exists with the given property_id in Trending table
       $existingTrending = Trending::where('property_id', $id)->delete();
          // Return a JSON response indicating success
          return response()->json(['success' => true]);
    }


    public function addToPropertyBlacklist(Request $request,$id)
    {
        $property = Property::findOrFail($id);
        
        $blacklist = Blacklist::create([
            'reported_id' => $property->id,
            'reporter_id' => Auth::id(),
            'blacklisted_by' => Auth::id(),
            'business_name' => $property->title,
            'category' => 'property',
            'org_description' => $property->description,
            'reason' => 'blacklisted',
            'reported_on' => Carbon::now(),
            'rating' =>1,
        ]);

        Toastr::success('Sucess','User has been added to blacklist');
        
        return redirect()->back();

    }
}
