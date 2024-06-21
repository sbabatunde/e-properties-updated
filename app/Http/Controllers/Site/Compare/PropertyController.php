<?php

namespace App\Http\Controllers\Site\Compare;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Compare\Property as CompareProperty;
use RealRashid\SweetAlert\Facades\Alert;

class PropertyController extends Controller
{
    public function comparePropertyPage()
    {
        if (Auth::id()) {
            $compare = CompareProperty::with('property')->where('user_id', Auth::id())->latest()->get();
            return view('front.users.compare.main-page', compact('compare'));
        } else {
            Alert::error('Unauthorized Access!!!', 'You need to login first');
            return back();
        }
    }

    public function GetCompareProperty()
    {
        $compare = CompareProperty::with('property')->where('user_id',Auth::id())->latest()->get(); 
        return response()->json($compare);
    }

    public function addPropertyToCompare(Request $request, $property_id)
    {
        if (Auth::check()) {
            return response()->json(['success' => 'Successfully Added On Your Compare']);

            $exists = CompareProperty::where('user_id', Auth::id())->where('property_id', $property_id)->first();
            if (!$exists) {
                CompareProperty::insert([
                    'user_id' => Auth::id(),
                    'property_id' => $property_id,
                    'created_at' => Carbon::now()
                ]);
                return response()->json(['success' => 'Successfully Added On Your Compare']);
            }else{
                return response()->json(['error' => 'This Property Has Already in your CompareList']);
            }
        }else{
            return response()->json(['error' => 'At First Login Your Account']);
        }
    }

    public function removePropertyCompare($id)
    {
        CompareProperty::where('user_id', Auth::id())->where('id', $id)->delete();
        Alert::success('Success!', 'Property removed from Compare List');
        return back();
    }
}
