<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeHaven Malaysia - GBV Support & Resources</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body { display: flex; flex-direction: column; min-height: 100vh; }
        main { flex: 1; }
        .hero-section { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=1200&q=80'); background-size: cover; background-position: center; color: white; padding: 80px 0; }
        .hotline-card { border-left: 5px solid #dc3545; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="{{ route('home') }}">
                <i class="fa-solid fa-shield-heart me-2"></i>SafeHaven MY
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('what.is') ? 'active' : '' }}" href="{{ route('what.is') }}">What Is GBV</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('law.enforcement') ? 'active' : '' }}" href="{{ route('law.enforcement') }}">Law Enforcement</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('enforcer') ? 'active' : '' }}" href="{{ route('enforcer') }}">Enforcers & NGOs</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('hotline') ? 'active' : '' }}" href="{{ route('hotline') }}">Hotlines</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-1">If you are in immediate danger, please call emergency services at **999**.</p>
            <p class="text-muted small mb-0">&copy; {{ date('Y') }} SafeHaven Malaysia (ITT588 Lab Work 2). All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>