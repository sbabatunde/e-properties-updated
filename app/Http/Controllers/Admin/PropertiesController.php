<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\City;
use App\Models\Image;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\Admin\Trending;
use App\Models\CategoryTranslation;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\PropertyImagesRequest;
use App\Http\Requests\GeneralPropertyRequest;
use App\Http\Requests\PropertyFeatureRequest;
use App\Http\Requests\PropertyPriceValidation;

class PropertiesController extends Controller
{
   public function AllProperties()
   {
      $properties = Property::with(['payment','agent','trending'])->paginate(10);
      return view('dashboard.properties.all', compact('properties'));
   }

   public function trendingProperties()
   {
      $trendingProperties = Property::has('trending')->with(['payment','agent','trending'])->paginate(10);
      return view('dashboard.properties.trending', compact('trendingProperties'));
   }
   
   public function addToTrending($id)
   {
       // Check if a record already exists with the given property_id in Trending table
       $existingTrending = Trending::where('property_id', $id)->first();
   
       if (!$existingTrending) {
         // Create a new record in Trending table if none exists
         $trending = Trending::create([
             'property_id' => $id,
             'status' => 'trending',
         ]);
 
         // Return a JSON response indicating success
         return response()->json(['success' => true]);
     } else {
         // Return a JSON response indicating failure (optional, depending on your logic)
         return response()->json(['success' => false, 'message' => 'Property is already trending'], 400);
     }
   }

   public function removeFromTrending($id)
   {
      // Check if a record already exists with the given property_id in Trending table
      $existingTrending = Trending::where('property_id', $id)->delete();
         // Return a JSON response indicating success
         return response()->json(['success' => true]);
   }

   public function allDealsProperties()
   {
      $propertyDeals = Property::has('deals')->with(['payment','agent'])->paginate(10);
      return view('dashboard.properties.deals', compact('propertyDeals'));
   }

   public function toggleFeatured(Request $request, $id)
   {
       $property = Property::findOrFail($id);
       $newState = $request->input('featured');
   
       $property->featured = $newState; // Set to 'Yes' or 'No'
       $property->save();
   
       $message = $newState === 'Yes' 
           ? 'Property has been added to featured successfully.' 
           : 'Property has been removed from featured successfully.';
   
       return response()->json(['success' => true, 'message' => $message, 'featured' => $property->featured]);
   }
   

}
