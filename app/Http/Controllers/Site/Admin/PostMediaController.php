<?php

namespace App\Http\Controllers\Site\Admin;

use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
// use Intervention\Image\Image;
use App\Models\Admin\PostMedia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostMediaRequest;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Cloudinary\Transformation\Resize;

class PostMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminPostMedia()
    {
        $media = PostMedia::where('user_id',auth::id())->paginate(6);
        return view('admin.media.main',compact('media'));
    }


    /**
     * Show the form for creating a new resource.
     */
   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function adminPostMediaForm (Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|file|mimes:jpeg,png,jpg|max:20480',
            'video' => 'nullable|file|mimes:mp4,webm|max:20480',
            'type' => 'required|in:image,video',
            'comment' => 'nullable|string|max:1000',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $type = $request->input('type');
        $comment = $request->input('comment');
    
        try {
            $cloudinary = new Cloudinary();
    
            if ($type === 'image') {
                if ($request->file('image')) {
                    // Use ImageManager from Intervention Image
                    $manager = new ImageManager(new Driver()); // or 'imagick'
                    $file = $request->file('image');
                    $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
    
                    // Process the image
                    $img = $manager->read($file->getPathname());
                    $img->resize(400, 400, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
    
                    // Save the image to a temporary location
                    $tempFilePath = sys_get_temp_dir() . '/' . $name_gen;
                    $img->save($tempFilePath); // Encode the image to JPEG format
    
                    // Upload to Cloudinary
                    $uploadResult = $cloudinary->uploadApi()->upload($tempFilePath, [
                        'folder' => 'e-properties/media/image',
                        'resource_type' => 'image',
                        'overwrite' => true
                    ]);
    
                    // Clean up temporary file
                    unlink($tempFilePath);
    
                    $file_type = 'image';
                    $url = $uploadResult['secure_url'];
                }
    
            } else if ($type === 'video') {
                if ($request->file('video')) {
                    $file = $request->file('video');
                    // Upload video to Cloudinary
                    $uploadResult = $cloudinary->uploadApi()->upload($file->getPathname(), [
                        'folder' => 'e-properties/media/video',
                        'resource_type' => 'video',
                        'overwrite' => true
                    ]);
    
                    $file_type = 'video';
                    $url = $uploadResult['secure_url'];
                }
            }
    
            // Store media information in the database
            PostMedia::create([
                'file_url' => $url,
                'comment' => $comment,
                'user_id' => Auth::id(),
                'file_type' => $file_type
            ]);
    
            Alert::success('Success', 'Media file uploaded successfully');
            return back();
    
        } catch (\Exception $ex) {
            Alert::error('Oops!!!', 'Something went wrong: ' . $ex->getMessage());
            return back();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(PostMedia $postMedia)
    {
        // Fetch all media records
        $mediaItems = PostMedia::with('user')->paginate(6);

        return view('front.users.media.all', compact('mediaItems'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostMedia $postMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostMedia $postMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostMedia $postMedia)
    {
        //
    }
}
