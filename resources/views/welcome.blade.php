@extends('layouts.home')

@section('content')
    <!-- Hero Section -->
    <div class="container py-5" id="home">
        <div class="row align-items-center mb-5" style="min-height: 70vh;">
            <div class="col-md-6 mb-4 mb-md-0 fade-in-up">
                <h1 class="display-3 fw-bold text-dark mb-4">
                    Care Your Car <br>
                    <span class="text-primary">With Excellence.</span>
                </h1>
                <p class="lead text-muted mb-5">
                    Experience the most reliable car service booking platform.
                    Simple, fast, and transparent pricing tailored just for you.
                </p>
                <div class="d-flex gap-3">
                    <a href="#
                    {{-- {{ route('services.index') }} --}}
                    " class="btn btn-primary btn-lg px-5 shadow-lg">Browse
                        Services</a>
                    @guest
                        <a href="
                        {{-- {{ route('login') }} --}}#
                        " class="btn btn-outline-primary btn-lg px-5">Login</a>
                    @endguest
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="position-relative">
                    <i class="fas fa-car fa-10x text-primary opacity-25" style="transform: scale(1.5);"></i>
                    <i class="fas fa-tools fa-4x text-primary position-absolute top-0 end-0 floating-icon"></i>
                    <i class="fas fa-cog fa-4x text-info position-absolute bottom-0 start-0 floating-icon-delayed"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="bg-white py-5" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="glass-card p-5 border-0 shadow-sm text-center">
                        <i class="fas fa-users fa-5x text-primary mb-4 opacity-75"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class="text-primary fw-bold text-uppercase ls-1">About Us</h5>
                    <h2 class="display-5 fw-bold mb-4">Dedicated to Quality Car Care</h2>
                    <p class="text-muted lead mb-4">
                        Founded in 2024, Car Service Premium is driven by a passion for automotive excellence. We connect
                        car owners with top-tier certified mechanics to ensure your vehicle runs smoothly and safely.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Certified Mechanics</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Preview Section -->
    <div class="container py-5" id="services-preview">
        <div class="text-center mb-5">
            <h5 class="text-primary fw-bold text-uppercase ls-1">Our Services</h5>
            <h2 class="fw-bold">Professional Car Care</h2>
            <p class="text-muted">Select your vehicle to see exact pricing and available packages.</p>
        </div>

        <!-- Disabled Preview Cards -->
        <div class="row g-4 mb-5 opacity-50 pe-none">
            <div class="col-md-4">
                <div class="card h-100 p-4 text-center border-0 shadow-sm bg-light">
                    <div class="icon-box mb-4 mx-auto bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-wrench fa-2x text-secondary"></i>
                    </div>
                    <h4 class="fw-bold mb-3">General Service</h4>
                    <p class="text-muted mb-3">Comprehensive checkup and maintenance.</p>
                    <h3 class="text-secondary fw-bold">$---</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 p-4 text-center border-0 shadow-sm bg-light">
                    <div class="icon-box mb-4 mx-auto bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-star fa-2x text-secondary"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Custom Detailing</h4>
                    <p class="text-muted mb-3">Premium interior and exterior detailing.</p>
                    <h3 class="text-secondary fw-bold">$---</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 p-4 text-center border-0 shadow-sm bg-light">
                    <div class="icon-box mb-4 mx-auto bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-oil-can fa-2x text-secondary"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Oil Change</h4>
                    <p class="text-muted mb-3">High quality synthetic oil replacement.</p>
                    <h3 class="text-secondary fw-bold">$---</h3>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="
            {{-- {{ route('services.index') }} --}}#
            " class="btn btn-primary btn-lg rounded-pill px-5 shadow-lg">
                Go To Services <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

    <style>
        .ls-1 {
            letter-spacing: 2px;
        }

        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }

        .floating-icon-delayed {
            animation: float 4s ease-in-out infinite reverse;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }
    </style>

@endsection