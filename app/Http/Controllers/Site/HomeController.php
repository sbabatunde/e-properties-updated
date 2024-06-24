<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Property;
use App\Models\Category;
use App\Models\Site\PropertyType;
use App\Models\site\Slider;

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
        // $data['cities'] = City::geProperty::leftjoin('property_payments as pp', 'pp.property_id', '=', 'properties.id')->get();t();
        $data['properties'] = Property::with(['payment'])->take(6)->get();
        $data['category'] = PropertyType::with(['property','propertyCategory'])->whereHas('propertyCategory',function($q){
            $q->where('category_name','Commercial'); })->take(5)->get();

        $sliders = $data['sliders'];
        // dd($data['properties']);
        return view('front.site', compact('data', 'sliders'));
    }
}
