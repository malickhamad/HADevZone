@extends('frontend.layouts.app')

@section('meta')
    <title>HADevZone - Websites, Dashboards & Business Web Solutions</title>
@endsection

@section('content')
    <div class="container-fluid bg-primary py-5 bg-header-contactus" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                <a href="{{ route('home') }}" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="{{ route('contact') }}" class="h5 text-white">Contact</a>
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
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Search service, system or solution">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">Let’s Discuss Your Website or Web System</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call or WhatsApp</h5>
                            <h4 class="text-primary mb-0">+92 311 4973366</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email Your Requirement</h5>
                            <h4 class="text-primary mb-0">info@hadevzone.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Location</h5>
                            <h4 class="text-primary mb-0">Faisalabad, Pakistan</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <h4 class="mb-4">Share your project details with HADevZone. We can help you plan a websites.</h4>
                    <div id="successMsg" class="alert alert-success d-none"></div>


                    <form id="contactForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4"
                                    placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4"
                                    placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control border-0 bg-light px-4"
                                    placeholder="Project Type / Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="4"
                                    placeholder="Tell us about your project"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" id="submitBtn">Send Project
                                    Request</button>
                            </div>
                        </div>
                    </form>



                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://maps.google.com/maps?q=Faisalabad%2C%20Pakistan&t=&z=12&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('assets/img/vendor-1.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-2.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-3.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-4.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-5.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-6.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-7.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-8.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-9.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            $('#submitBtn').text('Sending...').prop('disabled', true);

            $.ajax({
                url: "{{ route('contact.submit') }}",
                type: "POST",
                data: $(this).serialize(),

                success: function(res) {
                    showSuccessAlert(res.message);

                    $('#contactForm')[0].reset();
                    $('#submitBtn').text('Send Project Request').prop('disabled', false);
                },

                error: function() {
                    showErrorAlert('Something went wrong!');
                    $('#submitBtn').text('Send Project Request').prop('disabled', false);
                }
            });
        });
    </script>
@endsection
