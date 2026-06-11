<!DOCTYPE html>
<html lang="en">

<head>
    @yield('meta')

     <!-- Open Graph -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="HADevZone">

    <meta property="og:image" content="{{ asset('assets/img/banner.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('assets/img/banner.png') }}">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:image:alt" content="HA Dev Zone">
    <meta property="og:image:type" content="image/png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@yourtwitterhandle">
    <meta name="twitter:creator" content="@yourtwitterhandle">
    <meta name="twitter:image" content="{{ asset('assets/img/banner.png') }}">

   <!-- Robots -->
    @if (env('APP_ENV') == 'production')
        <meta name="robots" content="index, follow">
    @else
        <meta name="robots" content="noindex, nofollow">
    @endif

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">


    @include('frontend.partials.header')
</head>

<body>

    @include('frontend.partials.navbar')

    @yield('content')

    @include('frontend.partials.footer')

    @include('frontend.partials.scripts')

       <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <script>
const sendQuoteUrl = "{{ route('send.quote') }}";
const sendContactMessage = "{{ route('contact.submit') }}";

    </script>
</body>
</html>