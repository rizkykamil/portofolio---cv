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
                        <div class="portfolio-details-area">
                            <div class="main-image">
                                <img src="assets/img/projects/project-details-1.png" alt="project-details-1">
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
                                        {{ $work->overview }}
                                    </p>
                                </div>
                            </div>
                            <div class="inner-images">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="image-item">
                                            <img src="assets/img/projects/project-details-2.png" alt="project-details-2"
                                                class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="image-item">
                                            <img src="assets/img/projects/project-details-3.png" alt="project-details-3"
                                                class="img-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="more-info-block">
                                <h3 class="more-info-title">Challenges</h3>
                                <p>Web design comes with its own set of challenges, ranging from technical
                                    issues to user
                                    experience considerations. Here are some common challenges faced by web
                                    designers. Web design
                                    encompasses the process of creating and designing websites It involves a
                                    combination of
                                    different skills and disciplines to produce a visually appealing and
                                    user-friendly website.
                                    Here's an overview of key aspects of web design.</p>
                                <h5 class="more-info-subtitle">Responsive Design:</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <b>Challenge:</b> Ensuring that a website looks and functions well
                                        on various devices and
                                        screen
                                        sizes.
                                    </li>
                                    <li>
                                        <b>Solution:</b> Use responsive design techniques, such as flexible
                                        grids and media queries.
                                    </li>
                                </ul>
                                <h5 class="more-info-subtitle">Browser Compatibility:
                                </h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <b>Challenge:</b> Different browsers may interpret code differently,
                                        leading to
                                        inconsistencies
                                        in the website's appearance.
                                    </li>
                                    <li>
                                        <b>Solution:</b> Test the website on multiple browsers and use
                                        compatibility libraries or
                                        polyfills when necessary.
                                    </li>
                                </ul>

                                <h5 class="more-info-subtitle">User Experience (UX):
                                </h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <b>Challenge:</b> Creating a seamless and intuitive user experience
                                        that keeps visitors
                                        engaged.
                                    </li>
                                    <li>
                                        <b> Solution:</b>
                                        Conduct user testing, design user-friendly interfaces, and
                                        prioritize accessibility to ensure
                                        a
                                        positive user experience
                                    </li>
                                </ul>
                                <h5 class="more-info-subtitle">Compliance and Accessibility:
                                </h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <b>Challenge:</b> Creating a seamless and intuitive user experience
                                        that keeps visitors
                                        engaged.
                                    </li>
                                    <li>
                                        <b>Solution:</b> Conduct user testing, design user-friendly
                                        interfaces, and prioritize
                                        accessibility to ensure a positive user experience
                                    </li>
                                </ul>

                                <h3 class="more-info-title">Results/Conclusion:</h3>
                                <p>The website design and development for FlexiFlow successfully achieved
                                    its objectives, leading
                                    to increased user engagement, improved conversion rates, and positive
                                    feedback from the target
                                    audience. The combination of user-centric design, modern visuals, and a
                                    seamless shopping
                                    experience resulted in a more competitive and appealing online presence
                                    for the company. Ongoing
                                    monitoring and potential iterative improvements will be crucial to
                                    maintaining and enhancing.
                                </p>
                            </div>
                            <div class="prev-and-next-btn">
                                <button class="btn btn-prev">Previous</button>
                                <button class="btn btn-next">Next</button>
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
