@extends('layouts/mainadmin')
@section('title', 'Form Edit Semester')
@section('artikel')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Semster</b></div>

                <div class="card-body">
                <form action="{{ route('DokumenController.updateSemester', $semester->id_semester) }}" method="POST">
                @csrf
                @method('POST')

                    <input type="hidden" name="id" value="{{ $semester->id_semester }}">


                    <div class="form-group mb-3">
                        <label>Nama Semester</label>
                        <input type="text" name="nama" value="{{ $semester->Nama }}" class="form-control" required>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success"></i>Simpan</button>
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