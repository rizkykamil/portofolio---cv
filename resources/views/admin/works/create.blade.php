@extends('admin.partials.app')
@section('title', 'Add Work')
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

                        <div class="mb-3">
                            <label for="detail_images" class="form-label">Detail Images</label>
                            <div id="image-container">  
                                <div class="row mb-2 image-row">  
                                    <div class="col-md-8">  
                                        <input class="form-control detail-images @error('detail_images') is-invalid @enderror"   
                                               name="detail_images[]"   
                                               type="file"   
                                               accept="image/*">  
                                        @error('detail_images')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                    <div class="col-md-4">  
                                        <button type="button" class="btn btn-danger remove-image" style="display:none;">  
                                            <i class="fas fa-trash"></i> Hapus  
                                        </button>  
                                    </div>  
                                </div>  
                            </div>  
                            <div class="mt-2">  
                                <button type="button" id="addImageBtn" class="btn btn-primary">  
                                    <i class="fas fa-plus"></i> Tambah Gambar  
                                </button>  
                            </div>   
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
<script>  
    document.addEventListener('DOMContentLoaded', function() {  
        const imageContainer = document.getElementById('image-container');  
        const addImageBtn = document.getElementById('addImageBtn');  
    
        // Fungsi untuk menambah input file baru  
        function addNewImageInput() {  
            // Clone baris pertama  
            const firstRow = imageContainer.querySelector('.image-row');  
            const newRow = firstRow.cloneNode(true);  
    
            // Reset input file  
            const fileInput = newRow.querySelector('input[type="file"]');  
            fileInput.value = ''; // Kosongkan input  
    
            // Tampilkan tombol hapus  
            const removeBtn = newRow.querySelector('.remove-image');  
            removeBtn.style.display = 'block';  
    
            // Tambahkan event listener untuk tombol hapus  
            removeBtn.addEventListener('click', function() {  
                newRow.remove();  
            });  
    
            // Tambahkan baris baru ke kontainer  
            imageContainer.appendChild(newRow);  
        }  
    
        // Event listener untuk tombol "Tambah Gambar"  
        addImageBtn.addEventListener('click', addNewImageInput);  
    });  
    </script>   
@endsection
