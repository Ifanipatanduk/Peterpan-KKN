@extends('layouts/mainKetua')
@section('title', 'Form Tambah Logbook')
@section('artikel')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambahkan Logbook Kegiatan</b></div>
 
                <div class="card-body">
                    <form action="{{ route('DokumenController.simpanLogbook') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                        <label>Tanggal Kegiatan</label>
                        <input type="date" name="tanggal" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Waktu Mulai</label>
                            <input type="time" name="waktu_mulai" class="form-control" require>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label>Waktu Selesai</label>
                            <input type="time" name="waktu_selesai" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" required>
                        </div>
                        <div class="form-group"><br/>
                            <button type="submit" class="btn" style="background-color: #1A5139; color: white;">Simpan</button>
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