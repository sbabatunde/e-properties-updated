<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function tenantIndex()
    {
        return view('front.users.tenant.index');
    }
}
