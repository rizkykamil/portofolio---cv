@extends('landing-page.partials.app')
@section('title', 'My Blog')
@section('content')
<section class="content-box-area mt-4">
    <div class="container">
        <div class="row g-4">
            @include('landing-page.partials.sideprofile')

            <div class="col-xl-8">
                <div class="card content-box-card">
                    <div class="card-body portfolio-card">
                        <div class="top-info">
                            <div class="text">
                                <h1 class="main-title">My Recent Article and Publications</h1>
                                <p>I'm here to help if you're searching for a Web Developer to bring your idea to
                                    life or a
                                    Programmer partner to help take your business to the next level.</p>
                            </div>
                        </div>
                        <div class="article-publications article-area">
                            <div class="article-publications-main">
                                <div class="row">
                                    @foreach ($blogs as $blog)
                                    <div class="col-xl-6 col-lg-4 col-md-6">
                                        <div class="article-publications-item">
                                            <div class="image">
                                                <a href="{{ route('blog.show', $blog->slug) }}" class="d-block w-100">
                                                    <img src="{{ asset('uploads/blog_images/' . $blog->gambar) }}" alt="{{ $blog->judul }}" class="img-fluid w-100">
                                                </a>
                                                <a href="{{ route('blog.show', $blog->slug) }}" class="tags">{{ $blog->type }}</a>
                                            </div>
                                            <div class="text">
                                                <a href="{{ route('blog.show', $blog->slug) }}" class="title">{{ $blog->judul }}</a>
                                                <ul class="list-unstyled">
                                                    <li>{{ $blog->time }} min read</li>
                                                    <li>{{ $blog->tanggal }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        <div class="pagination">
                                {{-- pagination bootstrap 5 --}}
                                {{ $blogs->links('vendor.pagination.custom-pagination') }}                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
