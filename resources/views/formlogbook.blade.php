<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Logbook</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambahkan Logbook Kegiatan</b></div>
 
                <div class="card-body">
                    <form method="" action="" enctype="multipart/form-data">
                        @csrf
 
                        <div class="form-group mb-3">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Waktu Mulai</label>
                            <input type="time" class="form-control" require>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label>Waktu Selesai</label>
                            <input type="time" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Keterangan</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="4" required></textarea>
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
</html>