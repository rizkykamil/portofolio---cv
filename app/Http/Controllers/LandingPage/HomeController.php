<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing-page.home');
    }
}
