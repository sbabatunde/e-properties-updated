<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Models\Auction;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\PropertyPayment;
use App\Models\Site\PropertyType;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function propertiesByCategory($category_slug)
    {
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

        
        $respropertyCategories = PropertyType::with(['property','propertyCategory'])
        ->whereHas('propertyCategory',function($q) use($category_slug){
            $q->where('category_slug',$category_slug); })->get();
        return view('front.users.category.all-category',compact('respropertyCategories','data'));
    }

    public function allPropertyCategories()
    { 
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


        $respropertyCategories = PropertyType::with(['property','propertyCategory'])->get();
        return view('front.users.category.all-category',compact('respropertyCategories','data'));
    }

    public function propertyByType($slug)
    {
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

        $salesProperties = Property::with(['type','payment'])->where('status','Sale')
                ->whereHas('type',function($q)use($slug){$q->where('property_type_slug',$slug);})->paginate(6);
        $rentProperties = Property::with(['type','payment'])->where('status','Rent')
        ->whereHas('type',function($q)use($slug){$q->where('property_type_slug',$slug);})->paginate(6);
        $letProperties = Property::with(['type','payment'])->where('status','Let')
        ->whereHas('type',function($q)use($slug){$q->where('property_type_slug',$slug);})->paginate(6);
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->get();

        $similarProperties  = Property::with(['type','payment'])->whereHas('type', function($q) use($slug){
            $q->where('property_type_slug',$slug);
        })->take('3')->get();

        // return view('front.users.category.type.main-page',compact('propertiesSales','propertiesRents','propertiesLets'));

        return view('front.users.properties.commercial.main-page',compact('salesProperties','letProperties'
        ,'rentProperties','liveAuction','similarProperties','data'))->withViewName('vendor.pagination.custom');
    }
}
