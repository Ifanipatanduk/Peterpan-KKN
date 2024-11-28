<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Jenis KKN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambahkan Jenis KKN</b></div>
 
                <div class="card-body">
                    <form action="/jenisKKN" method="" enctype="multipart/form-data">
                        @csrf
 
                        <div class="form-group mb-3">
                            <label>Nama Jenis KKN</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Deskripsi KKN</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="4" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Wilayah KKN</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="4" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Kabupaten</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>kecamatan</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label>Kelurahan/Desa</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Tanggal Mulai</label>
                            <input type="date" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Tanggal Selesai</label>
                            <input type="date" class="form-control" required>
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
</html>