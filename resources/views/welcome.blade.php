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
            background-color: #ffcb05;
            border: none;
            color: #000;
        }

        .btn-primary:hover {
            background-color: #e0b804;
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

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <h1 class="display-5 fw-bold">Solusi Terbaik untuk Servis HP Infinix Anda</h1>
                    <p class="lead mt-3">Cepat, terpercaya, dan bergaransi. Layanan profesional untuk semua tipe
                        Infinix.</p>
                    <a href="{{ route('data-servis-infinix.index') }}" class="btn btn-primary btn-lg mt-4">Service
                        HP</a>
                </div>
                <div class="col-md-6 text-center" data-aos="zoom-in">
                    <img src="https://fdn2.gsmarena.com/vv/pics/infinix/infinix-note12-1.jpg" alt="HP Infinix"
                        class="img-fluid rounded" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="tentang" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="section-title text-center">Layanan Kami</h2>
            <p class="text-center mb-4">
                InfinixServis adalah tempat layanan servis HP Infinix terpercaya dan profesional. Kami menyediakan
                layanan cepat, akurat, dan bergaransi.
            </p>

            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm p-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828911.png"
                            class="img-fluid mb-3 mx-auto d-block" width="80" alt="Fast Service">
                        <h5>Layanan Cepat</h5>
                        <p>Perbaikan cepat dengan estimasi waktu servis yang jelas.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm p-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png"
                            class="img-fluid mb-3 mx-auto d-block" width="80" alt="Professional Technicians">
                        <h5>Teknisi Handal</h5>
                        <p>Dikerjakan oleh teknisi berpengalaman khusus untuk perangkat Infinix.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm p-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/929/929422.png"
                            class="img-fluid mb-3 mx-auto d-block" width="80" alt="Warranty">
                        <h5>Bergaransi</h5>
                        <p>Semua servis kami dilengkapi dengan garansi hingga 30 hari.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="py-5 bg-light" id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('img/tentang kami.jpg') }}" class="img-fluid rounded"
                        alt="Tentang Kami - HP Infinix" />
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="section-title">Tentang Kami</h2>
                    <p>Kami adalah pusat servis resmi HP Infinix dengan teknisi berpengalaman. Mengutamakan kualitas,
                        kecepatan, dan kepuasan pelanggan. Sudah dipercaya lebih dari 5 tahun oleh ribuan pengguna
                        Infinix di Indonesia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section class="py-5" id="kontak">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-down">Hubungi Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-6" data-aos="fade-up">
                    <form action="{{ route('pesanan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="email@contoh.com">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone"
                                placeholder="0852424453">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="4" placeholder="Tulis alamat Anda..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
                <div class="col-md-4 mt-5 mt-md-0 text-center" data-aos="zoom-in">
                    <img src="https://cdn-icons-png.flaticon.com/512/2920/2920058.png" alt="Customer Service"
                        class="img-fluid" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">&copy; 2025 InfinixServis. All rights reserved.</p>
        </div>
    </footer>

    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
