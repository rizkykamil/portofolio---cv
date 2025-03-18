@extends('landing-page.partials.app')
@section('title', 'My Portfolio')
@section('content')
<style>
    .portfolio-details-text .overview h1, h2, h3, h4, h5, h6 {
        color: var(--dark-theme-white);
    }
    .portfolio-details-text .overview li {
        color: var(--dark-theme-white);
    }
    .portfolio-details-text .overview p {
        color: var(--dark-theme-white);
    }

    /* bold p */
    .portfolio-details-text .overview strong {
        color: var(--dark-theme-white);
    }
</style>
<section class="content-box-area mt-4">
    <div class="container">
        <div class="row g-4">
            @include('landing-page.partials.sideprofile')
            <div class="col-xl-8">
                <div class="card content-box-card">
                    <div class="card-body portfolio-card">
                        <div class="portfolio-details-area">
                            <div class="main-image">
                                <img src="{{ asset('uploads/works_images/' . $work->gambar) }}" alt="project-details-1">
                            </div>
                            <div class="portfolio-details-text">
                                <div class="short-info">
                                    <div class="info-item">
                                        <p class="subtitle">Client For:</p>
                                        <h4 class="card-title">
                                            {{ $work->client }}
                                        </h4>
                                    </div>
                                    <div class="info-item">
                                        <p class="subtitle">Services:</p>
                                        <h4 class="card-title">
                                            {{ $work->type }}
                                        </h4>
                                        <a href="#" class="website">
                                            {{ $work->link }}
                                            <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                                <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="overview">
                                    <h4 class="card-title">Overview</h4>
                                    <p>
                                        {!! $work->overview !!}
                                    </p>
                                </div>
                            </div>
                            <div class="inner-images">
                                <div class="row g-3">
                                    @foreach ($detail_images as $image)
                                    <div class="col-md-6">
                                        <div class="image-item">
                                            <img src="{{ asset('uploads/works_images/' . $image->gambar) }}" alt="project-details-2"
                                                class="img-fluid w-100">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="more-info-block">
                                <h4 class="card-title">Challenge</h4>
                                <p>
                                    {!! $work->challenge !!}
                                </p>
                            </div>
                            {{-- <div class="prev-and-next-btn">
                                <button class="btn btn-prev">Previous</button>
                                <button class="btn btn-next">Next</button>
                            </div> --}}
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
