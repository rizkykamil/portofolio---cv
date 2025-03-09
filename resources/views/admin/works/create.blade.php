@extends('admin.partials.app')
@section('title', 'Add Work')
@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Add Work</h4>
    </div>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin.work.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf                    
                        <div class="mb-3">
                            <label for="judulaplikasi" class="form-label">Judul Aplikasi</label>
                            <input type="text" id="judulaplikasi" name="judulaplikasi" class="form-control @error('judulaplikasi') is-invalid @enderror" value="{{ old('judulaplikasi') }}">
                            @error('judulaplikasi')
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
                            <label for="link" class="form-label">Link</label>
                            <input type="url" id="link" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}" pattern="https?://.*" title="Masukkan URL yang valid (dimulai dengan http:// atau https://)" required>
                            @error('link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="client" class="form-label">Client</label>
                            <input type="text" id="client" name="client" class="form-control @error('client') is-invalid @enderror" value="{{ old('client') }}">
                            @error('client')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="overview" class="form-label">Overview</label>
                            <textarea name="overview" id="overview" class="form-control @error('overview') is-invalid @enderror" value="{{ old('overview') }}"></textarea>
                            @error('overview')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>                        

                        <div class="mb-3">
                            <label for="challenge" class="form-label">Challenge</label>
                            <textarea name="challenge" id="challenge" class="form-control @error('challenge') is-invalid @enderror" value="{{ old('challenge') }}"></textarea>
                            @error('challenge')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label for="gambarAplikasi" class="form-label">Gambar Aplikasi</label>
                            <input class="form-control @error('gambarAplikasi') is-invalid @enderror" name="gambarAplikasi" type="file" id="gambarAplikasi">
                            @error('gambarAplikasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="my-4">
                            <a href="{{ route('admin.work.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
