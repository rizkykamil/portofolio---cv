@extends('landing-page.partials.app')
@section('title', 'My Portfolio')
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
                                <h1 class="main-title">Check Out My Latest <span>Projects</span></h1>
                                <p>I'm here to help if you're searching for a Web Development to bring your idea to
                                    life or a
                                    Developer partner to help take your business to the next level.</p>
                            </div>
                        </div>
                        <div class="portfolio-area">
                            <div class="row g-4 parent-container">
                                @if($works->count() > 0)
                                @foreach ($works as $work)
                                <div class="col-lg-12">
                                    <div class="portfolio-item">
                                        <div class="image">
                                            <img src="{{ asset('uploads/works_images/' . $work->gambar) }}"
                                                alt="{{ $work->judul }}" class="img-fluid w-100">
                                            <a href="{{ $work->link }}" class="full-image-preview parent-container">
                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5">
                                                    <path d="M6 10h8M10 6l4 4-4 4" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="text">
                                            <div class="info">
                                                <a href="{{ route('works.detail', $work->slug) }}" class="title">{{ $work->judul }}</a>
                                                <p class="subtitle">{{ $work->type }}</p>
                                            </div>
                                            <div class="visite-btn">
                                                <a href="{{ $work->link }}">Visit Site
                                                    <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="col-lg-12">
                                    <div class="portfolio-item">
                                        <div class="image" style="padding: 0px">
                                            <div class="text d-flex justify-content-center">
                                                <div class="info">
                                                    <p class="subtitle">Sabar ya lagi dibuat 🙏🏻😭</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="pagination">
                                <div class="pagination">
                                    {{ $works->links('vendor.pagination.custom-pagination') }}
                                </div>

                            </div>
                        </div>

                        <div class="work-together-slider">
                            <div class="slider-main d-flex gap-4 align-items-center">
                                <div class="slider-item">
                                    <a href="{{route('contact')}}">Let's 👋 Work Together</a>
                                    <a href="{{route('contact')}}">Let's 👋 Work Together</a>
                                </div>
                                <div class="slider-item">
                                    <a href="{{route('contact')}}">Let's 👋 Work Together</a>
                                    <a href="{{route('contact')}}">Let's 👋 Work Together</a>
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
