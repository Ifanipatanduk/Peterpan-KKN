<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #1A5319;
        }
        .navbar {
            background-color: white;
            padding: 15px;
        }
        .navbar-brand, .nav-link {
            color: #1A5319;
            font-weight: bold;
        }
        .navbar-brand img {
            width: 50px;
            margin-right: 10px;
        }
        .dashboard-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
            color: #1A5319;
        }
        .icon-container {
            text-align: center;
            margin-top: 30px;
        }
        .icon-container img {
            width: 100px;
        }
        .icon-container p {
            font-weight: bold;
            color: #1A5319;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="https://via.placeholder.com/50" alt="LPPM Logo">
            Kuliah Kerja Nyata
        </a>
        <div class="ml-auto">
            <a class="nav-link" href="#">Beranda</a>
            <a class="nav-link" href="#">Akun</a>
        </div>
    </nav>

    <div class="container">
        <a href="/dokumenAnggota">
        <h1 class="dashboard-title">DASHBOARD MAHASISWA</h1>
        </a>
    </div>

    <div class="container icon-container">
        <img src="https://via.placeholder.com/100/28a745/FFFFFF?text=Graph" alt="Dokumen Kegiatan Icon">
        <p>DOKUMEN KEGIATAN</p>
    </div>

</body>
</html>
