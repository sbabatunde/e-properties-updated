<?php

namespace App\Http\Controllers\Site\Compare;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Compare\Property as CompareProperty;

class PropertyController extends Controller
{
    public function comparePropertyPage()
    {
        if (Auth::id()) {
            $compareList = CompareProperty::with(['property','payment'])->where('user_id', Auth::id())->latest()->get();
            return view('front.users.compare.main-page', compact('compareList'));
        } else {
            Toastr::error('Unauthorized Access!!!', 'You need to login first');
            return back();
        }
    }

    public function GetCompareProperty()
    {
        $compare = CompareProperty::with(['property','payment'])->where('user_id',Auth::id())->latest()->get(); 
        return response()->json($compare);
    }

    public function addPropertyToCompare(Request $request, $property_id)
    {
        if (Auth::check()) {
            // Check if the property is already in the user's compare list
            $exists = CompareProperty::where('user_id', Auth::id())
                                     ->where('property_id', $property_id)
                                     ->first();
            $total = CompareProperty::where('user_id', Auth::id())->count();
            
            if ($exists) {
                // Property already exists in compare list
                return response()->json(['error' => 'This Property is already in your Compare List']);
            } else if ($total == 2){
                 // Property Can't be more than two in compare list
                 return response()->json(['error' => 'Cannot compare more than two properties at the same time.']);
            }
            else {
                // Add property to compare list
                $data = CompareProperty::create([
                    'user_id' => Auth::id(),
                    'property_id' => $property_id,
                    'created_at' => now()
                ]);
                
                return response()->json(['success' => 'Successfully Added to Your Compare List']);
            }
        } else {
            // User is not authenticated
            return response()->json(['error' => 'Unauthorized access, Login First']);
        }
    }
    

    public function removePropertyCompare($id)
    {
        CompareProperty::where('user_id', Auth::id())->where('id', $id)->delete();
        Toastr::success('Success!', 'Property removed from Compare List');
        return back();
    }

    public function clearPropertyCompare($id)
    {
        CompareProperty::where('user_id', $id)->delete();
        // Property already exists in compare list
        return response()->json(['success' => 'Compare List cleared successfully']);
    }

}
