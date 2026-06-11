@extends('frontend.layouts.app')

@section('meta')

<title>Get a Quote | HADevZone</title>

<meta name="title" content="Request a Quote | HADevZone">

<meta name="description" content="Request a custom quote for your website, CRM, or web application project from HADevZone development team.">

<meta name="keywords" content="get a quote, web development price, CRM cost, website development estimate">

<meta property="og:title" content="Request a Quote | HADevZone">

<meta property="og:description" content="Get a custom price estimate for your web development project.">

@endsection

@section('content')


        <div class="container-fluid bg-primary py-5 bg-header-quote" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Project Quote</h1>
                    <a href="{{ route('home')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('quote')}}" class="h5 text-white">Quote</a>
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
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Search quote, service or project type">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Tell Us Your Idea and Get the Right Development Plan</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Project review response</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>WhatsApp consultation</h5>
                        </div>
                    </div>
                    <p class="mb-4">Every web project has different goals, features, and budget requirements. Share what you want to build, and HADevZone will help you understand the right structure, key modules, expected workflow, and suitable development direction. You can request a quote for a business website, dashboard, CRM, HRM portal, eCommerce store, booking system, client portal, admin panel, or any custom web application.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Discuss your project directly</h5>
                            <h4 class="text-primary mb-0">+92 311 4973366</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        {{-- <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Business Website</option>
                                        <option value="2">Dashboard / Portal</option>
                                        <option value="3">CRM / HRM System</option>
                                        <option value="4">eCommerce Store</option>
                                        <option value="5">Custom Web Application</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Describe your project, features, and expected timeline"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Send Quote Request</button>
                                </div>
                            </div>
                        </form> --}}

                        <form id="quoteForm">
                            @csrf

                            <div class="row g-3">

                                <div class="col-xl-12">
                                    <input type="text"
                                        name="name"
                                        class="form-control bg-light border-0"
                                        placeholder="Your Name"
                                        style="height: 55px;"
                                        required>
                                </div>

                                <div class="col-12">
                                    <input type="email"
                                        name="email"
                                        class="form-control bg-light border-0"
                                        placeholder="Your Email"
                                        style="height: 55px;"
                                        required>
                                </div>

                                <div class="col-12">
                                    <select name="service"
                                            class="form-select bg-light border-0"
                                            style="height: 55px;"
                                            required>
                                        <option value="">Select A Service</option>
                                        <option value="Business Website">Business Website</option>
                                        <option value="Dashboard / Portal">Dashboard / Portal</option>
                                        <option value="CRM / HRM System">CRM / HRM System</option>
                                        <option value="eCommerce Store">eCommerce Store</option>
                                        <option value="Custom Web Application">Custom Web Application</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <textarea name="message"
                                            class="form-control bg-light border-0"
                                            rows="3"
                                            placeholder="Describe your project, features, and expected timeline"
                                            required></textarea>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">
                                        Send Quote Request
                                    </button>
                                </div>

                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


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
