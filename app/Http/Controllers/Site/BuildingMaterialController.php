<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;
use App\Models\Site\ServiceType;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\BuildingCategory;
use App\Models\Admin\BuildingMaterial;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Review\ProfessionalReview;
use App\Models\Admin\BuildingCategoryType;
use App\Models\Site\BuildingMaterialComment;

class BuildingMaterialController extends Controller
{

    public function index(Request $request)
    {
        // Fetch all materials with pagination
        $materials = BuildingMaterial::paginate(8); // Adjust the number per page as needed

        return view('front.users.building-material.index', compact('materials'));
    }

    public function getMaterials($id)
    {
        $material = BuildingMaterial::with(['user','category','type'])->where('id',$id)->first();
        // dd($material);
        // Generate the material URL
        $materialUrl = route('user.materials.get', ['id' => $id]);
        $reviews =  BuildingMaterialComment::where('material_id',$id)->orderBy('id','desc')->get();
        // dd($reviews);
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

        return view('front.users.building-material.view',compact('material','reviews','shareLinks','similarMaterial'));
    }

    public function buildingMaterials()
    {
        $materials = BuildingCategoryType::with(['materials','category'])->get(); // Fetch the categories from the BuildingCategory model
        $categories = BuildingCategory::all(); // Adjust this if you need to filter or sort categories
        $categories = BuildingCategoryType::with(['materials', 'category'])->get()->groupBy(function ($item) {
            return $item->category->slug; // Group by category slug (or any other category attribute)
        });
        
        $latest = BuildingMaterial::with('type')->orderBy('created_at')->take(8)->get();
        $types = BuildingCategoryType::withCount('materials')
                ->orderBy('materials_count', 'desc') // or 'desc' for descending order
                ->take(15)
                ->get();
        $proffessionals = ServiceType::withCount(['providers'])
        ->with('serviceCategory')
        ->whereDoesntHave('serviceCategory', function ($query) {
            $query->where('category', 'Maintenance');
        }) ->inRandomOrder() // This will randomize the order
        ->get();

        return view('front.users.building-material.main',compact('materials','latest','proffessionals','types','categories'));
    }

    public function checkboxSearch(Request $request)
    {
        // Get the slugs from the request
        $slugs = $request->input('slug');

        // Fetch materials based on the slugs
        $materials = BuildingMaterial::where('type', $slugs)->get();
        $typeName = BuildingCategoryType::where('slug', $slugs)->value('type'); 
        // Return JSON response
        return response()->json([
            'materials' => $materials,
            'type' => $typeName // Return the category name
        ]);
    }
    
    public function fetchMaterialsByCategory(Request $request)
    {
        // Get the category slug from the request
        $categorySlug = $request->query('category');

        // Fetch materials based on the selected category
        $materials = BuildingCategoryType::with(['materials', 'category'])
            ->where('building_category_slug', $categorySlug)
            ->get();

        // Fetch the category name, it will be the same even if no materials are found
        $categoryName = BuildingCategory::where('slug', $categorySlug)->value('category'); 

        // Prepare materials for response
        $formattedMaterials = [];
        foreach ($materials as $type) {
            foreach ($type->materials as $material) {
                $formattedMaterials[] = [
                    'id' => $material->id,
                    'thumbnail' => $material->thumbnail,
                    'title' => $material->title,
                    'price' => $material->price,
                    'quantity' => $material->quantity,
                    'state' => $material->state ?? 'Lagos',
                    'slug' => $material->slug, // Ensure you have this field
                    'category' => $categoryName // Use the fetched category name
                ];
            }
        }

        return response()->json([
            'materials' => $formattedMaterials,
            'category' => $categoryName // Return the category name
        ]);
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

    public function materialReview(Request $request, $id)
    {
        if(auth::id())
        {
            $user_id = auth::id();
        }
        else{
            $user_id = null;
        }
        
        $review = BuildingMaterialComment::create([
            'user_id'=> $user_id,
            'material_id'=> $id,
            'review'=>$request->input('review'),
        ]);

        Toastr::success('Review uploaded successfullly.','Success!');
        
        return back();
    }
    
}
