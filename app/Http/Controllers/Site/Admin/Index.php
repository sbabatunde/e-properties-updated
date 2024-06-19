<?php

namespace App\Http\Controllers\Site\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard.index');
    }
}
