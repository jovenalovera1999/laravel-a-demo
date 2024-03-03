<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />

    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <main id="main">
        <div class="container">
            <!-- Content that will show on webpages -->
            @yield('content')
        </div>
    </main>
    <!-- JS files -->
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    <!-- JSON file -->
    <script src="{{ asset('json/bootstrap-icons.json') }}"></script>

    <!-- Main js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>