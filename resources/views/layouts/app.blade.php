<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
</head>
<body>
    <nav>
        <!-- Navigation bar here -->
    </nav>

    <div class="container">
        @yield('content') <!-- This will display the content from your child views -->
    </div>

    <footer>
        <!-- Footer content here -->
    </footer>

    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
