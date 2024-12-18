@extends('layouts/mainAdmin')
@section('title/Form Edit Berita')
@section('artikel')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambahkan Berita Baru</b></div>
 
                <div class="card-body">
                    <form method="POST" action="/berita" enctype="multipart/form-data">
                        @csrf
 
                        <div class="form-group mb-3">
                            <label>Judul berita</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="4" required></textarea>
                        </div>
                        

                        <div class="form-group mb-3">
                            <label>Foto</label>
                            <input type="file" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Tanggal Posting</label>
                            <input type="date" class="form-control"required>
                        </div>

                        <!-- <div class="form-check">
                        <label>Kategori Berita</label><br/>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Default radio
                            </label>
                        </div> -->
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Default checked radio
                            </label>
                        </div> -->

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
