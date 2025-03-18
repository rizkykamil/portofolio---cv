<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Work;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;


class AdminWorkController extends Controller
{
    public function index()
    {
        $works = Work::select('id', 'judul', 'gambar')->get();
        return view('admin.works.index', compact('works'));
    }

    public function create()
    {
        return view('admin.works.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'judulaplikasi' => 'required|string|max:255',
            'type' => 'required|string',
            'link' => 'required|url',
            'overview' => 'required|string',
            'client' => 'required|string',
            'challenge' => 'required|string',
            // 'tags' => 'required|array',
            // 'tags.*' => 'required|string',
            // 'gambarAplikasi' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            // 'detail_images' => 'required|array|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        // Handle file upload dan ubah ke format .webp untuk gambar aplikasi
        if ($request->hasFile('gambarAplikasi')) {
            $imagePath = $request->file('gambarAplikasi')->getPathname();
            $extension = $request->file('gambarAplikasi')->getClientOriginalExtension();
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
                    return redirect()->back()->withErrors(['gambarAplikasi' => 'Format gambar tidak didukung.']);
            }

            // Simpan gambar dalam format .webp
            imagewebp($image, public_path('uploads/works_images/' . $fileName), 100);
            imagedestroy($image); // Hapus dari memori
        }

        // Simpan data di database untuk work
        $work = new Work();
        $work->judul = $validated['judulaplikasi'];
        $work->type = $validated['type'];
        $work->link = $validated['link'];
        $work->overview = $validated['overview'];
        $work->client = $validated['client'];
        $work->challenge = $validated['challenge'];
        $work->slug = Str::slug($validated['judulaplikasi']);
        $work->gambar = $fileName;
        $work->save();

        // Simpan tags jika ada
        if ($request->tags != null) {
            foreach ($validated['tags'] as $tag) {
                $tag = new Tag();
                $tag->nama = $tag;
                $tag->slug = Str::slug($tag);
                $tag->work_id = $work->id;
                $tag->save();
            }
        }

        // Handle multiple file uploads untuk detail images
        if ($request->hasFile('detail_images')) {
            foreach ($request->file('detail_images') as $image) {
                $imagePath = $image->getPathname();
                $extension = $image->getClientOriginalExtension();
                $fileName = time() . '-' . uniqid() . '.' . $extension; // Gunakan uniqid untuk nama file unik

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
                        return redirect()->back()->withErrors(['detail_images' => 'Format gambar tidak didukung.']);
                }

                // Simpan gambar dalam format .webp
                imagewebp($image, public_path('uploads/works_images/' . $fileName), 100);
                DB::table('work_images')->insert([
                    'work_id' => $work->id,
                    'image' => $fileName,
                ]);
                imagedestroy($image); // Hapus dari memori
            }
        }

        // Redirect ke halaman index dengan pesan sukses
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
        // hapus data work berdasarkan id
        // hapus gambar dari folder uploads/works_images
        $work = Work::find($id);
        $detail_images = Work::join('work_images', 'works.id', '=', 'work_images.work_id')
            ->select('work_images.image')
            ->where('works.id', $work->id)
            ->get();
        foreach ($detail_images as $image) {
            $imagePath = public_path('uploads/works_images/' . $image->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        // hapus gambar work
        $imagePath = public_path('uploads/works_images/' . $work->gambar);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        Work::destroy($id);
        return redirect()->route('admin.work.index')->with('success', 'Work successfully deleted!');
    }
}
