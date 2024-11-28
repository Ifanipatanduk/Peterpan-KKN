<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perencanaan KKN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form>
            <h4 class="text-success mb-4">Perencanaan KKN</h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="namaKelompok" class="form-label">Nama Kelompok</label>
                    <input type="text" class="form-control" id="namaKelompok" placeholder="Masukkan nama kelompok">
                </div>
                <div class="col-md-6">
                    <label for="dosenPembimbing" class="form-label">Dosen Pembimbing Lapangan</label>
                    <select class="form-select" id="dosenPembimbing">
                        <option selected>Pilih dosen pembimbing</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="jenisKKN" class="form-label">Jenis KKN</label>
                    <select class="form-select" id="jenisKKN">
                        <option selected>Pilih jenis KKN</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </div>
            </div>

            <h4 class="text-success mt-5 mb-4">Wilayah KKN</h4>
            <div class="row g-3">
                <div class="col-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="2" placeholder="Tambahkan alamat KKN"></textarea>
                </div>
                <div class="col-md-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select class="form-select" id="provinsi">
                        <option selected>Pilih provinsi</option>
                        <option value="1">Provinsi 1</option>
                        <option value="2">Provinsi 2</option>
                        <option value="3">Provinsi 3</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="kabupaten" class="form-label">Kabupaten</label>
                    <select class="form-select" id="kabupaten">
                        <option selected>Pilih kabupaten</option>
                        <option value="1">Kabupaten 1</option>
                        <option value="2">Kabupaten 2</option>
                        <option value="3">Kabupaten 3</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select class="form-select" id="kecamatan">
                        <option selected>Pilih kecamatan</option>
                        <option value="1">Kecamatan 1</option>
                        <option value="2">Kecamatan 2</option>
                        <option value="3">Kecamatan 3</option>
                    </select>
                </div>
                
                <div class="col-md-3">
                    <label for="kelurahan" class="form-label">Kelurahan/Desa</label>
                    <select class="form-select" id="kelurahan">
                        <option selected>Pilih kelurahan/desa</option>
                        <option value="1">Kelurahan 1</option>
                        <option value="2">Kelurahan 2</option>
                        <option value="3">Kelurahan 3</option>
                    </select>
                </div>
            </div>

            <div class="mt-4 d-flex justify-content-end gap-3">
                <button type="button" class="btn btn-danger">Keluar</button>
                <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
