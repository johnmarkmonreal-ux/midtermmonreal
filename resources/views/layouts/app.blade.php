<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Shared CSS file linked from public/css/style.css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="shell">

        <!-- Shared Navigation (sidebar) -->
        <aside class="sidebar">
            <div class="brand">STUDENT<span>PORTAL</span></div>
            <nav class="side-nav">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </nav>
        </aside>

        <div class="content">
            <!-- Dynamic Content Area -->
            <main class="site-main">
                @yield('content')
            </main>

            <!-- Shared Footer -->
            <footer class="site-footer">
                <p>&copy; {{ date('Y') }} Student Portal. All rights reserved.</p>
            </footer>
        </div>

    </div>

</body>
</html>
