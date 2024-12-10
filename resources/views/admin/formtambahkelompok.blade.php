@extends('layouts/mainAdmin')
@section('title', "Jenis KKN")
@section('artikel')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="{{ route('DokumenController.simpanDataKelompok') }}" method="POST">
    @csrf

    <div class="container mt-5">
        <form>
            <h4 class="text-success mb-4">Perencanaan KKN</h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nama_kelompok" class="form-label">Nama Kelompok</label>
                    <input type="text" class="form-control" id="nama_kelompok" name="nama_kelompok" placeholder="Masukkan nama kelompok">
                </div>

                <div class="col-md-6">
                    <label for="nama_dosen" class="form-label">Dosen Pembimbing Lapangan</label>
                    <select class="form-select" id="nama_dosen" name="nama_dosen">
                        <option selected>Pilih dosen pembimbing</option>
                            @foreach ($dosenList as $dosen)
                                <option value="{{ $dosen->id }}">{{ $dosen->Nama }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="jenis" class="form-label">Jenis KKN</label>
                    <select class="form-select" id="jenis" name="jenis">
                        <option selected>Pilih jenis KKN</option>
                            @foreach ($jenisKKNList as $jenisKKN)
                                <option value="{{ $jenisKKN->id }}">{{ $jenisKKN->Jenis }}</option>
                            @endforeach
                    </select>
                </div>
                </div>

            <h4 class="text-success mt-5 mb-4">Wilayah KKN</h4>
                <div class="row g-3">
                <div class="col-md-3">
                    <label for="wilayah" class="form-label">Wilayah KKN</label>
                    <select class="form-select" id="wilayah" name="wilayah">
                        <option selected>Pilih Wilayah</option>
                            @foreach ($jenisKKNList as $jenisKKN)
                            <option value="{{ $jenisKKN->Wilayah }}">{{ $jenisKKN->Wilayah }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select class="form-select" id="provinsi" name="provinsi">
                        <option selected>Pilih provinsi</option>
                            @foreach ($jenisKKNList as $jenisKKN)
                                <option value="{{ $jenisKKN->id }}">{{ $jenisKKN->Provinsi }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="kabupaten" class="form-label">Kabupaten</label>
                    <select class="form-select" id="kabupaten" name="kabupaten">
                        <option selected>Pilih kabupaten</option>
                            @foreach ($jenisKKNList as $jenisKKN)
                                <option value="{{ $jenisKKN->id }}">{{ $jenisKKN->Kabupaten }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select class="form-select" id="kecamatan" name="kecamatan">
                        <option selected>Pilih kecamatan</option>
                            @foreach ($jenisKKNList as $jenisKKN)
                                <option value="{{ $jenisKKN->id }}">{{ $jenisKKN->Kecamatan }}</option>
                            @endforeach
                    </select>
                </div>
                
                <div class="col-md-3">
                    <label for="kelurahan" class="form-label">Kelurahan/Desa</label>
                    <select class="form-select" id="kelurahan" name="kelurahan">
                        <option selected>Pilih kelurahan/desa</option>
                            @foreach ($jenisKKNList as $jenisKKN)
                                <option value="{{ $jenisKKN->id }}">{{ $jenisKKN->Kelurahan }}</option>
                            @endforeach
                    </select>
                </div>

            </div>

            <div class="mt-4 d-flex justify-content-end gap-3">
                <a href="{{ route('DokumenController.dashboardAdmin') }}" class="btn btn-danger">Keluar</a>
                <button type="submit" class="btn btn-success">Simpan</button> 
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection

