<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\BuildingMaterial;
use App\Models\Admin\BuildingCategoryType;

class BuildingMaterialController extends Controller
{
    public function getMaterials($id)
    {
        $material = BuildingMaterial::with(['user','category','type'])->where('id',$id)->first();
        // dd($material);
        // Generate the material URL
        $materialUrl = route('user.materials.get', ['id' => $id]);

        // Create share links
        $share = new Share;
        $shareLinks = $share->page($materialUrl, $material->title)
                            ->facebook()
                            ->twitter()
                            ->linkedin()
                            ->telegram()
                            ->whatsapp()        
                            ->reddit()
                            ->getRawLinks();
        $similarMaterial = BuildingMaterial::with(['user','category','type'])
        ->where('type',$material->type)->where('id','<>',$id)->orderBy('created_at','desc')->get()->take(4);

        return view('front.users.building-material.view',compact('material','shareLinks','similarMaterial'));
    }

   

    public function buildingMaterials()
    {
        $materials = BuildingMaterial::with(['user','category','type'])->get();
        $types = BuildingCategoryType::withCount('materials')
                ->orderBy('materials_count', 'desc') // or 'desc' for descending order
                ->take(15)
                ->get();

        return view('front.users.building-material.main',compact('materials','types'));
    }

    public function checkboxSearch(Request $request)
    {
        // Get the slugs from the request
        $slugs = $request->input('slug');

        // Fetch materials based on the slugs
        $materials = BuildingMaterial::where('type', $slugs)->get();

        // Return JSON response
        return response()->json($materials);
    }
    
    public function Search(Request $request)
    {
        // Get the slugs from the request
        $slugs = $request->input('slug');

        // Fetch materials based on the slugs
        $materials = BuildingMaterial::where('type', $slugs)->get();

        // Return JSON response
        return response()->json($materials);
    }
    
}
