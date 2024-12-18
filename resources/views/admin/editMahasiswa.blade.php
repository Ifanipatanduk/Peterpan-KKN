@extends('layouts/mainAdmin')
@section('title/ Form Edit Data Mahasiswa')
@section('artikel')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Data Mahasiswa</b></div>

                <div class="card-body">
                <form action="{{ route('DokumenController.updateMahasiswa', $dokumen->nim) }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $dokumen->nim }}">

                    <div class="form-group mb-3">
                        <label>Nim</label>
                        <input type="text" name="nim" value="{{ $dokumen->nim }}" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Nama Mahasiswa</label>
                        <input type="text" name="nama" value="{{ $dokumen->Nama }}" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="text" name="email" value="{{ $dokumen->Email }}" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Kontak</label>
                        <input type="text" name="kontak" value="{{ $dokumen->Kontak }}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="d-flex">
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" 
                                class="form-check-input" {{ $dokumen->Jenis_kelamin === 'Laki-Laki' ? 'checked' : '' }} required>
                            <label class="form-check-label me-3">Laki-Laki</label>

                            <input type="radio" name="jenis_kelamin" value="Perempuan" 
                                class="form-check-input" {{ $dokumen->Jenis_kelamin === 'Perempuan' ? 'checked' : '' }}>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select name="prodi" id="prodi" class="form-control" required>
                                <option value=""> Pilih Prodi</option>
                                <option value="Prodi Filsafat Keilahian" {{$dokumen->prodi === 'Prodi Filsafat Keilahian' ? 'selected' : ''}}>Pordi Filsafat Keilahian</option>
                                <option value="Prodi Arsitektur"{{ $dokumen->prodi === 'Prodi Arsitektur' ? 'selected' : ''}}>Arsitektur</option>
                                <option value="Prodi Desain Produk" {{$dokumen->prodi === 'Prodi Desain Produk' ? 'selected' : ''}}>Desain Produk</option>
                                <option value="Prodi Biologi" {{$dokumen->prodi === 'Prodi Biologi' ? 'selected' : ''}}> Biologi</option>
                                <option value="Prodi Manajemen" {{$dokumen->prodi === 'Prodi Manajemen' ? 'selected' : ''}}>Manajemen</option>
                                <option value="Prodi Akuntansi"{{$dokumen->prodi === 'Prodi Akuntansi' ? 'selected' : ''}}>Akuntansi</option>
                                <option value="Prodi Informatika" {{$dokumen->prodi === 'Prodi Informatika' ? 'selected' : ''}}>Informatika</option>
                                <option value="Prodi Sistem Informasi" {{$dokumen->prodi === 'Prodi Sistem Informaasi' ? 'selected' : ''}}>Sistem Informasi</option>
                                <option value="Prodi Kedokteran" {{$dokumen->prodi === 'Prodi Kedokteran' ? 'selected' : ''}}>Kedokteran</option>
                                <option value="Prodi Pendidikan Bahasa Inggris" {{$dokumen->prodi === 'Prodi Pendidika Bahasa Inggris' ? 'selected' : ''}}>Pendidikan Bahasa Inggris</option>
                                <option value="Prodi Humaniora" {{$dokumen->prodi === 'Prodi Humaniora' ? 'selected' : ''}}>Studi Humanitas</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="fakultas">Fakultas</label>
                        <select name="fakultas" id="fakultas" class="form-control" required>
                            <option value="">Pilih Fakultas</option>
                            <option value="Fakultas Teologi" {{ $dokumen->Fakultas === 'Fakultas Teologi' ? 'selected' : '' }}>Fakultas Teologi</option>
                            <option value="Fakultas Arsitektur dan Desain" {{ $dokumen->Fakultas === 'Fakultas Arsitektur dan Desain' ? 'selected' : '' }}>Fakultas Arsitektur dan Desain</option>
                            <option value="Fakultas Bioteknologi" {{ $dokumen->Fakultas === 'Fakultas Bioteknologi' ? 'selected' : '' }}>Fakultas Bioteknologi</option>
                            <option value="Fakultas Bisnis" {{ $dokumen->Fakultas === 'Fakultas Bisnis' ? 'selected' : '' }}>Fakultas Bisnis</option>
                            <option value="Fakultas Teknologi Informasi" {{ $dokumen->Fakultas === 'Fakultas Teknologi Informasi' ? 'selected' : '' }}>Fakultas Teknologi Informasi</option>
                            <option value="Fakultas Kedokteran" {{ $dokumen->Fakultas === 'Fakultas Kedokteran' ? 'selected' : '' }}>Fakultas Kedokteran</option>
                            <option value="Fakultas Kependidikan dan Humaniora" {{ $dokumen->Fakultas === 'Fakultas Kependidikan dan Humaniora' ? 'selected' : '' }}>Fakultas Kependidikan dan Humaniora</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success"><i class="bi bi-pencil"></i>Simpan</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
@endsection