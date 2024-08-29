<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Blog;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user')->paginate(10);

        return view('dashboard.blog.index', compact('blogs'));
    }

    public function post(Request $request)
    {
        try {
            $validate = Validator::make($request->all(),[
                'title'=> 'required|string',
                'photo'=> 'required|image|mimes:jpg,png|max:3072',
                'news'=> 'required|string',
            ]);

             // Check if validation fails
             if ($validate->fails()) {
                // Get the first error message
                $errors = $validate->errors();
                $firstError = $errors->first();

                // Show an alert with the first error message
                Alert::error('Oops!!', $firstError);

                // Optionally, redirect back with errors
                return redirect()->back()->withErrors($errors)->withInput();
            }

            //Resize and store picture on cloudinary
            if ($request->file('photo')) 
            {
                // Handle photo upload
                $cloudinary = new Cloudinary();

                // Use ImageManager from Intervention Image
                $manager = new ImageManager(new Driver()); // or 'imagick'
                $file = $request->file('photo');
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

                // Upload to Cloudinary
                $uploadResult = $cloudinary->uploadApi()->upload($tempFilePath, [
                    'folder' => 'e-properties/blogs',
                    'resource_type' => 'image',
                    'overwrite' => true
                ]);

                // Clean up temporary file
                unlink($tempFilePath);
                $thumbnailUrl = $uploadResult['secure_url'];
            }
            
            $blog = Blog::create([
                "user_id"=>Auth::id(),
                "title"=>$request->title,
                "news" => $request->news,
                "photo"=>$thumbnailUrl,
            ]);
            Alert::success("Success",'Blog News has been posted successfully');
            return back();

        } catch (\Exception $ex) {
            Alert::error('Oops!!!', 'Something went wrong: ' . $ex->getMessage());
            return back();
        }
    }
}
