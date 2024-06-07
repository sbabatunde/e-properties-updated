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
        $data['property'] = Property::with(['amenities', 'payment', 'auction'])
            // leftjoin('property_payments as pp', 'pp.property_id', '=', 'properties.id')
            // ->leftjoin('property_amenities as pa', 'pa.property_id', '=', 'properties.id')
            ->where('properties.id', $id)->first(); //improve select only required fields
        // dd($data['property']['payment'][0]['initial_pay']);

        // $data['cities']  = City::where('id', $id)->get();
        $data['images'] = SliderImage::where('id', $id)->get(); //improve select only required fields
        $data['amenities'] = PropertyAmenities::where('property_id', $id)->get(); //improve select only required fields

        // $data['property']->id;
        // $data['property']->categories->pluck('id');
        $data['agent'] = User::where('id', $data['property']['agent_id'])->first();
        // dd($data['agent']);
        $data['properties'] = Property::leftjoin('property_payments as pp', 'pp.property_id', '=', 'properties.id')->get();

        $data['categories'] = Category::parent()->select('id', 'slug')->with(['childrens' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['childrens' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();

        // dd($data['property']);
        if (!$data['property']) {
            return redirect()->route('home');
        }
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
        $properties = Property::leftjoin('property_payments as pp', 'pp.property_id', '=', 'properties.id')->get();
        return view('front.users.properties.residential.main-page', compact('properties'));
    }

    public function commercialProperty()
    {
        $properties = Property::leftjoin('property_payments as pp', 'pp.property_id', '=', 'properties.id')->get();

        return view('front.users.properties.commercial.main-page');
    }
}
