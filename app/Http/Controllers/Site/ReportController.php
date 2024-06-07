<?php

namespace App\Http\Controllers\Site;

use App\Models\City;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\site\ScamReport;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    public function allScamReport()
    {
        $scamReports = ScamReport::get();

        return view('front.forms.scamReport', compact('scamReports'));
    }

    public function scamReport(Request $request)
    {
        if (Auth::id()) {
            $userID = Auth::id();
        } else {
            $userID = null;
        }
        $report = ScamReport::create([
            'name_of_offender' => $request->off_name,
            'business' => $request->off_business,
            'location' => $request->off_location,
            'complaint' => $request->offence,
            'reporter' => $request->reporter,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'user_id' => $userID
        ]);

        Alert::success('Success!', 'Report sent successfully');

        return back();
    }

    // Admin Methods Begins
    public function create()
    {
        return view('admin.properties.create');
    }
}
