<?php

namespace App\Http\Controllers\Site\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\BuildingCategory;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Admin\BuildingCategoryType;
use App\Http\Requests\BuildingMaterialRequest;
use App\Models\Admin\BuildingMaterial as AdminBuildingMaterial;

class BuildingMaterial extends Controller
{
    public function buildingMaterialForm()
    {
        $materialCategory = BuildingCategory::get();

        return view('admin.building-material.main',compact('materialCategory'));
    }

    public function buidlingTypeSearch($category_slug)
    {
        $items = BuildingCategoryType::where('building_category_slug', $category_slug)->get(); // Fetch items by category ID
        return response()->json($items);
        
    }

    public function buildingMaterialStore(BuildingMaterialRequest $request)
    {
        try {
            $material = AdminBuildingMaterial::create([
                'user_id'=>Auth::id(),
                'title'=>$request->title,
                'type'=>$request->type,
                // 'category'=>$request->category,
                'address'=>$request->address,
                'price'=>$request->price,
                'quantity'=>$request->quantity,
                'installment'=>$request->installment,
                'description'=>$request->description,
                'thumbnail'=>$request->thumbnail,
            ]);
    
            Alert::success('Success','Material uploaded successfully');
    
            return back();
         } catch (\Exception $ex) {
            
            Alert::error('Ooops!!!','Something went wrong');

            return back();
         }
        
    }
}
