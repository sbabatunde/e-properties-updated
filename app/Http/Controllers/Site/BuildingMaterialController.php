<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\BuildingMaterial;
use Illuminate\Http\Request;

class BuildingMaterialController extends Controller
{
    public function getMaterials()
    {
        
        return view('front.users.building-material.view');
    }

    public function buildingMaterials()
    {
        $materials = BuildingMaterial::with(['user','category'])->get();

        return view('front.users.building-material.main',compact('materials'));
    }
    
}
