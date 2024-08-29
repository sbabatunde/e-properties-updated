<?php

namespace App\Http\Controllers\Site;

use App\Models\City;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\site\ScamReport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\ScamReport as MailScamReport;

class ReportController extends Controller
{
    public function allScamReport()
    {
        $scamReports = ScamReport::get();

        return view('front.forms.scamReport', compact('scamReports'));
    }

    public function scamReport(Request $request)
    {
        try{
            DB::transaction( function() use($request){
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
        
                $details = [
                    "reported" => $report['name_of_offender'],
                    "business" => $report['business'],
                    "complaint" => $report['complaint'],
                    "reporter" => $report['reporter'],
                    "email" => $report['email'],
                ];
        
                $to =  ['admin@eproperties.ng'];
                Mail::to($to)
                // ->bcc($cc)
                // ->bcc($bcc)
                ->send(new MailScamReport($details));
                Alert::success('Success!', 'Report sent successfully');
        
            });
        }catch(\Exception $e){
            Alert::error('Error',$e->getMessage());
        }
        
        return back();
    }

    // Admin Methods Begins
    public function create()
    {
        return view('admin.properties.create');
    }
}
