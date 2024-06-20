<?php

namespace App\Http\Controllers\Site\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuildingMaterialRequest;
use App\Models\Admin\BuildingMaterial as AdminBuildingMaterial;
use Illuminate\Http\Request;

class BuildingMaterial extends Controller
{
    public function buildingMaterialForm()
    {
        return view('admin.building-material.main');
    }

    public function buildingMaterialStore(BuildingMaterialRequest $request)
    {
        dd($request->all());
        $material = AdminBuildingMaterial::create([
            'title'=>$request->title,
            'category'=>$request->category,
            'address'=>$request->address,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'installment'=>$request->installment,
            'description'=>$request->description,
            'thumbnail'=>$request->thumbnail,
        ]);
    }
}
