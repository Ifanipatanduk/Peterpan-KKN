@extends('layouts/mainAdmin')
@section('title/Form Tambah Semester')
@section('artikel')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambahkan Semester</b></div>

                <div class="card-body">
                <form action="{{ route('DokumenController.simpanSemester')}}" method="POST" enctype="multipart/form-data">
                @csrf
                        <div class="form-group mb-3">
                            <label>Nama Semester</label>
                            <input type="text" name="nama" class="form-control" required>
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