<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Blog;
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
        $clients = Client::all();
        return view('landing-page.about', compact('blogs', 'clients'));
    }
}

// test