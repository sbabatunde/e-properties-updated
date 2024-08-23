<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Property;
use App\Models\site\Slider;
use Illuminate\Http\Request;
use App\Models\Site\Blacklist;
use App\Models\Admin\PostMedia;
use App\Models\PropertyPayment;
use App\Models\Site\PropertyType;
use App\Http\Controllers\Controller;
use App\Models\Site\PropertyCategory;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function home()
    {
        $data = [];
        $data['sliders'] = Slider::get(['photo','title']);
        //General statistic of the website
        $data['users'] = User::get();
        $data['landlords'] = User::where('user_type','landlord')->count();
        $data['tenants'] = User::where('user_type','tenant')->count();
        $data['liveAuction'] = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->count();
        $data['sold'] = Property::where('status','Sold')->count();
        $data['rented'] = Property::where('status','Rented')->count();
        // $data['blacklists'] = Blacklist::count();

        //All required data

        // $data['cities'] = City::geProperty::leftjoin('property_payments as pp', 'pp.property_id', '=', 'properties.id')->get();t();
        $data['properties'] = Property::with(['payment'])->take(6)->get();
        $data['minPrice'] = PropertyPayment::orderBy('initial_pay','asc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['maxPrice'] = PropertyPayment::orderBy('initial_pay','desc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['minBedroom'] = Property::orderBy('bedrooms','asc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['maxBedroom'] = Property::orderBy('bedrooms','desc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        $data['propertyDeals'] = Property::has('deals')->with(['deals'])->take(6)->get();
        $data['propertyCategories'] = PropertyCategory::get();
        // dd($data['propertyDeals']);
        $data['category'] = PropertyType::with(['property','propertyCategory'])->whereHas('propertyCategory',function($q){
            $q->where('category_name','Commercial'); })->take(5)->get();
        $data['type'] = PropertyType::with(['property','propertyCategory'])->get();
        $data['trending'] = Property::has('trending')->with(['payment','agent','trending'])->get();
        $data['media'] = PostMedia::with('user')->get();
        $sliders = $data['sliders'];
        // dd($data['properties']);
        return view('front.site', compact('data', 'sliders'));
    }
}
