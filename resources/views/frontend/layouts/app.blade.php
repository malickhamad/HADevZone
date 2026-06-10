<!DOCTYPE html>
<html lang="en">

<head>
    @yield('meta')
    @include('frontend.partials.header')
</head>

<body>

    @include('frontend.partials.navbar')

    @yield('content')

    @include('frontend.partials.footer')

    @include('frontend.partials.scripts')

       <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>
</html>