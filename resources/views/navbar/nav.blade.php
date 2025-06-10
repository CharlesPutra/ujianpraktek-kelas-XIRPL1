<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Servis HP Infinix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }

        .hero {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: white;
            padding: 100px 20px;
        }

        .btn-primary {

            border: none;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 30px;
        }

        .card img {
            max-height: 160px;
            object-fit: contain;
        }

        .navbar .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .navbar .nav-link:hover {
            color: #0072ff;
            /* Warna hover teks */
        }

        .navbar .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 0;
            background-color: #0072ff;
            /* Warna garis hover */
            transition: width 0.3s ease;
        }

        .navbar .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">InfinixServis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pesanan.index') }}">Pesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('data-servis-infinix.index') }}">Servis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('navbar')
    </main>


    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
