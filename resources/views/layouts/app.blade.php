<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | AURELIS</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="header">
    <div class="container nav-container">
        <a href="{{ route('home') }}" class="logo">AURELIS</a>

        <nav class="navbar">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('service') }}">Service</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="container footer-content">
        <div>
            <h2>AURELIS</h2>
            <p>Creative digital portfolio.</p>
        </div>
        <div class="footer-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('service') }}">Service</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
    </div>

    <div class="container copyright">
        © 2026 AURELIS. All Rights Reserved.
    </div>
</footer>

</body>
</html>
