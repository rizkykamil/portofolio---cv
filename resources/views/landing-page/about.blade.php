@extends('landing-page.partials.app')
@section('title', 'About Me')
@section('content')
<section class="content-box-area mt-4">
    <div class="container">
        <div class="row g-4">
            @include('landing-page.partials.sideprofile')
            <div class="col-xl-8">
                <div class="card content-box-card">
                    <div class="card-body">
                        <div class="top-info">
                            <div class="text">
                                <h1 class="main-title">Hi, This Is <span>Rizky Kamil</span> 👋</h1>
                                <p>A Passionate <b>Laravel Developer</b> 🖥️ having
                                    <b>4 years</b>
                                    of experience in the field of Web Development. I have worked on a wide range of projects and I am always looking to take on new and interesting projects.</p>
                            </div>
                            <div class="available-btn">
                                <span><i class="fas fa-circle"></i> Available For Hire</span>
                            </div>
                        </div>
                        <div class="counter-area">
                            <div class="counter">
                                <div class="counter-item">
                                    <h3 class="number">4</h3>
                                    <p class="subtitle">Year of Experience</p>
                                </div>
                                <div class="counter-item">
                                    <h3 class="number">10+</h3>
                                    <p class="subtitle">Project Completed
                                    </p>
                                </div>
                                <div class="counter-item">
                                    <h3 class="number">10+</h3>
                                    <p class="subtitle">Happy Client
                                    </p>
                                </div>
                            </div>
                            <div class="circle-area">
                                <div class="circle-text">
                                    <img class="circle-image" src="assets/img/about-us/circle-text.svg"
                                        alt="circle-text">
                                    <img class="circle-image circle-image-light d-none"
                                        src="assets/img/about-us/circle-text-light.svg" alt="circle-text">
                                    <span class="arrow-down">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 5V35" stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15 30L20 35L25 30" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="client-feedback">
                            <h2 class="main-common-title">Trusted By 1200+ Clients
                            </h2>
                            <div class="row client-feedback-slider">
                                <div class="col-lg-6">
                                    <div class="feedback-item">
                                        <div class="feedback-top-info">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="website">
                                                <a href="#">Framer.com
                                                    <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <p>
                                                "We've been using BentoFolio for over a year now, and I must say, it's
                                                been a game-changer
                                                for us. The user interface is intuitive and the feature.
                                            </p>
                                        </div>
                                        <div class="designation">
                                            <p><span>Oliver Clain</span> - Product Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feedback-item">
                                        <div class="feedback-top-info">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="website">
                                                <a href="#">Framer.com
                                                    <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <p>
                                                "We've been using BentoFolio for over a year now, and I must say, it's
                                                been a game-changer
                                                for us. The user interface is intuitive and the feature.
                                            </p>
                                        </div>
                                        <div class="designation">
                                            <p><span>Oliver Clain</span> - Product Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feedback-item">
                                        <div class="feedback-top-info">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="website">
                                                <a href="#">Framer.com
                                                    <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <p>
                                                "We've been using BentoFolio for over a year now, and I must say, it's
                                                been a game-changer
                                                for us. The user interface is intuitive and the feature.
                                            </p>
                                        </div>
                                        <div class="designation">
                                            <p><span>Oliver Clain</span> - Product Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="article-publications">
                            <h2 class="main-common-title">Article and Publications</h2>
                            <div class="article-publications-main">
                                <div class="row article-publications-slider">
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
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
                                </div>
                            </div>
                        </div>
                        <div class="work-together-slider">
                            <div class="slider-main d-flex gap-4 align-items-center">
                                <div class="slider-item">
                                    <a href="contact.html">Let's 👋 Work Together</a>
                                    <a href="contact.html">Let's 👋 Work Together</a>
                                </div>
                                <div class="slider-item">
                                    <a href="contact.html">Let's 👋 Work Together</a>
                                    <a href="contact.html">Let's 👋 Work Together</a>
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
