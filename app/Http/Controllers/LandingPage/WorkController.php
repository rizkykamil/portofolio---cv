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
        return view('landing-page.work.index', compact('works'));
    }

    public function detail($slug)
    {
        $work = Work::where('slug', $slug)->first();
        $detail_images = Work::join('work_images', 'works.id', '=', 'work_images.work_id')
            ->select('work_images.image as gambar')
            ->where('works.id', $work->id)
            ->get();
        return view('landing-page.work.detail', compact('work', 'detail_images'));
    }
}