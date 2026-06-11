@extends('frontend.layouts.app')

@section('meta')

<title>Privacy Policy | HADevZone</title>

<meta name="title" content="Privacy Policy | HADevZone">

<meta name="description" content="Read HADevZone privacy policy to understand how we handle user data and protect your information.">

<meta name="keywords" content="privacy policy, data protection, HADevZone legal">

<meta property="og:title" content="Privacy Policy | HADevZone">

<meta property="og:description" content="Learn how we protect your data and privacy.">

@endsection

@section('content')


        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 bg-header-privacypolicy">

            <div class="row py-5">

                <div class="col-12 pt-lg-5 mt-lg-5 text-center">

                    <!-- <h5
                        class="text-white text-uppercase mb-3 animated slideInDown">
                        HADevZone Legal Information
                    </h5> -->

                    <h1
                        class="display-3 text-white animated zoomIn">
                        Privacy Policy
                    </h1>

                    <a href="{{ route('home')}}"
                        class="h5 text-white">
                        Home
                    </a>

                    <i class="far fa-circle text-white px-2"></i>

                    <a href="#"
                        class="h5 text-white">
                        Privacy Policy
                    </a>

                </div>

            </div>

        </div>
        <!-- Hero End -->

    </div>
    <!-- Navbar End -->

    <!-- Privacy Policy Start -->
    <div class="container-fluid py-5 wow fadeInUp"
        data-wow-delay="0.1s">

        <div class="container py-5">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="bg-light rounded p-5 shadow-sm">

                        <div
                            class="section-title position-relative pb-3 mb-5">

                            <h5
                                class="fw-bold text-primary text-uppercase">

                                Privacy & Data Protection

                            </h5>

                            <h1 class="mb-0">

                                Your Information Matters To Us

                            </h1>

                        </div>

                        <p class="mb-4">
                            HADevZone values your privacy and is committed to
                            protecting the information you share while using our
                            website and services. This Privacy Policy explains
                            how information is collected, used and protected
                            when you contact us, request a quote or interact
                            with our digital platforms.
                        </p>

                        <div class="row g-4 mt-2">

                            <div class="col-md-6">

                                <div
                                    class="bg-white rounded p-4 h-100 border">

                                    <div
                                        class="bg-primary rounded d-inline-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">

                                        <i
                                            class="fa fa-user-shield text-white"></i>

                                    </div>

                                    <h4>
                                        Information We Collect
                                    </h4>

                                    <p class="mb-0">
                                        We may collect your name, phone number,
                                        email address and project details when
                                        you contact our team or submit forms on
                                        the website.
                                    </p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div
                                    class="bg-white rounded p-4 h-100 border">

                                    <div
                                        class="bg-primary rounded d-inline-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">

                                        <i
                                            class="fa fa-database text-white"></i>

                                    </div>

                                    <h4>
                                        How Information Is Used
                                    </h4>

                                    <p class="mb-0">
                                        Information is used to communicate with
                                        clients, discuss projects, improve
                                        services and provide support related to
                                        our web development solutions.
                                    </p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div
                                    class="bg-white rounded p-4 h-100 border">

                                    <div
                                        class="bg-primary rounded d-inline-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">

                                        <i
                                            class="fa fa-lock text-white"></i>

                                    </div>

                                    <h4>
                                        Data Protection
                                    </h4>

                                    <p class="mb-0">
                                        We apply reasonable security practices
                                        to help protect submitted information
                                        from unauthorized access or misuse.
                                    </p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div
                                    class="bg-white rounded p-4 h-100 border">

                                    <div
                                        class="bg-primary rounded d-inline-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">

                                        <i
                                            class="fa fa-cookie-bite text-white"></i>

                                    </div>

                                    <h4>
                                        Cookies & Analytics
                                    </h4>

                                    <p class="mb-0">
                                        Cookies may be used to improve browsing
                                        experience, website performance and user
                                        interaction analysis.
                                    </p>

                                </div>

                            </div>

                        </div>

                        <div class="mt-5">

                            <h3 class="mb-3">
                                Third-Party Services
                            </h3>

                            <p>
                                Some features, tools or external platforms linked
                                with the website may operate under their own
                                privacy policies and terms.
                            </p>

                            <h3 class="mt-5 mb-3">
                                Policy Updates
                            </h3>

                            <p>
                                HADevZone may update this Privacy Policy when
                                necessary. Any future changes will appear on
                                this page.
                            </p>

                            <h3 class="mt-5 mb-3">
                                Contact Information
                            </h3>

                            <p class="mb-0">
                                If you have any questions regarding this Privacy
                                Policy, feel free to contact our team through
                                the contact page or WhatsApp support.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Privacy Policy End -->
@endsection
