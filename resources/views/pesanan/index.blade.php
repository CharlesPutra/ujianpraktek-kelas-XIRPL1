@extends('navbar.nav')


@section('navbar')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">
            <h1 class="display-5 fw-bold">Data Pesanan Servis HP Infinix</h1>
            <p class="lead">Kelola dan pantau Pesanan servis pelanggan Anda di sini.</p>
        </div>
    </section>

    <!-- Tombol Tambah dan Tabel -->
    <section class="py-5">
        <div class="container">
             <!-- Tombol Tambah -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title">Daftar Servis</h2>
            </div>

            <!-- Tabel Data Servis -->
            <div class="table-responsive" data-aos="fade-up">
                <table class="table table-striped table-hover shadow-sm">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Email</th>
                            <th>No Phone</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($datas as $index => $pesanan)
                            <tr class="text-center">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $pesanan->nama }}</td>
                                <td>{{ $pesanan->email }}</td>
                                <td>{{ $pesanan->phone }}</td>
                                <td>{{ $pesanan->alamat }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Belum ada data pesanan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="mt-4 ">
                {{ $datas->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
@endsection
