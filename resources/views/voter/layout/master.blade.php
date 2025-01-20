<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/image/voter/7201157.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/voter/layout/master.css') }}">
    <title>@yield('title', 'Home')</title>
    <!-- evo-calendar CSS -->
</head>
<body>
    <!-- Section Home -->
    <section id="home" class="home">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            @include('voter.layout.navbar')
        </nav>
    </section>

    <section>
        <div class="hero1">
            @yield('content')
        </div>
    </section>

    <!-- Section Product -->
    <section class="service" id="service"></section>

    <!-- Footer -->
    <footer class="container-fluid-flex flex-column w-100 py-4 flex-shrink-0">
        @include('voter.layout.footer')
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/voter/layout/master.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.0.1/dist/evo-calendar.min.js"></script>
    @stack('scripts')
</body>
</html>
