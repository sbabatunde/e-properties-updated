<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\SliderImagesRequest;


class SliderController extends Controller
{
    // Show form to create a new slider
    public function create()
    {
        return view('admin.sliders.create');
    }

    // Store newly created slider
    public function store(Request $request)
    {
        // Validate the form data
      //   dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
          //   'photo' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for image upload
            // Add more fields as per your slider schema
        ]);

        foreach($request->file('photo') as $image)
        {
          $manager = new ImageManager(new Driver());
          $name_gen = hexdec(uniqid()) . '.' . $image
              ->getClientOriginalExtension();
          $img = $manager->read($image);
          $img = $img->resize(1550, 1350);

          $img->toJpeg(80)->save(base_path('public/assets/admin/images/sliders/' .
              $name_gen));
          $uploadPath = 'assets/admin/images/sliders/' . $name_gen;
        }
     
        // Upload image file
      //   $imageName = time() . '.' . $request->photo->extension();
      //   $request->image->move(public_path('public/assets/admin/images/sliders/'), $imageName);

        // Save slider details to database
        Slider::create([
            'title' => $request->title,
            'photo' => $uploadPath,
            // Add more fields as per your slider schema
        ]);

        Alert::success('Success','Slider has been created successfuly.');
        return redirect()->route('admin.sliders.index')->with('success', 'Slider created successfully.');
    }

    // Display all sliders
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.sliders.index', compact('sliders'));
    }
    
}
