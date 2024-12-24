<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Property;
use App\Models\Site\Slider;
use Illuminate\Http\Request;
use App\Models\Site\Blacklist;
use App\Models\Admin\PostMedia;
use App\Models\PropertyPayment;
use App\Models\Site\ServiceType;
use App\Models\Site\PropertyType;
use App\Services\CurrencyService;
use App\Http\Controllers\Controller;
use App\Models\Site\Group;
use App\Models\Site\PropertyCategory;

class HomeController extends Controller
{
    protected $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    
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
        $data['salesProperties'] = Property::with(['payment'])->where('status','Sale')->orderBy('id','desc')->take(8)->get();
        $data['rentProperties'] = Property::with(['payment'])->where('status','Rent')->orderBy('id','desc')->take(8)->get();
        $data['letPerties'] = Property::with(['payment'])->where('status','Let')->orderBy('id','desc')->take(8)->get();
        $data['minPrice'] = PropertyPayment::orderBy('initial_pay','asc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['maxPrice'] = PropertyPayment::orderBy('initial_pay','desc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['minBedroom'] = Property::orderBy('bedrooms','asc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['maxBedroom'] = Property::orderBy('bedrooms','desc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        $data['propertyDeals'] = Property::has('deals')->where('deal','Yes')->with(['deals'])->take(8)->get();
        $data['propertyCategories'] = PropertyCategory::get();
        // dd($data['propertyDeals']);
        $data['category'] = PropertyType::with(['property','propertyCategory'])->whereHas('propertyCategory',function($q){
            $q->where('category_name','Commercial'); })->take(5)->get();
        $data['type'] = PropertyType::with(['property','propertyCategory'])->get();
        $data['trending'] = Property::has('trending')->where(function($q){
                            $q->where('status','Rent')->orwhere('status','Sale')->orwhere('status','Let');
                        })->with(['payment','agent','trending'])->get();
        $data['featured'] = Property::with(['payment','agent'])->where('featured','Yes')
                            ->where(function($q){
                                $q->where('status','Rent')->orwhere('status','Sale')->orwhere('status','Let');
                            })->get();
        $data['media'] = PostMedia::with('user')->where('file_type','video')->get();
        $data['groups'] = Group::withCount(['members', 'posts'])->get();
        $sliders = $data['sliders'];
        $proffessionals = ServiceType::withCount(['providers'])
        ->with('serviceCategory') 
        ->with(['providers' => function($query) {
            $query->withCount('followers'); // Eager load followers count for providers
        }])
        ->whereDoesntHave('serviceCategory', function ($query) {
            $query->where('category', 'Maintenance');
        })->inRandomOrder()->get();

        return view('front.site', compact('data', 'sliders','proffessionals'));
    }
}
