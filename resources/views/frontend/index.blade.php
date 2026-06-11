@extends('frontend.layouts.app')

@section('meta')


<title>HADevZone | Web Development & Business Solutions</title>

<meta name="title" content="HADevZone | Web Development & Business Solutions">

<meta name="description" content="HADevZone builds modern websites, dashboards, CRM systems, eCommerce stores, and custom web applications for businesses of all sizes.">

<meta name="keywords" content="web development, business websites, CRM systems, HRM systems, dashboards, web applications, eCommerce websites">

<meta property="og:title" content="HADevZone | Web Development & Business Solutions">

<meta property="og:description" content="Professional websites, dashboards, CRM systems, eCommerce stores, and custom web solutions for growing businesses.">

@endsection

@section('content')


     <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/banner1.png')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Professional Web Development</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Smart Websites for Modern Business</h1>
                            <a href="{{route('quote')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Discuss Project</a>
                            <a href="{{route('contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/carousel-2.png')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Custom Digital Systems</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Dashboards, Portals & Web Apps for Smarter Business</h1>
                            <a href="{{route('quote')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Consultation</a>
                            <a href="https://wa.me/923114973366?text=Hi%20HADevZone%2C%20I%20want%20to%20discuss%20a%20website%20or%20custom%20web%20development%20project.%20Please%20guide%20me." class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">WhatsApp Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Navbar & Carousel End -->

        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content"
                    style="background: rgba(9, 30, 62, .7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div
                        class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text"
                                class="form-control bg-transparent border-primary p-3"
                                placeholder="Search service, system or solution">
                            <button class="btn btn-primary px-4"><i
                                    class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->

        <!-- Facts Start -->
        <div class="container-fluid facts py-5 pt-lg-0">
            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                        <div
                            class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px;">
                            <div
                                class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Client Projects</h5>
                                <h1 class="text-white mb-0"
                                    data-toggle="counter-up">50</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                        <div
                            class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px;">
                            <div
                                class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-primary mb-0">Web Solutions</h5>
                                <h1 class="mb-0"
                                    data-toggle="counter-up">100</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                        <div
                            class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px;">
                            <div
                                class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-primary"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Support Focus</h5>
                                <h1 class="text-white mb-0"
                                    data-toggle="counter-up">24</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts Start -->

        <!-- About Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5
                                class="fw-bold text-primary text-uppercase">About
                                HADevZone</h5>
                            <h1 class="mb-0">Clear, Modern and Purpose-Built Web
                                Development</h1>
                        </div>
                        <p class="mb-4">HADevZone helps businesses move from a
                            simple idea to a working digital platform. We
                            create Business Websites, Dashboards, Web Portals,
                            Online stores, CRM/HRM Portals, Booking
                            Platforms, Shopify Stores, Wordpress websites and
                            Admin Panels with a focus on clean
                            presentation, useful features and easy management.
                            Every project is planned according to your
                            goals, audience and workflow so the final result
                            looks professional and works for real business
                            needs.</p>
                        <div class="row g-0 mb-3">
                            <div class="col-sm-6 wow zoomIn"
                                data-wow-delay="0.2s">
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>Business
                                    Websites</h5>
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>Admin
                                    Dashboards</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn"
                                data-wow-delay="0.4s">
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>CRM
                                    & HRM Portals</h5>
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>eCommerce
                                    Stores</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn"
                                data-wow-delay="0.4s">
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>Shopify
                                    Stores</h5>
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>Landing
                                    Pages</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn"
                                data-wow-delay="0.4s">
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>POS
                                    Systems</h5>
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>Wordpress
                                    Websites</h5>
                            </div>

                        </div>
                        <div class="d-flex align-items-center mb-4 wow fadeIn"
                            data-wow-delay="0.6s">
                            <div
                                class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Talk to our team today</h5>
                                <h4 class="text-primary mb-0">+92 311
                                    4973366</h4>
                            </div>
                        </div>
                        <a href="{{ route('quote')}}"
                            class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                            data-wow-delay="0.9s">Plan My
                            Website</a>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img
                                class="position-absolute w-100 h-100 rounded wow zoomIn"
                                data-wow-delay="0.9s"
                                src="{{ asset('assets/img/about.jpg')}}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Features Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div
                    class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                    style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Why Choose
                        Us</h5>
                    <h1 class="mb-0">A Development Approach That Keeps Your
                        Business First</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn"
                                data-wow-delay="0.2s">
                                <div
                                    class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-cubes text-white"></i>
                                </div>
                                <h4>Requirement-Based Planning</h4>
                                <p class="mb-0">We understand your service,
                                    users and process before suggesting the best
                                    structure for your project.</p>
                            </div>
                            <div class="col-12 wow zoomIn"
                                data-wow-delay="0.6s">
                                <div
                                    class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <h4>Polished Visual Experience</h4>
                                <p class="mb-0">Your pages are built to look
                                    clean, trustworthy, mobile-friendly and easy
                                    for visitors to understand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s"
                        style="min-height: 350px;">
                        <div class="position-relative h-100">
                            <img
                                class="position-absolute w-100 h-100 rounded wow zoomIn"
                                data-wow-delay="0.1s"
                                src="{{ asset('assets/img/feature.jpg')}}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn"
                                data-wow-delay="0.4s">
                                <div
                                    class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-users-cog text-white"></i>
                                </div>
                                <h4>Useful Management Tools</h4>
                                <p class="mb-0">We add practical features for
                                    records, leads, orders, staff, reports and
                                    daily operations.</p>
                            </div>
                            <div class="col-12 wow zoomIn"
                                data-wow-delay="0.8s">
                                <div
                                    class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <h4>Smooth Project Guidance</h4>
                                <p class="mb-0">You get clear communication from
                                    planning to launch, with support for
                                    changes and improvements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Start -->

        <!-- Service Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div
                    class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                    style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Our
                        Services</h5>
                    <h1 class="mb-0">Everything Your Business Needs to Build a
                        Strong Online System</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 wow zoomIn"
                        data-wow-delay="0.3s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fa fa-shield-alt text-white"></i>
                            </div>
                            <h4 class="mb-3">Business Websites</h4>
                            <p class="m-0">Professional pages for companies,
                                agencies, institutes, consultants, service
                                providers and growing brands.</p>
                            <a class="btn btn-lg btn-primary rounded" href>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn"
                        data-wow-delay="0.6s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fa fa-chart-pie text-white"></i>
                            </div>
                            <h4 class="mb-3">Admin Dashboards</h4>
                            <p class="m-0">Control panels for leads, users,
                                sales, reports, tasks, staff activity and
                                business records.</p>
                            <a class="btn btn-lg btn-primary rounded" href>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn"
                        data-wow-delay="0.9s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fa fa-code text-white"></i>
                            </div>
                            <h4 class="mb-3">Web Portals</h4>
                            <p class="m-0">Secure login areas for clients,
                                employees, students, vendors, members and
                                internal teams.</p>
                            <a class="btn btn-lg btn-primary rounded" href>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn"
                        data-wow-delay="0.3s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fab fa-android text-white"></i>
                            </div>
                            <h4 class="mb-3">CRM & HRM Systems</h4>
                            <p class="m-0">Platforms for customers, employees,
                                attendance, departments, tasks, follow-ups
                                and reports.</p>
                            <a class="btn btn-lg btn-primary rounded" href>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn"
                        data-wow-delay="0.6s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fa fa-search text-white"></i>
                            </div>
                            <h4 class="mb-3">eCommerce Websites</h4>
                            <p class="m-0">Online stores with product pages,
                                categories, cart, checkout, payments and order
                                handling.</p>
                            <a class="btn btn-lg btn-primary rounded" href>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn"
                        data-wow-delay="0.9s">
                        <div
                            class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                            <h3 class="text-white mb-3">Need a Special
                                Feature?</h3>
                            <p class="text-white mb-3">Share your idea and we
                                will suggest the right structure, modules and
                                development flow.</p>
                            <h2 class="text-white mb-0">+92 311 4973366</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Quote Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5
                                class="fw-bold text-primary text-uppercase">Request
                                A Quote</h5>
                            <h1 class="mb-0">Tell Us What You Want to Build</h1>
                        </div>
                        <div class="row gx-3">
                            <div class="col-sm-6 wow zoomIn"
                                data-wow-delay="0.2s">
                                <h5 class="mb-4"><i
                                        class="fa fa-reply text-primary me-3"></i>Reply
                                    within 24 hours</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn"
                                data-wow-delay="0.4s">
                                <h5 class="mb-4"><i
                                        class="fa fa-phone-alt text-primary me-3"></i>Call
                                    & WhatsApp support
                                </h5>
                            </div>
                        </div>
                        <p class="mb-4">Send your project details and we will
                            help you choose the right direction. You can
                            contact us for a company website, online store,
                            dashboard, portal, CRM, HRM, booking system,
                            admin panel or any other web-based business
                            platform. We will review the requirement and guide
                            you with a practical development approach.</p>
                        <div class="d-flex align-items-center mt-2 wow zoomIn"
                            data-wow-delay="0.6s">
                            <div
                                class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Share your requirement with
                                    us</h5>
                                <h4 class="text-primary mb-0">+92 314
                                    7962029</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div
                            class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                            data-wow-delay="0.9s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-xl-12">
                                        <input type="text"
                                            class="form-control bg-light border-0"
                                            placeholder="Your Name"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <input type="email"
                                            class="form-control bg-light border-0"
                                            placeholder="Your Email"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <select
                                            class="form-select bg-light border-0"
                                            style="height: 55px;">
                                            <option selected>Select A
                                                Service</option>
                                            <option value="1">Website
                                                Development</option>
                                            <option value="2">Dashboard / Portal
                                                Development</option>
                                            <option value="3">Custom Web
                                                Solution</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea
                                            class="form-control bg-light border-0"
                                            rows="3"
                                            placeholder="Tell us about your project"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3"
                                            type="submit">Send Project
                                            Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->

        <!-- Testimonial Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div
                    class="section-title text-center position-relative pb-3 mb-4 mx-auto"
                    style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Client
                        Reviews</h5>
                    <h1 class="mb-0">Real Value Businesses Expect From Good Web
                        Development</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp"
                    data-wow-delay="0.6s">
                    <div class="testimonial-item bg-light my-4">
                        <div
                            class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded"
                                src="{{ asset('assets/img/testimonial-1.jpg')}}"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Business
                                    Client</h4>
                                <small class="text-uppercase">Company
                                    Website</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            The site presented our services clearly and made it
                            easier for visitors to understand what we
                            offer.
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div
                            class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded"
                                src="{{ asset('assets/img/testimonial-2.jpg')}}"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Business
                                    Founder</h4>
                                <small class="text-uppercase">Custom
                                    Dashboard</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Our reporting and record management became much
                            easier after shifting important work into one
                            panel.
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div
                            class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded"
                                src="{{ asset('assets/img/testimonial-3.jpg')}}"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Service
                                    Provider</h4>
                                <small class="text-uppercase">Lead Generation
                                    Website</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            The structure was simple for customers, and the
                            inquiry flow helped us receive better project
                            details.
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div
                            class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded"
                                src="{{ asset('assets/img/testimonial-4.jpg')}}"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Business
                                    Owner</h4>
                                <small class="text-uppercase">CRM / Portal
                                    Solution</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Customer records, follow-ups and internal tasks
                            became more organized through the new portal.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Team Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div
                    class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                    style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Team
                        Members</h5>
                    <h1 class="mb-0">Meet the People Behind HADevZone</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div
                                class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="{{ asset('assets/img/team-1.png')}}" alt>
                                <div class="team-social">
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Adrash Umair</h4>
                                <p class="text-uppercase m-0">Web Developer &
                                    Project Lead</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div
                                class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="{{ asset('assets/img/team-2.png')}}" alt>
                                <div class="team-social">
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Hamad</h4>
                                <p class="text-uppercase m-0">Dashboard & Web
                                    System Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div
                                class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="{{ asset('assets/img/team-3.jpeg')}}" alt>
                                <div class="team-social">
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a
                                        class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Moin ul Deen</h4>
                                <p class="text-uppercase m-0">Wordpress
                                    Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Vendor Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 mb-5">
                <div class="bg-white">
                    <div class="owl-carousel vendor-carousel">
                        <img src="{{ asset('assets/img/vendor-1.jpg')}}" alt>
                        <img src="{{ asset('assets/img/vendor-2.jpg')}}" alt>
                        <img src="{{ asset('assets/img/vendor-3.jpg')}}" alt>
                        <img src="{{ asset('assets/img/vendor-4.jpg')}}" alt>
                        <img src="{{ asset('assets/img/vendor-5.jpg')}}" alt>
                        <img src="{{ asset('assets/img/vendor-6.jpg')}}" alt>
                        <img src="{{ asset('assets/img/vendor-7.jpg')}}" alt>
                        <img src="{{ asset('assets/img/vendor-8.jpg')}}" alt>
                        <img src="{{ asset('assets/img/vendor-9.jpg')}}" alt>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor End -->
@endsection
