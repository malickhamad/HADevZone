@extends('frontend.layouts.app')

@section('meta')

<title>Features | HADevZone</title>

<meta name="title" content="Platform Features | HADevZone">

<meta name="description" content="Discover features of HADevZone solutions including performance, scalability, security, and custom integrations.">

<meta name="keywords" content="web features, CRM features, dashboard features, secure web apps, scalable systems">

<meta property="og:title" content="Platform Features | HADevZone">

<meta property="og:description" content="Powerful features designed for modern web applications and business systems.">

@endsection

@section('content')


        <div class="container-fluid bg-primary py-5 bg-header-features" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Our Solutions</h1>
                    <a href="{{ route('home')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('feature')}}" class="h5 text-white">Solutions</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Search solution, feature or service">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Development Approach</h5>
                <h1 class="mb-0">Web Solutions Planned for Performance, Control and Growth</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Requirement Mapping</h4>
                            <p class="mb-0">We first understand your business process, target users, content needs and required modules before starting development.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Client-Ready Interface</h4>
                            <p class="mb-0">Every page is written and arranged to look professional, guide visitors clearly and support better customer interaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('assets/img/feature.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Role-Based Systems</h4>
                            <p class="mb-0">For portals, CRM, HRM and dashboards, we can plan access levels for admins, staff, clients or other user types.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>Launch Support</h4>
                            <p class="mb-0">After development, we help with final checks, basic guidance, content updates and improvements when needed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('assets/img/vendor-1.jpg')}}" alt="">
                    <img src="{{ asset('assets/img/vendor-2.jpg')}}" alt="">
                    <img src="{{ asset('assets/img/vendor-3.jpg')}}" alt="">
                    <img src="{{ asset('assets/img/vendor-4.jpg')}}" alt="">
                    <img src="{{ asset('assets/img/vendor-5.jpg')}}" alt="">
                    <img src="{{ asset('assets/img/vendor-6.jpg')}}" alt="">
                    <img src="{{ asset('assets/img/vendor-7.jpg')}}" alt="">
                    <img src="{{ asset('assets/img/vendor-8.jpg')}}" alt="">
                    <img src="{{ asset('assets/img/vendor-9.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    @endsection
