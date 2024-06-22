<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
}
