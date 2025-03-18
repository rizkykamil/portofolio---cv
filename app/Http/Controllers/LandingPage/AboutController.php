<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Blog;
use App\Models\Work;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class AboutController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $works = Work::all();
        return view('landing-page.about', compact('blogs', 'works'));
    }
}

// test