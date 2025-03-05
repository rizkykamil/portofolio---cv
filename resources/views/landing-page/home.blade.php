@extends('landing-page.partials.app')
@section('title', 'Home')
@section('content')
    <section class="home-area">
        <div class="container">
            <div class="row g-4">
                @include('landing-page.partials.sideprofile')
                <div class="col-xl-4">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body work-experiance-card">
                                    <h3 class="card-title">Work Experience</h3>
                                    <div class="work-experiance-main">
                                        <ul class="work-experiance-slider list-unstyled">
                                            <li>
                                                <div class="date">
                                                    <p>2022-Now</p>
                                                </div>
                                                <div class="info">
                                                    <div class="icon">
                                                        <img src="https://wibidigital.com/assets/img/favicon.png"
                                                            alt="adobe">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Wibi Digital Teknologi</h4>
                                                        <h6 class="subtitle">Web Developer</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">
                                                    <p>2021-2022</p>
                                                </div>
                                                <div class="info">
                                                    <div class="icon">
                                                        <img src="https://crm.hepta.co.id/assets/img/fav-icon.png"
                                                            alt="google">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Heptaco Digital Media
                                                        </h4>
                                                        <h6 class="subtitle">Web Developer

                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">
                                                    <p>2019-2021</p>
                                                </div>
                                                <div class="info">
                                                    <div class="icon">
                                                        <img src="https://www.inti.co.id/wp-content/uploads/2020/03/Logo-INTI_a.svg"
                                                            alt="meta">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">PT. Inti
                                                        </h4>
                                                        <h6 class="subtitle">Internship Web Developer
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="work-experiance-slider list-unstyled">
                                            <li>
                                                <div class="date">
                                                    <p>2022-Now</p>
                                                </div>
                                                <div class="info">
                                                    <div class="icon">
                                                        <img src="https://wibidigital.com/assets/img/favicon.png"
                                                            alt="adobe">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Wibi Digital Teknologi</h4>
                                                        <h6 class="subtitle">Web Developer</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">
                                                    <p>2021-2022</p>
                                                </div>
                                                <div class="info">
                                                    <div class="icon">
                                                        <img src="https://crm.hepta.co.id/assets/img/fav-icon.png"
                                                            alt="google">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Heptaco Digital Media
                                                        </h4>
                                                        <h6 class="subtitle">Web Developer

                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">
                                                    <p>2019-2021</p>
                                                </div>
                                                <div class="info">
                                                    <div class="icon">
                                                        <img src="https://www.inti.co.id/wp-content/uploads/2020/03/Logo-INTI_a.svg"
                                                            alt="meta">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">PT. Inti
                                                        </h4>
                                                        <h6 class="subtitle">Internship Web Developer
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card expertise-card">
                                <div class="card-body">
                                    <h3 class="card-title">My Expert Area
                                    </h3>
                                    <div class="expertise-main mt-24">
                                        <div class="row g-3">
                                            <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                                <div class="expertise-item">
                                                    <div class="image text-center">
                                                        <img src="{{asset("assets/img/icons/laravel.svg")}}" alt="Laravel">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Laravel</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                                <div class="expertise-item">
                                                    <div class="image text-center">
                                                        <img src="{{asset("assets/img/icons/notion.svg")}}"
                                                            alt="notion">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Notion</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                                <div class="expertise-item">
                                                    <div class="image text-center">
                                                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/dd/MySQL_logo.svg/150px-MySQL_logo.svg.png"
                                                            alt="micro">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Database</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                                <div class="expertise-item">
                                                    <div class="image text-center">
                                                        <img src="{{asset("assets/img/icons/figma.svg")}}" alt="figma">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Figma</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                                <div class="expertise-item">
                                                    <div class="image text-center">
                                                        <img src="{{asset("assets/img/icons/github.svg")}}"
                                                            alt="github">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Github</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                                <div class="expertise-item">
                                                    <div class="image text-center">
                                                        <img src="https://github.githubassets.com/assets/actions-icon-actions-61925a4b8822.svg"
                                                            alt="zeplin">
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">Github Action</h4>
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
                <div class="col-xl-4">
                    <div class="card card-projects">
                        <div class="card-body">

                            <h3 class="card-title">Recent Projects <a class="link-btn" href="{{route("works")}}">All
                                    Projects
                                    <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.16699 10H15.8337" stroke="#4770FF" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.833 15L15.833 10" stroke="#4770FF" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.833 5L15.833 10" stroke="#4770FF" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a></h3>
                            <div class="projects-main mt-24">
                                <div class="row g-4 parent-container">
                                    <div class="col-lg-12">
                                        <div class="project-item">
                                            <div class="image">
                                                <img src="{{asset("assets/img/projects/Flozorsgym.png")}}"
                                                    alt="flozorsgym" class="img-fluid w-100">
                                                <a href="https://flozorsgym.com/" target="_blank"
                                                    class="full-image-preview ">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5">
                                                        <path d="M9 18l6-6-6-6"></path>
                                                    </svg>
                                                </a>
                                                <div class="info">
                                                    <span class="category">Web Development</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="project-item">
                                            <div class="image">
                                                <img src="{{asset("assets/img/projects/enforcea.png")}}" alt="enforcea"
                                                    class="img-fluid w-100">
                                                <a href="https://www.enforcea.com/" target="_blank"
                                                    class="full-image-preview ">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5">
                                                        <path d="M9 18l6-6-6-6"></path>
                                                    </svg>
                                                </a>
                                                <div class="info">
                                                    <span class="category">Web Development</span>
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
            <div class="services-area mt-24">
                <div class="row g-4">
                    <div class="col-xl-8">
                        <div class="card services-card">
                            <div class="card-body">
                                <h3 class="card-title">Services I Offered</h3>
                                <div class="services-main mt-24">
                                    <div class="row g-4 justify-content-center align-items-center">
                                        <div class="col-md-3 col-sm-6 col-6">
                                            <div class="services-item text-center">
                                                <div class="image">
                                                    <img src="{{asset("assets/img/icons/prd-design.svg")}}"
                                                        alt="prd-design">
                                                </div>
                                                <div class="text">
                                                    <h3 class="title">Web Design</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-6">
                                            <div class="services-item text-center">
                                                <div class="image">
                                                    <img src="{{asset("assets/img/icons/branding.svg")}}"
                                                        alt="branding">
                                                </div>
                                                <div class="text">
                                                    <h3 class="title">Database</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-6">
                                            <div class="services-item text-center">
                                                <div class="image">
                                                    <img src="{{asset("assets/img/icons/web-development.svg")}}"
                                                        alt="Web Development">
                                                </div>
                                                <div class="text">
                                                    <h3 class="title">Web Development</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card lets-talk-together-card">
                            <div class="card-body">
                                <div class="scrolling-info">
                                    <div class="slider-item">
                                        <p>
                                            Available For Hire 🚀 Web Developer 💻 Available For
                                            Hire 🚀 Web Developer 💻
                                        </p>
                                    </div>
                                </div>
                                <h3 class="card-title">Let's👋
                                    <span class="d-block">Work Together</span>
                                </h3>
                                <a class="link-btn" href="{{route("contact")}}"> Let's Talk
                                    <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 11.6665V6.6665H12.5" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="background-shapes">
        <div class="shape-1 common-shape">
            <img src="{{asset("assets/img/bg/banner-shape-1.png")}}" alt="banner-shape-1">
        </div>
        <div class="shape-2 common-shape">
            <img src="{{asset("assets/img/bg/banner-shape-1.png")}}" alt="banner-shape-1">
        </div>
        <div class="threed-shape-1 move-with-cursor" data-value="1">
            <img src="{{asset("assets/img/bg/object-3d-1.png")}}" alt="object-3d-1">
        </div>
        <div class="threed-shape-2 move-with-cursor" data-value="1">
            <img src="{{asset("assets/img/bg/object-3d-2.png")}}" alt="object-3d-2">
        </div>
    </div>
@endsection