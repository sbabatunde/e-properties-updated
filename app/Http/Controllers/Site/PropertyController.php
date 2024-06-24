<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Models\City;
use App\Models\Image as SliderImage;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Property;
use App\Models\site\Message;
use Illuminate\Http\Request;
use App\Models\PropertyPayment;
use App\Models\PropertyAmenities;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Drivers\Gd\Driver;

class PropertyController extends Controller
{
    public function propertyById($id)
    {
        $data = [];
        $data['property'] = Property::with(['amenities','agent', 'payment', 'auction'])->where('properties.id', $id)->first(); 
        $data['similarProperties']=Property::with(['amenities','agent', 'payment', 'auction'])
        ->where('type_id', $data['property']->type_id)->take(4)->get();
        
        // dd($data['property']->type_id);
        // if (!$data['property']) {
        //     return redirect()->route('home');
        // }
        // dd($data);
        return view('front.users.properties.home.properties-details', $data);
    }

    public function propertyMessage(Request $request)
    {
        if (Auth::check()) {
            Message::insert([
                'user_id' => Auth::user()->id,
                'agent_id' => $request->agent_id,
                'property_id' =>  $request->property_id,
                'msg_name' => $request->msg_name,
                'msg_email' => $request->msg_email,
                'msg_mobile' => $request->msg_mobile,
                'message' => $request->message,
                'created_at' => Carbon::now(),
            ]);
            Alert::success('message', 'Message sent successfully');

            return redirect()->back();
        } else {
            Alert::error('message', 'Please login with your account first');

            return back();
        }
    }

    public function propertyDetails()
    {
        return view('front.users.properties.home.properties-details');
    }

    public function residentialProperty()
    {
        $salesProperties = Property::leftjoin('property_payments as pp', 'pp.property_id', '=', 'properties.id')->get();
        // dd($properties);
        return view('front.users.properties.residential.main-page', compact('salesProperties'));
    }

    public function commercialProperty()
    {
        $salesProperties = Property::leftjoin('property_payments as pp', 'pp.property_id', '=', 'properties.id')->get();
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->get();
        // dd($liveAuction);
        return view('front.users.properties.commercial.main-page',compact('salesProperties','liveAuction'));
    }
}
