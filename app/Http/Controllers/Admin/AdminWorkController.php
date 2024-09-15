<?php

namespace App\Http\Controllers\Admin;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminWorkController extends Controller
{
    public function index()
    {
        return view('admin.works.index');
    }

    public function create()
    {
        return view('admin.works.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judulaplikasi' => 'required|string|max:255',
            'type' => 'required|string',
            'link' => 'required|url',
            'gambarAplikasi' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle file upload
        if ($request->hasFile('gambarAplikasi')) {
            $fileName = time() . '_' . $request->file('gambarAplikasi')->getClientOriginalName();
            $request->file('gambarAplikasi')->move(public_path('uploads/works_images'), $fileName);
        }  

        // Create a new work entry
        $work = new Work();
        $work->judul = $validated['judulaplikasi'];
        $work->type = $validated['type'];
        $work->link = $validated['link'];
        $work->gambar = $fileName;
        $work->save();

        // Redirect to the work index page with a success message
        return redirect()->route('admin.work.index')->with('success', 'Work successfully created!');
    }

    public function edit($id)
    {
        return view('admin.works.edit');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }

    public function destroy($id)
    {
        // 
    }
}
