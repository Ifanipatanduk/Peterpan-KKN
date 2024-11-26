@extends('layouts/mainDosen')
@section('title', "Dokumen Kegiatan")
@section('artikel')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Collapsible</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="flex-column bg-light p-3" style="width: 250px; height: 100vh;">
            <h5 class="mb-3">Dokumen Kegiatan</h5>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#rencana-collapse" aria-expanded="false">
                        Rencana Kelompok
                    </button>
                    <div class="collapse" id="rencana-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="nav-link">Kelompok 1</a></li>
                            <li><a href="#" class="nav-link">Kelompok 2</a></li>
                            <li><a href="#" class="nav-link">Kelompok 3</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#logbook-collapse" aria-expanded="false">
                        Logbook Kelompok
                    </button>
                    <div class="collapse" id="logbook-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="nav-link">Kelompok 1</a></li>
                            <li><a href="#" class="nav-link">Kelompok 2</a></li>
                            <li><a href="#" class="nav-link">Kelompok 3</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#laporan-collapse" aria-expanded="false">
                        Laporan Kelompok
                    </button>
                    <div class="collapse" id="laporan-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="nav-link">Kelompok 1</a></li>
                            <li><a href="#" class="nav-link">Kelompok 2</a></li>
                            <li><a href="#" class="nav-link">Kelompok 3</a></li>
                        </ul>
                    </div>
                </li>
                <ul class="nav nav-pills flex-column">
            </ul>
            </ul>
        </nav>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection