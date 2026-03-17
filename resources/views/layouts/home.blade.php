<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Car Service') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/glass.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-md frontend-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-car-side me-2"></i> CAR SERVICE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link text-dark" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#
                        {{-- {{ route('services.index') }} --}}
                        ">Services</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#contact">Contact</a></li>

                    <li class="nav-item border-start ps-3 ms-3"></li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white px-4 rounded-pill"
                                href="#
                                {{-- {{ route('dashboard') }} --}}
                                ">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="
                            {{-- {{ route('login') }} --}}
                            ">Login</a>
                        </li>
                        <li class="nav-item ms-md-2">
                            <a class="btn btn-primary btn-sm px-4 rounded-pill" href="
                            {{-- {{ route('register') }} --}}
                            ">Sign Up</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow-1">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="frontend-footer">
        <div class="container">
            <div class="mb-3">
                <i class="fas fa-car-side fa-2x text-primary mb-2"></i>
                <h5 class="fw-bold text-dark">Car Service Premium</h5>
            </div>
            <p class="small mb-0">&copy; {{ date('Y') }} All Rights Reserved. Simple. Elegant. Reliable.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>

</html>