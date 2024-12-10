@extends('layouts/mainKetua')
@section('title', "Dokumen Ketua Kelompok")
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
            --bs-nav-link-color: var(--bs-white);
            --bs-nav-pills-link-active-color: var(--bs-white);         
            --bs-nav-pills-link-active-bg: #1A5319;
            color: #1A5319;
            background-color: #fff;
            border-radius: 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        #pillNav2 .nav-link.active {
            color: #fff;
            background-color: #1A5319;
        }

        .tab-content ul {
            list-style: none;
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 col-lg-10 mx-auto px-4">
                <div class="dashboard-title">DOKUMEN KELOMPOK</div>
                <ul class="nav nav-pills nav-fill gap-2 p-1 small rounded-5 shadow-sm" id="pillNav2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button 
                            class="nav-link active" id="rencana-tab" data-bs-toggle="tab" data-bs-target="#rencana"  type="button"  role="tab" aria-controls="rencana" aria-selected="true">
                            Rencana Kelompok
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="logbook-tab" data-bs-toggle="tab" data-bs-target="#logbook"  type="button" role="tab"  aria-controls="logbook"  aria-selected="false">
                            Logbook Kelompok
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button  class="nav-link" id="laporan-tab" data-bs-toggle="tab" data-bs-target="#laporan" type="button" role="tab" aria-controls="laporan" aria-selected="false">
                            Laporan Kelompok
                        </button>
                    </li>
                </ul>

                <div class="tab-pane fade show active" id="rencana" role="tabpanel" aria-labelledby="rencana-tab">
                    @include('ketua.rencanaKetua')
                </div>

                <div class="tab-pane fade" id="logbook" role="tabpanel" aria-labelledby="logbook-tab">
                    @include('ketua.logbookketua')
                </div>

                <div class="tab-pane fade" id="laporan" role="tabpanel" aria-labelledby="laporan-tab">
                    @include('ketua.laporanketua')
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection