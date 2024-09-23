<?php

namespace App\Http\Controllers\Site\Admin;

use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use Cloudinary\CloudinaryResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use App\Models\Admin\BuildingCategory;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Admin\BuildingCategoryType;
use App\Http\Requests\BuildingMaterialRequest;
use Cloudinary\Transformation\ImageTransformation;
use App\Models\Admin\BuildingMaterial as AdminBuildingMaterial;
// use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

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
            $thumbnailUrl = null;

            // Check if a file is uploaded
            if ($request->hasFile('thumbnail')) {
                // Get the file from the request
                $file = $request->file('thumbnail');
                
                // Upload to Cloudinary
                $cloudinary = new Cloudinary();
                 // Use ImageManager from Intervention Image
                 $manager = new ImageManager(new Driver()); // or 'imagick'
                 $file = $request->file('thumbnail');
                 $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
 
                 // Process the image
                 $img = $manager->read($file->getPathname());
                 $img->resize(450, 450, function ($constraint) {
                     $constraint->aspectRatio();
                     $constraint->upsize();
                 });
 
                 // Save the image to a temporary location
                 $tempFilePath = sys_get_temp_dir() . '/' . $name_gen;
                 $img->save($tempFilePath); // Encode the image to JPEG format
 
                 
                $uploadResult = $cloudinary->uploadApi()->upload($file->getPathname(), [
                    'folder' => 'e-properties/building_materials', // Optional folder structure in Cloudinary
                    'overwrite' => true
                ]);

                // Get the URL of the uploaded file
                $thumbnailUrl = $uploadResult['secure_url'];
            }

            // Save the building material record
            $material = AdminBuildingMaterial::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'type' => $request->type,
                'unit' => $request->unit,
                'denomination' => $request->denomination,
                'address' => $request->address,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'installment' => $request->installment,
                'description' => $request->description,
                'thumbnail' => $thumbnailUrl,
            ]);

            Alert::success('Success', 'Material uploaded successfully');
            return back();
        } catch (\Exception $ex) {
            Alert::error('Oops!!!', 'Something went wrong: ' . $ex->getMessage());
            return back();
        }
    }

    // For Deleting Material Begins
    public function deleteMaterial($id)
    {
        $material = AdminBuildingMaterial::findOrFail($id);
        $thumbnailUrl = $material->thumbnail;

        // Delete the image from Cloudinary
        if ($thumbnailUrl) {
            $deleteSuccess = $this->deleteImage($thumbnailUrl);

            if (!$deleteSuccess) {
                return redirect()->back()->with('error', 'Failed to delete image from Cloudinary.');
            }
        }

        // Delete the record from the database
        $material->delete();

        return redirect()->back()->with('success', 'Building material deleted successfully.');
    }

    private function deleteMaterImage($url)
    {
        $cloudinary = new Cloudinary();
        $publicId = $this->extractPublicId($url);

        if ($publicId) {
            try {
                $cloudinary->uploadApi()->destroy($publicId, [
                    'invalidate' => true
                ]);
                return true;
            } catch (\Exception $e) {
                // Handle exception if needed
                return false;
            }
        }
        return false;
    }

    private function extractPublicId($url)
    {
        $pattern = '/\/image\/upload\/([^\/]+)\./';
        preg_match($pattern, $url, $matches);

        return $matches[1] ?? null;
    }
    // For Deleting Material Ends

    public function myMaterials()
    {
        $materials = AdminBuildingMaterial::with(['user','type'])  // Eager load the nested relationship
        ->where('user_id', Auth::id())
        ->paginate(15);

        // dd($materials);
        return view('admin.building-material.my-materials',compact('materials'));
    }

    public function testCloudinaryConnection()
    {
       
            $cloudinary = new Cloudinary();
            $cloudinary->getApi()->ping(); // Test if the connection is working
            return 'Cloudinary connection is working!';
      
    }
}
