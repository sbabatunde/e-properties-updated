<?php

namespace App\Http\Controllers\Site;

use App\Models\site\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\SliderImagesRequest;

class SliderController extends Controller
{
    public function adminAddSliderImages()
    {
        $images = Slider::get(['photo']);

        return view('admin.sliders.create', compact('images'));
    }

    public function adminSaveSliderImages(Request $request)
    {
        $file = $request->file('dzfile');
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $filename = $file->storeAs('public/assets/admin/images/sliders', $imageName);
        // $filename = uploadImage('sliders', $file);
        Alert::success('message', 'Slider added successfully');

        return response()->json([
            'name' => $imageName,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function adminSaveSliderImagesDB(SliderImagesRequest $request)
    {
        try {
            // $file = $request->document;
            // dd($file);
            // {
            //     $request->validate([
            //         'title' => 'required|string|max:255',
            //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust file types and size as needed
            //     ]);
        
            //     $imageName = time().'.'.$file->extension();  
            //     $request->image->move(public_path('images'), $imageName);
        
            //     $slider = new Slider();
            //     $slider->title = $request->title;
            //     $slider->image = $imageName;
            //     $slider->save();
        
            //     return redirect()->back()->with('success','Slider uploaded successfully.');
            // }
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    // $images = json_decode($image, true);
                    // Extract base64 string and decode it
                    $fileData = base64_decode($image);

                    // Generate a unique filename
                    $filename = Str::random(20) . '.jpg'; // Generate a random filename with .jpg extension

                    // Store the file in storage/app/public directory
                    $path = 'public/assets/admin/images/sliders/' . $filename;
                    $image->move(public_path('public/assets/admin/images/sliders/'), $path);
                    // Storage::put($path, $fileData);
                    // dd($image);
                    // $imageName = time() . '.' . $image->getClientOriginalExtension();
                    // $image->move(public_path('public/assets/admin/images/sliders/'), $imageName);
                    Slider::create([
                        'photo' => $path,
                    ]);
                }
            }
            else{

            }
            Alert::success('message', 'Slider has been addedd successfully');
            return redirect()->back();
        } catch (\Exception $ex) {
            Alert::error('message', 'Ooops somenthing went wrong');

            return redirect()->back();
        }
    }
}
