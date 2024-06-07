<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandController extends Controller
{
    public function landIndex()
    {
        return view('front.users.land.main-page');
    }
}
