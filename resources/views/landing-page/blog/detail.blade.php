@extends('landing-page.partials.app')
@section('title', 'Contact Me')
@section('content')
<style>
    h1, h2, h3, h4, h5, h6 {
        color: var(--dark-theme-white);
    }
    li {
        color: var(--dark-theme-light-white);
    }
    p {
        color: var(--dark-theme-light-white);
    }

    /* bold p */
    strong {
        color: var(--dark-theme-white);
    }
</style>
<section class="content-box-area mt-4">
    <div class="container">
        <div class="row g-4">
            @include('landing-page.partials.sideprofile')
            <div class="col-xl-8">
                <div class="card content-box-card">
                    <div class="card-body portfolio-card article-details-card">
                        <div class="article-details-area">
                            <div class="main-image">
                                <img src="{{ asset('uploads/blog_images/' . $blog->gambar) }}" alt="blog-img-1" class="img-fluid w-100">
                            </div>
                            <ul class="list-unstyled article-tags">
                                <li>{{ $blog->time }}</li>
                                <li>{{ $blog->tanggal }}</li>
                                <li>1.5k Views</li>
                            </ul>
                            <div class="article-details-text">
                                <h3 class="main-title">{{ $blog->judul }}</h3>
                                <div class="article-content">{!! $blog->isi !!}</div>
                                <div class="tags-and-share">
                                    <div class="tags">
                                        <h3 class="title">Tags:</h3>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Development</a></li>
                                            <li><a href="#">Design Trend</a></li>
                                        </ul>
                                    </div>
                                    <div class="share">
                                        <h3 class="title">Share:</h3>
                                        <div class="social-media-icon mt-0">
                                            <ul class="list-unstyled">
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fab fa-github"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-post">
                                    <h2 class="main-common-title">Related Post
                                    </h2>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="article-publications-item">
                                                <div class="image">
                                                    <a href="article.html" class="d-block w-100">
                                                        <img src="assets/img/blog/blog-img-1.jpg" alt="blog-img-1"
                                                            class="img-fluid w-100">
                                                    </a>
                                                    <a href="article.html" class="tags">Development</a>
                                                </div>
                                                <div class="text">
                                                    <a href="article.html" class="title">Want To Upgrade Your Brain?
                                                        Stop Doing These 7
                                                        Things</a>
                                                    <ul class="list-unstyled">
                                                        <li>15 min read</li>
                                                        <li>Nov 6, 2023</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="article-publications-item">
                                                <div class="image">
                                                    <a href="article.html" class="d-block w-100">
                                                        <img src="assets/img/blog/blog-img-2.jpg" alt="blog-img-2"
                                                            class="img-fluid w-100">
                                                    </a>
                                                    <a href="article.html" class="tags">Development</a>
                                                </div>
                                                <div class="text">
                                                    <a href="article.html" class="title">Want To Upgrade Your Brain?
                                                        Stop Doing These 7
                                                        Things</a>
                                                    <ul class="list-unstyled">
                                                        <li>15 min read</li>
                                                        <li>Nov 6, 2023</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="leave-comments-area">
                                    <h2 class="main-common-title">Leave a Comment
                                    </h2>
                                    <div class="comments-box">
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control shadow-none"
                                                        placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" class="form-control shadow-none"
                                                        placeholder="Enter your email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Comment</label>
                                                    <textarea class="form-control shadow-none" rows="4"
                                                        placeholder="Type details about your inquiry"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="submit-btn" type="submit">
                                                    Post Comment
                                                    <svg class="icon" width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 11.6665V6.6665H12.5" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
