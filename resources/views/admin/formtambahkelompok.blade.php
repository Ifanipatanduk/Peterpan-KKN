@extends('layouts/mainAdmin')
@section('title', "Form Tambah Kelompok KKN")
@section('artikel')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <form action="{{ route('DokumenController.simpanDaftarKelompokKKN') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container mt-5">
            <h4 class="text-success mb-4">Perencanaan KKN</h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nama_kelompok" class="form-label">Nama Kelompok</label>
                    <input type="text" class="form-control" id="nama_kelompok" name="nama_kelompok" placeholder="Masukkan nama kelompok" value="{{ old('nama_kelompok') }}" required>
                </div>

                <div class="col-md-6">
                    <label for="nama_dosen" class="form-label">Dosen Pembimbing Lapangan</label>
                    <select class="form-select" id="nama_dosen" name="nama_dosen" required>
                        <option selected disabled>Pilih Dosen Pembimbing</option>
                        @foreach ($dosenList as $dosen)
                            <option value="{{ $dosen->Nama }}">{{ $dosen->Nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="jenis" class="form-label">Jenis KKN</label>
                    <select class="form-select" id="jenis" name="jenis" required>
                        <option value="" selected disabled>Pilih Jenis KKN</option>
                        @foreach ($jenisKKNList as $jenisKKN)
                            <option value="{{ $jenisKKN->Jenis }}" {{ old('jenis') == $jenisKKN->Jenis ? 'selected' : '' }}>{{ $jenisKKN->Jenis }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="nama_mahasiswa" class="form-label">Ketua Kelompok</label>
                    <select class="form-select" id="nama_mahasiswa" name="nama_mahasiswa" required>
                        <option value="" selected disabled>Pilih Ketua Kelompok</option>
                        @foreach ($mahasiswaList as $mahasiswa)
                            <option value="{{ $mahasiswa->Nama }}" {{ old('nama_mahasiswa') == $mahasiswa->Nama ? 'selected' : '' }}>{{ $mahasiswa->Nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <h4 class="text-success mt-5 mb-4">Wilayah KKN</h4>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="wilayah" class="form-label">Wilayah KKN</label>
                    <select class="form-select" id="wilayah" name="wilayah" required>
                        <option value="" selected disabled>Pilih Wilayah</option>
                        @foreach ($jenisKKNList as $jenisKKN)
                            <option value="{{ $jenisKKN->Wilayah }}" {{ old('wilayah') == $jenisKKN->Wilayah ? 'selected' : '' }}>{{ $jenisKKN->Wilayah }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select class="form-select" id="provinsi" name="provinsi" required>
                        <option value="" selected disabled>Pilih Provinsi</option>
                        @foreach ($jenisKKNList as $jenisKKN)
                            <option value="{{ $jenisKKN->Provinsi }}" {{ old('provinsi') == $jenisKKN->Provinsi ? 'selected' : '' }}>{{ $jenisKKN->Provinsi }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="kabupaten" class="form-label">Kabupaten</label>
                    <select class="form-select" id="kabupaten" name="kabupaten" required>
                        <option value="" selected disabled>Pilih Kabupaten</option>
                        @foreach ($jenisKKNList as $jenisKKN)
                            <option value="{{ $jenisKKN->Kabupaten }}" {{ old('kabupaten') == $jenisKKN->Kabupaten ? 'selected' : '' }}>{{ $jenisKKN->Kabupaten }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select class="form-select" id="kecamatan" name="kecamatan" required>
                        <option value="" selected disabled>Pilih Kecamatan</option>
                        @foreach ($jenisKKNList as $jenisKKN)
                            <option value="{{ $jenisKKN->Kecamatan }}" {{ old('kecamatan') == $jenisKKN->Kecamatan ? 'selected' : '' }}>{{ $jenisKKN->Kecamatan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="kelurahan" class="form-label">Kelurahan/Desa</label>
                    <select class="form-select" id="kelurahan" name="kelurahan" required>
                        <option value="" selected disabled>Pilih Kelurahan/Desa</option>
                        @foreach ($jenisKKNList as $jenisKKN)
                            <option value="{{ $jenisKKN->Kelurahan }}" {{ old('kelurahan') == $jenisKKN->Kelurahan ? 'selected' : '' }}>{{ $jenisKKN->Kelurahan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mt-4 d-flex justify-content-end gap-3">
                <a href="{{ route('DokumenController.simpanAnggotaKelompok') }}" class="btn btn-danger">Keluar</a>
                <button type="submit" class="btn btn-success">Simpan</button> 
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
@endsection
