<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function allBlogPost()
    {
        $blogs = Blog::with('user')->paginate(10);

        return view('front.users.blog.main-page',compact('blogs'));
    }
}
