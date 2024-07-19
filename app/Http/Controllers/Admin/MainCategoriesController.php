<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\http\Enums\CategoryType;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\MainCategoryRequest;
use App\Models\Admin\BuildingCategory;
use App\Models\Admin\BuildingCategoryType;
use  DB;
use RealRashid\SweetAlert\Facades\Alert;

class MainCategoriesController extends Controller
{
   public function index()
   {
      $categories = BuildingCategoryType::with('category')->orderBy('id', 'DESC')->paginate(10);

      return view('dashboard.categories.index', compact('categories'));
   }

   public function create()
   {
      // $categories = Category::select('id', 'parent_id')->get();
      $categories = BuildingCategory::get();
      return view('dashboard.categories.create', compact('categories'));
   }

   public function store(MainCategoryRequest $request)
   {
      try {

         DB::beginTransaction();
         
         //if user choose main category then we must remove paret id from the request

         if ($request->type == "main_category") //main category
         {
            // dd($request->except(['_token']));
            // $request->request->add(['parent_id' => 1]);

            $buildingCat = BuildingCategory::create($request->except(['_token','building_category_slug','type']));
            Alert::success('Success','Building Category added successfully');
         }
         else{
            $buildingCat = BuildingCategoryType::create([
               'type'=>$request->category,
               'slug'=>$request->slug,
               'building_category_slug'=>$request->building_category_slug	
            ]);
            Alert::success('Success','Building Category added successfully');
         }
         // if he choose child category we must add parent id

         DB::commit();

         // return redirect()->route('admin.categories')->with(['success' => 'The Session Has Updated Successfully']);
         return redirect()->route('admin.categories');
      } catch (\Exception $ex) {
         DB::rollback();
         // return redirect()->route('admin.categories')->with(['error' => 'There is Something Wrong In Session']);
         return redirect()->route('admin.categories')->with(Alert::error('Ooops','Someting went wrong.'));
      }
   }



   public function edit($id)
   {
      $category = BuildingCategoryType::with('category')->orderBy('id', 'DESC')->find($id);
      $categories = BuildingCategory::orderBy('id', 'DESC')->get();
      if (!$category) {
         return redirect()->route('admin.categories')->with(['error' => 'This section does not exist']);
      }
      return view('dashboard.categories.edit', compact('category','categories'));
   }

   public function update($id, Request $request)
   {

      validator($request->all(),[
         'category'=>'required',
         'slug'=>'required',
      ]);
      try {
         DB::beginTransaction();
         
         //if user choose main category then we must remove paret id from the request
         if ($request->type == "main_category") //main category
         {
            // dd($request->except(['_token']));
            // $request->request->add(['parent_id' => 1]);

            $buildingCat = BuildingCategory::where('id',$id)
            ->update($request->except(['_token','building_category_slug','type','old_slug']));
            //update main category slug in category type table
            $buildingCat = BuildingCategoryType::where('building_category_slug','LIKE',"%".$request->old_slug."%")
            ->update(['building_category_slug'=> $request->slug]);
            Alert::success('Success','Building Category added successfully');
         }
         else{
            $buildingCat = BuildingCategoryType::where('id',$id)->update([
               'type'=>$request->category,
               'slug'=>$request->slug,
               'building_category_slug'=>$request->building_category_slug	
            ]);
            Alert::success('Success','Building Category added successfully');
         }
         // if he choose child category we must add parent id
         DB::commit();

         return redirect()->route('admin.categories')->with(['success' => 'The Session Has Updated Successfully']);
      } catch (\Exception $ex) {
         DB::rollback();
         return redirect()->route('admin.categories')->with(['error' => 'There is Something Wrong In Session']);
      }
   }

   public function delete($id)
   {
      try {
         $category = BuildingCategoryType::orderBy('id', 'DESC')->find($id);

         if (!$category) {
            return redirect()->route('admin.categories')->with(['error' => 'This section does not exist']);
         }

         $category->delete();

         return redirect()->route('admin.categories')->with(['success' => 'The section was deleted successfully']);
      } catch (\Exception $ex) {
         DB::rollback();
         return redirect()->route('admin.categories')->with(['error' => 'There is Something Wrong In Session']);
      }
   }
}
