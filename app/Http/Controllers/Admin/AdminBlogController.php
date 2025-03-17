<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $tags = Tag::all();
        return view('admin.blog.index', compact('blogs', 'tags'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('admin.blog.create', compact('tags'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $validated = $request->validate([
            'judulblog' => 'required|string|max:255',
            'type' => 'required|string',
            'time' => 'required',
            'tanggal' => 'required|date',
            'isiblog' => 'required',
            'gambarBlog' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Handle file upload dan ubah ke format .webp
        if ($request->hasFile('gambarBlog')) {
            $imagePath = $request->file('gambarBlog')->getPathname();
            $extension = $request->file('gambarBlog')->getClientOriginalExtension();
            $fileName = time() . '.webp';

            // Pilih jenis gambar berdasarkan ekstensi file yang diunggah
            switch ($extension) {
                case 'jpeg':
                case 'jpg':
                    $image = imagecreatefromjpeg($imagePath);
                    break;
                case 'png':
                    $image = imagecreatefrompng($imagePath);
                    break;
                default:
                    return redirect()->back()->withErrors(['gambarBlog' => 'Format gambar tidak didukung.']);
            }

            // Simpan gambar dalam format .webp
            imagewebp($image, public_path('uploads/blog_images/' . $fileName), 100); // 90 adalah kualitas
            imagedestroy($image); // Hapus dari memori
        }

        // Buat entri baru untuk blog
        $blog = new Blog();
        $blog->judul = $validated['judulblog'];
        $blog->type = $validated['type'];
        $blog->time = $validated['time'];
        $blog->slug = Str::slug($validated['judulblog']);
        $blog->isi = $validated['isiblog'];
        $blog->tanggal = $validated['tanggal'];
        $blog->gambar = $fileName; // Simpan nama file .webp
        $blog->save();

        // check table tags
        $tags = Tag::all();

        // jika new_tag kosong, maka tambahkan tag baru
        if ($request->new_tag != null) {
            $tag = new Tag();
            $tag->nama = $request->new_tag;
            $tag->slug = Str::slug($request->new_tag);
            $tag->blog_id = $blog->id;
            $tag->save();
        }

        // jika ada name di table tag, maka tambahkan tag ke blog
        if ($request->tag != null) {
            foreach ($tags as $tag) {
                $tag->nama = $tag->name;
                $tag->slug = Str::slug($tag->name);
                $tag->blog_id = $blog->id;
                $tag->save();
            }
        }

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
        // delete blog
        try {
            Blog::destroy($id);
            return redirect()->route('admin.blog.index')->with('success', 'Blog successfully deleted!');
        } catch (\Exception $e) {
            return redirect()->route('admin.blog.index')->with('error', 'Failed to delete blog!');
        }
    }
}
