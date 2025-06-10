@extends('navbar.nav')

@section('navbar')
    <!-- Hero Section -->
<section class="hero text-center" data-aos="fade-up">
  <div class="container">
    <h1 class="display-4 fw-bold">Selamat Datang di InfinixServis</h1>
    <p class="lead">Layanan terpercaya untuk servis HP Infinix Anda</p>
    <a href="{{ route('data-servis-infinix.index') }}" class="btn btn-primary mt-3">Lihat Daftar Servis</a>
  </div>
</section>

<!-- Tentang Section -->
<section id="tentang" class="py-5">
  <div class="container" data-aos="fade-up">
    <h2 class="section-title text-center">Tentang Kami</h2>
    <p class="text-center mb-4">
      InfinixServis adalah tempat layanan servis HP Infinix terpercaya dan profesional. Kami menyediakan layanan cepat, akurat, dan bergaransi.
    </p>

    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm p-3">
          <img src="https://cdn-icons-png.flaticon.com/512/1828/1828911.png" class="img-fluid mb-3" width="80" alt="Fast Service">
          <h5>Layanan Cepat</h5>
          <p>Perbaikan cepat dengan estimasi waktu servis yang jelas.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm p-3">
          <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" class="img-fluid mb-3" width="80" alt="Professional Technicians">
          <h5>Teknisi Handal</h5>
          <p>Dikerjakan oleh teknisi berpengalaman khusus untuk perangkat Infinix.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm p-3">
          <img src="https://cdn-icons-png.flaticon.com/512/929/929422.png" class="img-fluid mb-3" width="80" alt="Warranty">
          <h5>Bergaransi</h5>
          <p>Semua servis kami dilengkapi dengan garansi hingga 30 hari.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection