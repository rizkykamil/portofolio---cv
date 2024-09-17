@extends('admin.partials.app')
@section('title', 'Add BLog')
@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Add BLog</h4>
    </div>
</div>
<div class="col-12">
    {{-- success/gagal --}}
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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judulblog" class="form-label">Judul Blog</label>
                            <input type="text" id="judulblog" name="judulblog" class="form-control @error('judulblog') is-invalid @enderror" value="{{ old('judulblog') }}">
                            @error('judulblog')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select name="type" class="form-select @error('type') is-invalid @enderror" id="type">
                                <option value="Full Stack Web" {{ old('type') == 'Full Stack Web' ? 'selected' : '' }}>Full Stack Web</option>
                                <option value="Mobile" {{ old('type') == 'Mobile' ? 'selected' : '' }}>Mobile</option>
                                <option value="Desktop" {{ old('type') == 'Desktop' ? 'selected' : '' }}>Desktop</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="isiblog">Isi</label>
                            <textarea class="form-control @error('isiblog') is-invalid @enderror" id="isiblog" name="isiblog" rows="3">{{ old('isiblog') }}</textarea>
                            @error('isiblog')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input type="number" id="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{ old('time') }}">
                            @error('time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label for="gambarBlog" class="form-label">Gambar Blog</label>
                            <input class="form-control @error('gambarBlog') is-invalid @enderror" type="file" id="gambarBlog" name="gambarBlog">
                            @error('gambarBlog')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="my-4">
                            <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
