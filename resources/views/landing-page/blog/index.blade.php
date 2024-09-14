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
                                    <div class="col-xl-6 col-lg-4 col-md-6">
                                        <div class="article-publications-item">
                                            <div class="image">
                                                <a href="article.html" class="d-block w-100">
                                                    <img src="assets/img/blog/blog-img-1.jpg" alt="blog-img-1"
                                                        class="img-fluid w-100">
                                                </a>
                                                <a href="article.html" class="tags">Development</a>
                                            </div>
                                            <div class="text">
                                                <a href="article.html" class="title">Want To Upgrade Your Brain? Stop
                                                    Doing These 7
                                                    Things</a>
                                                <ul class="list-unstyled">
                                                    <li>15 min read</li>
                                                    <li>Nov 6, 2023</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-4 col-md-6">
                                        <div class="article-publications-item">
                                            <div class="image">
                                                <a href="article.html" class="d-block w-100">
                                                    <img src="assets/img/blog/blog-img-2.jpg" alt="blog-img-2"
                                                        class="img-fluid w-100">
                                                </a>
                                                <a href="article.html" class="tags">Development</a>
                                            </div>
                                            <div class="text">
                                                <a href="article.html" class="title">Want To Upgrade Your Brain? Stop
                                                    Doing These 7
                                                    Things</a>
                                                <ul class="list-unstyled">
                                                    <li>15 min read</li>
                                                    <li>Nov 6, 2023</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-4 col-md-6">
                                        <div class="article-publications-item">
                                            <div class="image">
                                                <a href="article.html" class="d-block w-100">
                                                    <img src="assets/img/blog/blog-img-3.jpg" alt="blog-img-3"
                                                        class="img-fluid w-100">
                                                </a>
                                                <a href="article.html" class="tags">Development</a>
                                            </div>
                                            <div class="text">
                                                <a href="article.html" class="title">Want To Upgrade Your Brain? Stop
                                                    Doing These 7
                                                    Things</a>
                                                <ul class="list-unstyled">
                                                    <li>15 min read</li>
                                                    <li>Nov 6, 2023</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-4 col-md-6">
                                        <div class="article-publications-item">
                                            <div class="image">
                                                <a href="article.html" class="d-block w-100">
                                                    <img src="assets/img/blog/blog-img-4.jpg" alt="blog-img-4"
                                                        class="img-fluid w-100">
                                                </a>
                                                <a href="article.html" class="tags">Development</a>
                                            </div>
                                            <div class="text">
                                                <a href="article.html" class="title">Want To Upgrade Your Brain? Stop
                                                    Doing These 7
                                                    Things</a>
                                                <ul class="list-unstyled">
                                                    <li>15 min read</li>
                                                    <li>Nov 6, 2023</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-4 col-md-6">
                                        <div class="article-publications-item">
                                            <div class="image">
                                                <a href="article.html" class="d-block w-100">
                                                    <img src="assets/img/blog/blog-img-5.jpg" alt="blog-img-5"
                                                        class="img-fluid w-100">
                                                </a>
                                                <a href="article.html" class="tags">Development</a>
                                            </div>
                                            <div class="text">
                                                <a href="article.html" class="title">Want To Upgrade Your Brain? Stop
                                                    Doing These 7
                                                    Things</a>
                                                <ul class="list-unstyled">
                                                    <li>15 min read</li>
                                                    <li>Nov 6, 2023</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-4 col-md-6">
                                        <div class="article-publications-item">
                                            <div class="image">
                                                <a href="article.html" class="d-block w-100">
                                                    <img src="assets/img/blog/blog-img-6.jpg" alt="blog-img-6"
                                                        class="img-fluid w-100">
                                                </a>
                                                <a href="article.html" class="tags">Development</a>
                                            </div>
                                            <div class="text">
                                                <a href="article.html" class="title">Want To Upgrade Your Brain? Stop
                                                    Doing These 7
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
                        </div>
                        <div class="pagination">
                            <ul class="list-unstyled">
                                <li class="prev">
                                    <button>
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18">
                                            </path>
                                        </svg>
                                    </button>
                                </li>
                                <li><button>1</button></li>
                                <li><button>2</button></li>
                                <li><button>3</button></li>
                                <li>
                                    <button class="next-page-btn">
                                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                                        <span class="next-page">
                                            <svg class="icon icon-arrow-right" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m6 17 5-5-5-5"></path>
                                                <path d="m13 17 5-5-5-5"></path>
                                            </svg>
                                        </span>
                                        <span class="next-page-number">Next 4 pages</span>
                                    </button>
                                </li>
                                <li><button>100</button></li>
                                <li class="next">
                                    <button>
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3">
                                            </path>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
