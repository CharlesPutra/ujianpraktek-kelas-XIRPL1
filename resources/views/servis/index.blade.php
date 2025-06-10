@extends('navbar.nav')


@section('navbar')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">
            <h1 class="display-5 fw-bold">Data Servis HP Infinix</h1>
            <p class="lead">Kelola dan pantau layanan servis pelanggan Anda di sini.</p>
        </div>
    </section>

    <!-- Tombol Tambah dan Tabel -->
    <section class="py-5">
        <div class="container">
            <!-- Tombol Tambah -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title">Daftar Servis</h2>
                <a href="{{ route('data-servis-infinix.create') }}" class="btn btn-primary">
                    + Tambah Servis
                </a>
            </div>

            <!-- Tabel Data Servis -->
            <div class="table-responsive" data-aos="fade-up">
                <table class="table table-striped table-hover shadow-sm">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Tipe HP</th>
                            <th>Foto Kerusakan HP</th>
                            <th>Kerusakan</th>
                            <th>Selesai Perbaikan</th>
                            <th>Biaya Servis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($datas as $index => $servis)
                            <tr class="text-center">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $servis->nama_pemilik }}</td>
                                <td>{{ $servis->merek_hp }}</td>
                                <td> <img src="{{ asset('storage/' . $servis->image) }}" class="card-img-top"
                                        alt="{{ $servis->image }}" style="object-fit: contain; height: 50px; height:50px;">
                                </td>
                                <td>{{ $servis->kerusakan }}</td>
                                <td>{{ $servis->tanggal }}</td>
                                <td>Rp {{ number_format($servis->biaya_servis, 0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('data-servis-infinix.edit', $servis->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('data-servis-infinix.destroy', $servis->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted">Belum ada data servis.</td>
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
