<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::paginate(6);
        return view('landing-page.works', compact('works'));
    }
}
