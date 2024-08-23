<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Drivers\Gd\Driver;
use App\Http\Requests\SliderImagesRequest;
use Intervention\Image\Laravel\Facades\Image;

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
          $cloudinary = new Cloudinary();
          if ($request->file('photo')) 
          {
            // Use ImageManager from Intervention Image
            $manager = new ImageManager(new Driver()); // or 'imagick'
            $file = $request->file('photo');
            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();

            // Process the image
            $img = $manager->read($file->getPathname());
            $img->resize(1550, 1350, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Save the image to a temporary location
            $tempFilePath = sys_get_temp_dir() . '/' . $name_gen;
            $img->save($tempFilePath); // Encode the image to JPEG format

            // Upload to Cloudinary
            $uploadResult = $cloudinary->uploadApi()->upload($tempFilePath, [
                'folder' => 'e-properties/admin/images/sliders/',
                'resource_type' => 'image',
                'overwrite' => true
            ]);

            // Clean up temporary file
            unlink($tempFilePath);

            $file_type = 'image';
            $url = $uploadResult['secure_url'];
          }
        }
     
     
        // Save slider details to database
        Slider::create([
            'title' => $request->title,
            'photo' => $url,
            // Add more fields as per your slider schema
        ]);

        Alert::success('Success','Slider has been created successfuly.');
        return redirect()->route('admin.sliders.index')->with('success', 'Slider created successfully.');
    }

    // Display all sliders
    public function index()
    {
        $sliders = Slider::paginate(10);

        // return view('admin.sliders.index', compact('sliders'));
        return view('dashboard.sliders.all', compact('sliders'));
    }
    
}
