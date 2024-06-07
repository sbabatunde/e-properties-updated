<?php

namespace App\Http\Controllers\Site;

use App\Models\site\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderImagesRequest;
use RealRashid\SweetAlert\Facades\Alert;

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
            $file = $request->document;
            dd($file);
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    $imageName = time() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('image/non_feasible_images/proof'), $imageName);
                    Slider::create([
                        'photo' => $image,
                    ]);
                }
            }
            Alert::success('message', 'Slider has been addedd successfully');
            return redirect()->back();
        } catch (\Exception $ex) {
            Alert::error('message', 'Ooops somenthing went wrong');

            return redirect()->back();
        }
    }
}
