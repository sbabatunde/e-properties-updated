<?php

namespace App\Http\Controllers\Site\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\PostMedia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostMediaRequest;

class PostMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminPostMedia()
    {
        return view('admin.media.main');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(PostMediaRequest $request)
    {
            $postMedia = PostMedia::create([
                "user_id" => Auth::id(),
                "media_file" => $mediaFile,
                "file_type" => $fileType
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PostMedia $postMedia)
    {
        //
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
