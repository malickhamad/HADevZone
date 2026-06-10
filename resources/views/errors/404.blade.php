<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Page Not Found</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #f8f9fa;
        }

        .vh-100-center {
            min-height: 100vh;
        }

        lottie-player {
            width: 100%;
            max-width: 420px;
            height: auto;
        }

        @media (min-width: 992px) {
            lottie-player {
                max-width: 520px;
            }
        }
    </style>
</head>

<body>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <div class="container vh-100-center d-flex align-items-center justify-content-center">
        <div class="text-center px-3">

            <!-- Animation -->
            <lottie-player
                src="https://assets9.lottiefiles.com/packages/lf20_u1xuufn3.json"
                background="transparent"
                speed="1"
                loop
                autoplay
                class="mx-auto mb-3">
            </lottie-player>

            <!-- Title -->
            <h1 class="fw-bold mb-2">404</h1>
            <h4 class="fw-semibold text-dark mb-2">Page Not Found</h4>

            <!-- Description -->
            <p class="text-muted mb-4">
                The page you are looking for was moved, removed, or never existed.
            </p>

            <!-- Button -->
            <a href="{{ route('home')}}" class="btn btn-primary btn-lg px-4">
                Back to Homepage
            </a>

        </div>
    </div>

</body>

</html> 