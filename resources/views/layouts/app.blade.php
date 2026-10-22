<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBV & Domestic Violence Awareness Malaysia</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-banner {
            background: linear-gradient(135deg, #dc3545 0%, #850e18 100%);
            color: white;
            padding: 3.5rem 1.5rem;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(220, 53, 69, 0.25);
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 1rem;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15) !important;
        }
        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }
        .navbar-brand {
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>

    <!-- Navigation Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">
                <i class="bi bi-shield-heart-fill me-2"></i>GBV Awareness MY
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="bi bi-info-circle me-1"></i> What Is GBV</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('law-enforcement') }}"><i class="bi bi-bank me-1"></i> Law Enforcement</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('enforcer') }}"><i class="bi bi-person-badge me-1"></i> Enforcers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('hotline') }}"><i class="bi bi-telephone-outbound-fill me-1"></i> Hotlines</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-light text-danger px-3 ms-2 rounded-pill shadow-sm" href="{{ route('contact') }}"><i class="bi bi-envelope-fill me-1"></i> Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-1"><i class="bi bi-heart-fill text-danger me-1"></i> Support & Safety for Everyone in Malaysia</p>
            <small class="text-white-50">&copy; {{ date('Y') }} Domestic Violence & Gender-Based Violence Support | ITT588 Lab 2</small>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>