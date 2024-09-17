@extends('admin.partials.app')
@section('title', 'Blog')
@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Blog</h4>
    </div>

    <div class="mt-3 mt-sm-0 ms-sm-3">
        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-rounded">
            <i data-feather="plus"width="15" height="15"></i>
            <span>Add New</span>
        </a>
    </div>
</div>

<div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card mt-4">
                <img src="{{ asset('uploads/blog_images/' . $blog->gambar) }}" class="card-img-top img-fluid" alt="{{ $blog->judul }}" loading="lazy" style="object-fit: cover; width: 100%; height: 100%; max-width: 1880px; max-height: 1253px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->judul }}</h5>
                    <p class="card-text">{{ Str::limit($blog->isi, 30, '...') }}</p>
                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection