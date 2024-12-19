@extends('layouts/mainKetua')
@section('title', 'Form Edit Logbook')
@section('artikel')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Logbook Kegiatan</b></div>
 
                <div class="card-body">
                <form action="{{ route('DokumenController.updateLogbook', $logbook->id_logbook) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label>Tanggal Kegiatan</label>
                        <input type="date" name="tanggal" class="form-control" value="{{ $logbook->Tanggal_kegiatan }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Waktu Mulai</label>
                        <input type="time" name="waktu_mulai" class="form-control" value="{{ $logbook->Waktu_mulai }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Waktu Selesai</label>
                        <input type="time" name="waktu_selesai" class="form-control" value="{{ $logbook->Waktu_selesai }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ $logbook->Deskripsi }}" required>
                    </div>


                    <div class="form-group">
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