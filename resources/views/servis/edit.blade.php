@extends('navbar.nav')

@section('navbar')
    <div class="container mt-5 pt-5">
        <h2 class="text-center section-title">Tambah Data Servis</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('data-servis-infinix.update', $edit->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                                <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik"
                                    placeholder="Masukkan nama pelanggan" required value="{{ $edit->nama_pemilik }}">
                            </div>

                            <div class="mb-3">
                                <label for="merek_hp" class="form-label">Merek HP Infinix</label>
                                <input type="text" class="form-control" id="merek_hp" name="merek_hp"
                                    placeholder="Contoh: Infinix Hot 12" required value="{{ $edit->merek_hp }}">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Foto Kerusakan HP</label><br>
                                <img src="{{ asset('storage/' . $edit->image) }}" alt="{{ $edit->image }}"
                                    style="object-fit: contain; height: 50px; height:50px;">
                                <input type="file" name="image" class="form-control" accept="image/">
                                <small class="form-text text-muted">
                                    * Isi data image ketika mau edit data.
                                </small>
                            </div>

                            <div class="mb-3">
                                <label for="kerusakan" class="form-label">Deskripsi Kerusakan</label>
                                <textarea class="form-control" id="kerusakan" name="kerusakan" rows="3"
                                    placeholder="Contoh: Layar pecah, tidak bisa dinyalakan" required>{{ $edit->kerusakan }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Selesai Perbaikan</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{$edit->tanggal}}">
                            </div>

                            <div class="mb-3">
                                <label for="biaya_servis" class="form-label">Biaya Servis</label>
                                <input type="number" id="biaya_servis" name="biaya_servis" class="form-control"
                                    value="{{ $edit->biaya_servis }}">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-warning text-white">Ubah Data</button>
                                <a href="{{ route('data-servis-infinix.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
