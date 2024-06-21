<?php

namespace App\Http\Controllers\Site\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\BuildingMaterialRequest;
use App\Models\Admin\BuildingMaterial as AdminBuildingMaterial;

class BuildingMaterial extends Controller
{
    public function buildingMaterialForm()
    {
        return view('admin.building-material.main');
    }

    public function buildingMaterialStore(BuildingMaterialRequest $request)
    {
        $material = AdminBuildingMaterial::create([
            'user_id'=>Auth::id(),
            'title'=>$request->title,
            'type'=>$request->type,
            'category'=>$request->category,
            'address'=>$request->address,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'installment'=>$request->installment,
            'description'=>$request->description,
            'thumbnail'=>$request->thumbnail,
        ]);

        Alert::success('Success','Material uploaded successfully');

        return back();
    }
}
