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
use App\Http\Requests\PropertyMessageRequest;
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
        if(Auth::check()){
            $data['user']= User::where('id',Auth::id())->first();

        }
        
        // dd($data['property']->type_id);
        // if (!$data['property']) {
        //     return redirect()->route('home');
        // }
        // dd($data);
        return view('front.users.properties.home.properties-details', $data);
    }

    public function propertyMessage(PropertyMessageRequest $request,$prop_id,$agent_id)
    {
        if (Auth::check()) {
            Message::insert([
                'user_id' => Auth::user()->id,
                'agent_id' => $agent_id,
                'property_id' =>  $prop_id,
                'msg_name' => $request->name,
                'msg_email' => $request->email,
                'msg_phone' => $request->phone,
                'message' => $request->message,
                'created_at' => Carbon::now(),
            ]);
            Alert::success('Success', 'Message sent successfully.');

            return redirect()->back();
        } else {
            Alert::Info('Info', 'Please login with your account first.');

            return back();
        }
    }

    public function propertyDetails()
    {
        return view('front.users.properties.home.properties-details');
    }

    public function propertyCategory($category_slug)
    {
        $salesProperties = Property::with(['type','payment'])
        ->whereHas('type', function($q) use($category_slug){
            $q->where('category_slug',$category_slug);
        })->where('status','Sale')->paginate(6);
        $letProperties = Property::with(['type','payment'])
        ->whereHas('type', function($q) use($category_slug){
            $q->where('category_slug',$category_slug);
        })->where('status','Let')->paginate(6);
        $rentProperties = Property::with(['type','payment'])
        ->whereHas('type', function($q) use($category_slug){
            $q->where('category_slug',$category_slug);
        })->where('status','Rent')->paginate(6);
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->get();

        $similarProperties  = Property::with(['type','payment'])->take('3')->get();
        // dd($similarProperties);
        return view('front.users.properties.commercial.main-page',compact('salesProperties','letProperties'
        ,'rentProperties','liveAuction','similarProperties'))->withViewName('vendor.pagination.custom');
    }

    public function commercialProperty($category_slug)
    {
        $salesProperties = Property::with(['type','payment'])->where('status','Sale')->paginate(6);
        $letProperties = Property::with(['type','payment'])->where('status','Let')->paginate(6);
        $rentProperties = Property::with(['type','payment'])->where('status','Rent')->paginate(6);
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->get();
        // dd($liveAuction);
        return view('front.users.properties.commercial.main-page',compact('salesProperties','letProperties'
        ,'rentProperties','liveAuction'))->withViewName('vendor.pagination.custom');
    }

    public function allPropertyDeals()
    {

    }
}
