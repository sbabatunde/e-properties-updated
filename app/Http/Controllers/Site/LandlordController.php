<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function landlordPage()
    {
        return view('front.users.landlord.index');
    }

    public function allLanlords()
    {
        return view('front.users.landlord.pages.all-landlords');
    }
}
