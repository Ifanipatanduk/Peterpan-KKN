@extends('layouts/mainAdmin')
@section('title', 'Form Tambah Jenis KKN')
@section('artikel')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambahkan Jenis KKN</b></div>
 
                <div class="card-body">
                    <form action="{{route('DokumenController.simpanKKN')}}" method="POST" enctype="multipart/form-data">
                    @csrf
 
                        <div class="form-group mb-3">
                            <label>Nama Jenis KKN</label>
                            <input type="text" name="jenis" class="form-control" required>
                        </div>

                        <div class="form-grup mb-3">
                        <label for="semester" class="form-label" style="color:#1A5139">Semester</label>
                        <select class="form-select" id="semester" name="semester">
                            <option selected>Semester</option>
                            @foreach ($semesterList as $semester)
                                <option value="{{ $semester->Nama }}">{{ $semester->Nama }}</option>
                            @endforeach
                        </select>
                    </div>

                        <div class="form-group mb-3">
                            <label>Deskripsi KKN</label>
                            <input type="text" name="deskripsi" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Wilayah KKN</label>
                            <input type="text" name="wilayah" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Provinsi</label>
                            <input type="text" name="provinsi" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Kabupaten</label>
                            <input type="text" name="kabupaten" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label>Kelurahan/Desa</label>
                            <input type="text" name="kelurahan" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" class="form-control" required>
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