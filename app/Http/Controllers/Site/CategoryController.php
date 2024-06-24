<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Site\PropertyType;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $respropertyCategories = PropertyType::with(['property','propertyCategory'])->whereHas('propertyCategory',function($q){
            $q->where('category_name','Residential'); })->get();
        return view('front.users.category.all-category',compact('respropertyCategories'));
    }

    public function propertyByType($slug)
    {
        $propertiesSales = Property::with(['type','payment'])->where('status','Sale')
                ->whereHas('type',function($q)use($slug){$q->where('property_type_slug',$slug);})->get();
        $propertiesRents = Property::with(['type','payment'])->where('status','Rent')
        ->whereHas('type',function($q)use($slug){$q->where('property_type_slug',$slug);})->get();
        $propertiesLets = Property::with(['type','payment'])->where('status','Let')
        ->whereHas('type',function($q)use($slug){$q->where('property_type_slug',$slug);})->get();

        return view('front.users.category.type.main-page',compact('propertiesSales','propertiesRents','propertiesLets'));
    }
}
