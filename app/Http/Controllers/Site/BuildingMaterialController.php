<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuildingMaterialController extends Controller
{
    public function getMaterials()
    {
        return view('front.users.building-material.view');
    }

    public function buildingMaterials()
    {
        return view('front.users.building-material.main');
    }
}
