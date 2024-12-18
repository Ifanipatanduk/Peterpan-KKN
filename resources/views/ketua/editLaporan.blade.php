@extends('layouts/mainKetua')
@section('title', 'Form Edit Laporan')
@section('artikel')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Laporan Kegiatan</b></div>

                <div class="card-body">
                <form action="{{ route('DokumenController.updateLaporan', $laporan->id_laporan) }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $laporan->id_laporan }}">


                    <div class="form-group mb-3">
                        <label>Judul Rencana</label>
                        <input type="text" name="judul" value="{{ $laporan->Judul }}" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" value="{{ $laporan->Deskripsi }}" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>File</label>
                        <input type="file" name="file" value="{{ $laporan->Nama_asli }}" class="form-control" required>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
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