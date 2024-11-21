<?php

namespace App\Http\Controllers\Site;

use App\Models\Landlord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review\ProfessionalReview;
use App\Models\Review\PropertyReview;

class LandlordController extends Controller
{
    public function landlordPage()
    {
        $allAgents = Landlord::with(['user','property'])->get()->take(4);
        $reviews = PropertyReview::with(['user','property'])->whereHas('user', function ($query) {
            $query->where('user_type', 'landlord');
        })->get();
        return view('front.users.landlord.index',compact('allAgents','reviews'));
    }

    public function allLanlords()
    {
        $allAgents = Landlord::with(['user','property'])->paginate(8);
        return view('front.users.landlord.pages.all-landlords',compact('allAgents'));
    }
}
