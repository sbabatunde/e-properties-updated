<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blacklist;
use Illuminate\Http\Request;

class BlacklistController extends Controller
{
    public function allBlacklist()
    {
        $blacklisted = Blacklist::with(['reporter','reported','blacklister'])->get();

        return view('front.users.blacklist.main-page');
    }

    public function index()
    {
        $blacklists = Blacklist::with(['reporter','reported','blacklister'])->paginate(10);

        return view('dashboard.blacklist.index',compact('blacklists'));
    }

    public function create()
    {
        
        return view('dashboard.blacklist.create');
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
}
