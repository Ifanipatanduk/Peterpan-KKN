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
                    <form action="{{route('DokumenController.updateJenisKKN')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" name="id" value="{{ $dokumen->id_jenis }}">
 
                        <div class="form-group mb-3">
                            <label>Nama Jenis KKN</label>
                            <input type="text" name="jenis" value="{{ $dokumen-> Jenis}}" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Semester</label>
                            <input type="text" name="semester" value="{{ $dokumen-> Semester}}" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Deskripsi KKN</label>
                            <input type="text" name="deskripsi" value="{{ $dokumen-> Deskripsi}}" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Wilayah KKN</label>
                            <input type="text" name="wilayah" value="{{ $dokumen-> Wilayah}}" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Provinsi</label>
                            <input type="text" name="provinsi" value=" $dokumen-> Provinsi" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Kabupaten</label>
                            <input type="text" name="kabupaten" value="$dokumen-> Kabupaten" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>kecamatan</label>
                            <input type="text" name="kecamatan" value="{{$dokumen-> Kecamatan}}" class="form-control" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label>Kelurahan/Desa</label>
                            <input type="text" name="kelurahan" value="{{ $dokumen-> Kelurahan}}" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" value="{{ $dokumen->Tanggal_mulai}}" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" value="{{ $dokumen->Tanggal_selesai}}" class="form-control" required>
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