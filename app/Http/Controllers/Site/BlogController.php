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

    public function readMore($blog)
    {
        $blog = Blog::with('user')->where('id',$blog)->first();

        return view('front.users.blog.read-more',compact('blog'));
    }
}
