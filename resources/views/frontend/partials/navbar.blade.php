    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Pakistan</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+92 311 4973366</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>
info@hadevzone.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand p-0">
                <img src="{{ asset('assets/img/Logo_white.png') }}" alt="HADevZone Logo" class="logo-white">
                <img src="{{ asset('assets/img/Logo_black.png') }}" alt="HADevZone Logo" class="logo-black">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>

                    <a href="{{ route('service') }}"
                        class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a>

                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ request()->routeIs('feature', 'team', 'testimonial', 'quote') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">
                            Pages
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('feature') }}"
                                class="dropdown-item {{ request()->routeIs('feature') ? 'active' : '' }}">Our
                                Solutions</a>

                            <a href="{{ route('team') }}"
                                class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Team Members</a>

                            <a href="{{ route('testimonial') }}"
                                class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Client
                                Reviews</a>

                            <a href="{{ route('quote') }}"
                                class="dropdown-item {{ request()->routeIs('quote') ? 'active' : '' }}">Project
                                Quote</a>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>

                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="https://wa.me/923114973366?text=Hi%20HADevZone%2C%20I%20want%20to%20discuss%20a%20website%20or%20custom%20web%20development%20project.%20Please%20guide%20me."
                    class="btn btn-primary py-2 px-4 ms-3">Start Project</a>
            </div>
        </nav>
