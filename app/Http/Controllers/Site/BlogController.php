<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function allBlogPost()
    {
        return view('front.users.blog.main-page');
    }
}
