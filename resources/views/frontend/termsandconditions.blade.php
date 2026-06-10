@extends('frontend.layouts.app')

@section('meta')
    <title>HADevZone - Websites, Dashboards & Business Web Solutions</title>

@endsection

@section('content')


        <!-- Hero Section Start -->
        <div class="container-fluid bg-primary py-5 bg-header-termsandconditions">

            <div class="row py-5">

                <div class="col-12 pt-lg-5 mt-lg-5 text-center">

                    <h1 class="display-4 text-white animated zoomIn">
                        Terms & Conditions
                    </h1>

                    <a href="{{ route('home')}}"
                        class="h5 text-white">Home</a>

                    <i
                        class="far fa-circle text-white px-2"></i>

                    <a href="#"
                        class="h5 text-white">Terms & Conditions</a>

                </div>
            </div>
        </div>
        <!-- Hero Section End -->

    </div>
    <!-- Navbar End -->

    <!-- Terms Start -->
    <div class="container-fluid py-5 wow fadeInUp"
        data-wow-delay="0.1s">

        <div class="container py-5">

            <div
                class="section-title position-relative pb-3 mb-5">

                <h5
                    class="fw-bold text-primary text-uppercase">
                    Legal Information
                </h5>

                <h1 class="mb-0">
                    Terms & Conditions for Using HADevZone Services
                </h1>

            </div>

            <div class="row g-5">

                <div class="col-lg-12">

                    <div class="bg-light rounded p-5">

                        <h3 class="mb-4">
                            1. Acceptance of Terms
                        </h3>

                        <p class="mb-5">
                            By using HADevZone services, website,
                            communication channels or project consultation,
                            you agree to follow the terms and conditions
                            mentioned on this page.
                        </p>

                        <h3 class="mb-4">
                            2. Services
                        </h3>

                        <p class="mb-5">
                            HADevZone provides website development,
                            dashboards, portals, ecommerce solutions,
                            CRM systems, HRM platforms, admin panels,
                            landing pages and related web-based digital
                            services according to project requirements.
                        </p>

                        <h3 class="mb-4">
                            3. Project Requirements
                        </h3>

                        <p class="mb-5">
                            Clients are responsible for providing
                            accurate project details, content,
                            images, access credentials and approvals
                            required for development. Delays in
                            communication or missing requirements may
                            affect delivery timelines.
                        </p>

                        <h3 class="mb-4">
                            4. Payments
                        </h3>

                        <p class="mb-5">
                            Payments for projects may be divided into
                            milestones or advance agreements depending
                            on project scope. Work may begin only after
                            confirmation of the agreed payment process.
                        </p>

                        <h3 class="mb-4">
                            5. Revisions & Changes
                        </h3>

                        <p class="mb-5">
                            Minor revisions related to the approved
                            project scope may be included during the
                            development process. Major changes,
                            additional modules or new features may
                            require updated pricing and timelines.
                        </p>

                        <h3 class="mb-4">
                            6. Intellectual Property
                        </h3>

                        <p class="mb-5">
                            Final project ownership may be transferred
                            to the client after full payment completion.
                            Third-party assets, plugins, themes or
                            licensed resources remain subject to their
                            original licenses and policies.
                        </p>

                        <h3 class="mb-4">
                            7. Website Content
                        </h3>

                        <p class="mb-5">
                            Clients are responsible for ensuring that
                            provided text, media, products and other
                            materials do not violate copyrights,
                            trademarks or legal regulations.
                        </p>

                        <h3 class="mb-4">
                            8. Support & Maintenance
                        </h3>

                        <p class="mb-5">
                            Basic support may be provided according to
                            the selected package or agreement. Extended
                            maintenance, upgrades or feature updates may
                            require additional service arrangements.
                        </p>

                        <h3 class="mb-4">
                            9. Limitation of Liability
                        </h3>

                        <p class="mb-5">
                            HADevZone will not be responsible for losses,
                            downtime, third-party service failures,
                            hosting issues, cyberattacks or damages
                            beyond direct project development services.
                        </p>

                        <h3 class="mb-4">
                            10. Policy Updates
                        </h3>

                        <p class="mb-0">
                            HADevZone may update these terms and
                            conditions when necessary. Continued use of
                            the website or services means acceptance of
                            updated policies.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Terms End -->

    <!-- Contact Box Start -->
    <div class="container-fluid py-5 wow fadeInUp"
        data-wow-delay="0.1s">

        <div class="container py-5">

            <div class="bg-primary rounded p-5 text-center">

                <h1 class="text-white mb-4">
                    Need More Information?
                </h1>

                <p class="text-white mb-4">
                    Contact our team if you have any questions
                    regarding project terms, services or website
                    policies.
                </p>

                <a href="{{ route('contact')}}"
                    class="btn btn-light py-3 px-5">
                    Contact Us
                </a>

            </div>

        </div>

    </div>
    <!-- Contact Box End -->

    @endsection
