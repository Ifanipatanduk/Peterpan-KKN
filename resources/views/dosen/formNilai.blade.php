@extends('layouts/mainDosen')
@section('title', 'Form Nilai KKN')
@section('artikel')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambahkan Nilai KKN Mahasiswa</b></div>
 
                <div class="card-body">
                <form action="{{ route('DokumenController.simpanNilai') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label>NIM Mahasiswa</label>
                    <input type="text" name="nim" class="form-control" value="{{ $anggota->nim }}" readonly required>
                </div>
                <div class="form-group mb-3">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" value="{{ $anggota->mahasiswa->Nama }}" readonly required>
                </div>


                <div class="form-group mb-3">
                    <label>Inputkan Nilai</label>
                    <input type="text" name="nilai" class="form-control" value="{{ $anggota->Nilai }}" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn" style="background-color: #1A5139; color: white;">Simpan</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
@endsection 