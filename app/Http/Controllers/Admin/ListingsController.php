<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function myListings()
    {
        return view('dashboard.my-listings.main-page');
    }
}
