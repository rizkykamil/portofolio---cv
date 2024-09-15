<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index');
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judulblog' => 'required|string|max:255',
            'type' => 'required|string',
            'time' => 'required',
            'tanggal' => 'required|date',
            'gambarBlog' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle file upload
        if ($request->hasFile('gambarBlog')) {
            $fileName = time() . '_' . $request->file('gambarBlog')->getClientOriginalName();
            $request->file('gambarBlog')->move(public_path('uploads/blog_images'), $fileName);
        }        

        // Create a new blog
        $blog = new Blog();
        $blog->judul = $validated['judulblog'];
        $blog->type = $validated['type'];
        $blog->time = $validated['time'];
        $blog->tanggal = $validated['tanggal'];
        $blog->gambar = $fileName;
        $blog->save();

        // Redirect to the blog index page with a success message
        return redirect()->route('admin.blog.index')->with('success', 'Blog successfully created!');

    }

    public function edit($id)
    {
        return view('admin.blog.edit');
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
        return back()
            ->with('success', 'You have successfully delete image.');
    }
}
