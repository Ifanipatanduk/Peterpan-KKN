<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Menyertakan Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Menyertakan DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

    <!-- Menyertakan Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: "Geologica", serif;
            font-size: 15px;
            font-weight: 700;
            font-style: normal;
            background-color: #f9f9f9;
            color: #1A5319;
            min-height: 100vh;
        }

        .navbar {
            background-color: white;
            padding: 15px;
        }

        .navbar-brand,
        .nav-link {
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
            margin-top: 50px;
        }

        .icon-container img {
            width: 120px;
            margin-bottom: 20px;
        }

        .icon-container p {
            font-weight: bold;
            color: #1A5319;
            margin-top: 10px;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .icon-container>div {
            text-align: center;
            flex: 0 1 200px;
            max-width: 200px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboarddosen">
                <img src="{{ asset('asset/lppm-ukdw.png') }}" alt="Logo" width="50" class="d-inline-block align-text-top">
                Kuliah Kerja Nyata
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboarddosen">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akun
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('DokumenController.ubahPassword')}}">Ubah Password</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('artikel')
    </div>

    <!-- Menyertakan JavaScript Bootstrap 5 Bundle (termasuk Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>

</body>

</html>
