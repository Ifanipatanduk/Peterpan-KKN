<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambahkan Data Dosen</b></div>

                <div class="card-body">
                    <form action="/datadosen" methode="" enctype="multipart/form-data">
                        @csrf
 
                        <div class="form-group mb-3">
                            <label>Nama Dosen</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check me-4">
                                <input type="radio" name="ice" id="Laki-laki" value="laki-laki" class="form-check-input" required>
                                <label for="Laki-Laki" class="form-check-label">Laki-Laki</label>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="form-check">
                                <input type="radio" name="ice" id="Perempuan" value="Perempuan" class="form-check-input">
                                <label for="Perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Nomor HP</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <select name="fakultas" id="fakultas" class="form-control" required>
                                <option value=""> Pilih Fakutas</option>
                                <option value="GASAL">Fakultas Teologi</option>
                                <option value="GENAP">Fakultas Arsitektur dan Desain</option>
                                <option value="GENAP">Fakultas Bioteknologi</option>
                                <option value="GENAP">Fakultas Bisnis</option>
                                <option value="GENAP">Fakultas Teknologi Informasi</option>
                                <option value="GENAP">Fakultas Kedokteran</option>
                                <option value="GENAP">Fakultas Kependidikan dan Humaniora </option>
                            </select>
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