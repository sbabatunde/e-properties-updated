<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Auction;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\PropertyDeals;
use App\Models\PropertyPayment;
use App\Models\Site\PropertyType;

class PropertyDealsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        // data for form
        $data['minPrice'] = PropertyPayment::orderBy('initial_pay','asc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['maxPrice'] = PropertyPayment::orderBy('initial_pay','desc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['minBedroom'] = Property::orderBy('bedrooms','asc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['maxBedroom'] = Property::orderBy('bedrooms','desc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        $data['type'] = PropertyType::with(['property','propertyCategory'])->get();
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        // /end form data

        $salesProperties = Property::has('deals')->with(['type','payment'])->where('status','Sale')->orderBy('created_at','desc')->paginate(6);
        $rentProperties = Property::has('deals')->with(['type','payment'])->where('status','Rent')->orderBy('created_at','desc')->paginate(6);
        $letProperties = Property::has('deals')->with(['type','payment'])->where('status','Let')->orderBy('created_at','desc')->paginate(6);
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->get();

        $similarProperties  = Property::has('deals')->with(['type','payment'])->orderBy('created_at','desc')->take('3')->get();

        return view('front.users.properties.commercial.main-page',compact('salesProperties','letProperties'
        ,'rentProperties','liveAuction','similarProperties','data'))->withViewName('vendor.pagination.custom');
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyDeals $propertyDeals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyDeals $propertyDeals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyDeals $propertyDeals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyDeals $propertyDeals)
    {
        //
    }
}
