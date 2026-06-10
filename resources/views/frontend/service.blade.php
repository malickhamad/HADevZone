@extends('frontend.layouts.app')

@section('meta')
    <title>HADevZone - Websites, Dashboards & Business Web Solutions</title>

@endsection

@section('content')


        <div class="container-fluid bg-primary py-5 bg-header-services" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Services</h1>
                    <a href="{{ route('home')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('service')}}" class="h5 text-white">Services</a>
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
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Search website, dashboard, portal or CRM service">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Web Development Services Built for Real Business Use</h1>
            </div>
            <div class="row g-5">

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Business Websites</h4>
                        <p class="m-0">Modern websites for service providers, companies, institutes, consultants, agencies, and brands that need a professional online presence.</p>
                        <a class="btn btn-lg btn-primary rounded"  href="{{ route('service.detail', 'service=business-websites') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Admin Dashboards</h4>
                        <p class="m-0">Custom dashboards to control leads, users, sales, reports, staff records, orders, tasks, and daily business activities.</p>
                        <a class="btn btn-lg btn-primary rounded"  href="{{ route('service.detail', 'service=admin-dashboards') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Web Portals</h4>
                        <p class="m-0">Secure portals for clients, employees, students, vendors, teams, and members with login access and organized user roles.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('service.detail', 'service=web-portals') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">CRM & HRM Systems</h4>
                        <p class="m-0">Business systems for managing customers, employees, attendance, departments, follow-ups, records, reports, and workflows.</p>
                        <a class="btn btn-lg btn-primary rounded"  href="{{ route('service.detail', 'service=crm-hrm-systems') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">eCommerce Websites</h4>
                        <p class="m-0">Online stores with product pages, categories, cart, checkout, order tracking, payment setup, and easy admin management.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('service.detail', 'service=ecommerce-websites') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Need a Custom Platform?</h3>
                        <p class="text-white mb-3">Share your idea for a booking system, reporting tool, service portal, quotation system, or any web-based solution.</p>
                        <h2 class="text-white mb-4">+92 311 4973366</h2>
                        <a class="btn btn-dark py-2 px-4" href="{{ route('service.detail', 'service=custom-web-applications') }}">View Details</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Client Reviews</h5>
                <h1 class="mb-0">Results Clients Expect From Professional Web Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-1.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Business Client</h4>
                            <small class="text-uppercase">Service Website</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        The website explained our services properly and gave visitors a clear path to send inquiries.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Operations Manager</h4>
                            <small class="text-uppercase">Admin Dashboard</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Our records, reports, and staff activity became easier to manage through one simple panel.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Online Seller</h4>
                            <small class="text-uppercase">eCommerce Website</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Product listing, checkout, and order handling became more organized for our online customers.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-4.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Service Company</h4>
                            <small class="text-uppercase">CRM Portal</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Lead follow-ups and customer records became much easier to track with the custom portal.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
