@extends('frontend.layouts.app')

@section('meta')
    <title>HADevZone - Websites, Dashboards & Business Web Solutions</title>

@endsection

@section('content')


        <div class="container-fluid bg-primary py-5 bg-header-clientreviews" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Client Reviews</h1>
                    <a href="{{ route('home')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('testimonial')}}" class="h5 text-white">Reviews</a>
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
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Search client feedback or service result">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Client Reviews</h5>
                <h1 class="mb-0">Feedback Based on Real Project Needs and Business Goals</h1>
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
                        The website gave our business a cleaner presentation. Visitors can now understand our services quickly and contact us without confusion.
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
                        The dashboard made our internal work easier to control. Reports, records, and activity tracking became more organized in one place.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg')}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Online Seller</h4>
                            <small class="text-uppercase">eCommerce Store</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Product pages, checkout flow, and order handling became simple for customers and easier for us to manage from the backend.
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
                        Our leads, follow-ups, and customer records are now easier to monitor. The portal helped reduce manual work and missed updates.
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
