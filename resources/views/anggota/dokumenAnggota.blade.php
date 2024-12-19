    @extends('layouts/mainMahasiswa')
    @section('title', 'Dokumen Anggota Kelompok')
    @section('artikel')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        .dashboard-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1A5319;
            text-align: center;
            margin-bottom: 1rem;
        }

        #pillNav2 {
            display: flex; 
            justify-content: center;
            align-items: center; 
            border: 2px solid #1A5319;
            border-radius: 0.375rem;
            padding: 0.5rem; 
            gap: 1rem;
        }

        #pillNav2 .nav-link {
            color: #1A5319;
            background-color: #fff;
            border-radius: 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        #pillNav2 .nav-link.active {
            color: #fff;
            background-color: #1A5319;
        }

        .tab-content {
            padding: 1rem;
        }

        table {
            width: 100%;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 col-lg-10 mx-auto px-4">
                <div class="dashboard-title">DOKUMEN KELOMPOK</div>
                
                <!-- Nav Tabs -->
                <ul class="nav nav-pills nav-fill gap-2 p-1 small rounded-5 shadow-sm" id="pillNav2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="rencana-tab" data-bs-toggle="tab" data-bs-target="#rencanaketua" type="button" role="tab" aria-controls="rencanaketua" aria-selected="true">
                            Rencana Kelompok
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="logbook-tab" data-bs-toggle="tab" data-bs-target="#logbook" type="button" role="tab" aria-controls="logbook" aria-selected="false">
                            Logbook Kelompok
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="laporan-tab" data-bs-toggle="tab" data-bs-target="#laporan" type="button" role="tab" aria-controls="laporan" aria-selected="false">
                            Laporan Kelompok
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- Rencana Kelompok -->
                    <div class="tab-pane fade show active" id="rencanaketua" role="tabpanel" aria-labelledby="rencana-tab">
                        <div class="card shadow-sm mt-3">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($rencanas as $rencana)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $rencana->Judul }}</td>
                                            <td class="text-center">{{ $rencana->Deskripsi }}</td>
                                            <td class="text-center"><a type="{{ asset('storage/' . $rencana->File) }}" target="_blank">{{ $rencana->Nama_asli }}</a></td>
                                            <td class="text-center">
                                                <a href="{{ route('DokumenController.show', $rencana->id_rencana) }}" target="_blank" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="logbook" role="tabpanel" aria-labelledby="logbook-tab">
                        <div class="card shadow-sm mt-3" >
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">Waktu Mulai</th>
                                            <th class="text-center">Waktu Selesai</th>
                                            <th class="text-center">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($logbooks as $logbook)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $logbook->Tanggal_kegiatan }}</td>
                                            <td class="text-center">{{ $logbook->Waktu_mulai }}</td>
                                            <td class="text-center">{{ $logbook->Waktu_selesai }}</td>
                                            <td class="text-center">{{ $logbook->Deskripsi }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Laporan Kelompok -->
                    <div class="tab-pane fade" id="laporan" role="tabpanel" aria-labelledby="laporan-tab">
                        <div class="card shadow-sm mt-3">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Laporan</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">File</th>
                                        </tr>
                                    </thead>
                                    <tbody>			
                                        @foreach ($laporans as $laporan)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $laporan->Judul }}</td>
                                                <td class="text-center">{{ $laporan->Deskripsi }}</td>
                                                <td class="text-center"><a type="{{ asset('storage/' . $laporan->File) }}" target="_blank">{{ $laporan->Nama_asli }}</a></td>
                                                <td class="text-center">
                                                    <a href="{{ route('DokumenController.show', $laporan->id_laporan) }}" target="_blank" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
