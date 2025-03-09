<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(6);
        return view('landing-page.blog.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('landing-page.blog.detail', compact('blog'));
    }
}
