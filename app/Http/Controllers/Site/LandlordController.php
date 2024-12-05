<?php

namespace App\Http\Controllers\Site;

use App\Models\Landlord;
use Illuminate\Http\Request;
use App\Models\Site\ServiceType;
use App\Http\Controllers\Controller;
use App\Models\Review\PropertyReview;
use App\Models\Review\ProfessionalReview;

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
        $proffessionals = ServiceType::withCount(['providers'])
        ->with('serviceCategory')
        ->whereDoesntHave('serviceCategory', function ($query) {
            $query->where('category', 'Maintenance');
        })->inRandomOrder()->get();

        $allAgents = Landlord::with(['user','property'])->paginate(8);
        return view('front.users.landlord.pages.all-landlords',compact('allAgents','proffessionals'));
    }
}
