<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambahkan Data Mahasiswa</b></div>

                <div class="card-body">
                <form action="{{ route('DokumenController.simpanmahasiswa')}}" method="POST" enctype="multipart/form-data">
                @csrf
                        <div class="form-group mb-3">
                            <label>Nim</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Kontak</label>
                            <input type="text" name="kontak" class="form-control" required>
                        </div>

                        <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check me-4">
                                <input type="radio" name="jenis_kelamin" id="Laki-laki" value="laki-laki" class="form-check-input" required>
                                <label for="Laki-Laki" class="form-check-label">Laki-Laki</label>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="form-check">
                                <input type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan" class="form-check-input">
                                <label for="Perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select name="prodi" id="prodi" class="form-control" required>
                                <option value=""> Pilih Prodi</option>
                                <option value="Prodi Filsafat Keilahian">Filsafat Keilahian</option>
                                <option value="Prodi Arsitektur">Arsitektur</option>
                                <option value="Prodi Desain Produk">Desain Produk</option>
                                <option value="Prodi Biologi">Biologi</option>
                                <option value="Prodi Manajemen">Manajemen</option>
                                <option value="Prodi Akuntansi">Akuntansi</option>
                                <option value="Prodi Informatika">Informatika</option>
                                <option value="Prodi Sistem Informasi">Sistem Informaasi</option>
                                <option value="Prodi Kedokteran">Kedokteran</option>
                                <option value="Prodi Sistem Informasi">Profesi Kedokteran</option>
                                <option value="Prodi Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                <option value="Prodi Humaniora">Studi Humanitas</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <select name="fakultas" id="fakultas" class="form-control" required>
                                <option value=""> Pilih Fakutas</option>
                                <option value="Fakultas Teologi">Fakultas Teologi</option>
                                <option value="Fakultas Arsitektur dan Desain">Fakultas Arsitektur dan Desain</option>
                                <option value="Fakultas Bioteknologi">Fakultas Bioteknologi</option>
                                <option value="Fakultas Bisnis">Fakultas Bisnis</option>
                                <option value="Fakultas Teknologi Informaasi">Fakultas Teknologi Informasi</option>
                                <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                                <option value="Fakultas Kependidikan dan Humaniora">Fakultas Kependidikan dan Humaniora </option>
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