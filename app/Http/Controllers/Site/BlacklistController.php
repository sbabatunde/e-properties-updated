<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlacklistController extends Controller
{
    public function allBlacklist()
    {
        return view('front.users.blacklist.main-page');
    }
}
