@extends('admin.partials.app')
@section('title', 'Add BLog')
@section('content')
<script src="https://cdn.tiny.cloud/1/8jzxems77w8t09owv8trf3bv0hg3ecdk7j4wjipuhq55irem/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Mar 23, 2025:
      'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
  });
</script>

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
                            <input type="time" id="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{ old('time') }}">
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

                        {{-- tag --}}
                        <div class="mb-3 d-flex align-items-center">  
                            <label for="tags" class="form-label me-2">Tags</label>  
                            <select name="tags" class="form-select @error('tags') is-invalid @enderror" id="tags" onchange="checkTag()">  
                                @foreach ($tags as $tag)  
                                    <option value="{{ $tag->id }}">{{ $tag->nama }}</option>  
                                @endforeach  
                            </select>  
                            <button type="button" class="btn btn-primary ms-2" onclick="addTag()">Tambah Tag Baru</button>  
                            @error('tags')  
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

@push('script')
<script>  
    function addTag() {  
        var select = document.getElementById("tags");  
        var input = document.createElement("input");  
        input.type = "text";  
        input.name = "new_tag"; // Ganti dengan nama field yang kamu inginkan  
        input.className = "form-control @error('new_tag') is-invalid @enderror";  
        input.placeholder = "Masukkan tag baru";  
        
        // Menghapus select dan menggantinya dengan input  
        select.parentNode.replaceChild(input, select);  
        
        // Jika validation error, tampilkan pesan  
        @error('new_tag')  
            var errorDiv = document.createElement("div");  
            errorDiv.className = "invalid-feedback";  
            errorDiv.innerText = "{{ $message }}";  
            input.parentNode.appendChild(errorDiv);  
        @enderror  
    }  

    function checkTag() {  
        var select = document.getElementById("tags");  
        if (select.value !== "") {  
            select.classList.remove("is-invalid");  
        }  
    }  
</script>  
@endpush
@endsection
