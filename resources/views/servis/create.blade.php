@extends('navbar.nav')

@section('navbar')
    <div class="container mt-5 pt-5">
        <h2 class="text-center section-title">Tambah Data Servis</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('data-servis-infinix.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                                <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik"
                                    placeholder="Masukkan nama pelanggan" required>
                            </div>

                            <div class="mb-3">
                                <label for="merek_hp" class="form-label">Merek HP Infinix</label>
                                <input type="text" class="form-control" id="merek_hp" name="merek_hp"
                                    placeholder="Contoh: Infinix Hot 12" required>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Foto Kerusakan HP</label>
                                <input type="file" name="image" id="image"
                                    class="form-control ">
                            </div>

                            <div class="mb-3">
                                <label for="kerusakan" class="form-label">Deskripsi Kerusakan</label>
                                <textarea class="form-control" id="kerusakan" name="kerusakan" rows="3"
                                    placeholder="Contoh: Layar pecah, tidak bisa dinyalakan" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Selesai Perbaikan</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="biaya_servis" class="form-label">Biaya Servis</label>
                                <input type="number" id="biaya_servis" name="biaya_servis" class="form-control">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                <a href="{{ route('data-servis-infinix.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
