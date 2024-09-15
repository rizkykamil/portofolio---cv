@extends('admin.partials.app')
@section('title', 'Works')
@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Works</h4>
    </div>

    <div class="mt-3 mt-sm-0 ms-sm-3">
        <a href="{{ route('admin.work.create') }}" class="btn btn-primary btn-rounded">
            <i data-feather="plus"width="15" height="15"></i>
            <span>Add New</span>
        </a>
    </div>
</div>

<div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card mt-4">
                <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="Work Title 1">
                <div class="card-body">
                    <h5 class="card-title">Work Title 1</h5>
                    <p class="card-text">This is a description of Work 1. It provides insight about the project.</p>
                    <a href="{{ route('admin.work.edit', 1) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.work.destroy', 1) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card mt-4">
                <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="Work Title 2">
                <div class="card-body">
                    <h5 class="card-title">Work Title 2</h5>
                    <p class="card-text">This is a description of Work 2. It covers the details of the project.</p>
                    <a href="{{ route('admin.work.edit', 2) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.work.destroy', 2) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card mt-4">
                <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="Work Title 3">
                <div class="card-body">
                    <h5 class="card-title">Work Title 3</h5>
                    <p class="card-text">This is a description of Work 3. It explains the key features of the project.</p>
                    <a href="{{ route('admin.work.edit', 3) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.work.destroy', 3) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


















