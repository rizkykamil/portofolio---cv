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
                            <input type="text" id="judulaplikasi" name="judulaplikasi" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select name="type" class="form-select" name="type" id="type">
                                <option value="Full Stack Web">Full Stack Web</option>
                                <option value="Mobile">Mobile</option>
                                <option value="Desktop">Desktop</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="url" id="link" name="link" class="form-control" pattern="https?://.*" title="Masukkan URL yang valid (dimulai dengan http:// atau https://)" required>
                        </div>
                        

                        <div class="mb-3">
                            <label for="gambarAplikasi" class="form-label">Gambar Aplikasi</label>
                            <input class="form-control" name="gambarAplikasi" type="file" id="gambarAplikasi">
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
