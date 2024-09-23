<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Landlord;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function landlordPage()
    {
        $allAgents = Landlord::with(['user','property'])->get()->take(4);
        return view('front.users.landlord.index',compact('allAgents'));
    }

    public function allLanlords()
    {
        $allAgents = Landlord::with(['user','property'])->paginate(8);
        return view('front.users.landlord.pages.all-landlords',compact('allAgents'));
    }
}
