<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .sidebar 
    {
        background-color: #f8f9fa;
        padding: 1rem;
        min-height: 100vh;
        border: 2px solid #1A5319; 
        border-radius: 0.375rem; 
    }

    .sidebar .btn-toggle-nav a:hover    
    {
        color: #1A5319;
    }

    .dashboard-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #1A5319;
        text-align: center;
        margin-bottom: 1rem;
    }

    #pillNav2 
    {
        border: 2px solid #1A5319;
        border-radius: 0.375rem;
    }

    #pillNav2 {
        --bs-nav-link-color: var(--bs-white);
        --bs-nav-pills-link-active-color: var(--bs-white);         
        --bs-nav-pills-link-active-bg: #1A5319;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#rencana-collapse" aria-expanded="false">
                            Daftar Kelompok
                        </button>
                        <div class="collapse" id="rencana-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="nav-link">Kelompok 1</a></li>
                                <li><a href="#" class="nav-link">Kelompok 2</a></li>
                                <li><a href="#" class="nav-link">Kelompok 3</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <main class="col-md-9 col-lg-10 px-4">
                <div class="dashboard-title">DOKUMEN KELOMPOK</div>
                <ul class="nav nav-pills nav-fill gap-2 p-1 small rounded-5 shadow-sm" id="pillNav2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-5" id="rencana-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="true" aria-controls="rencana">Rencana Kelompok</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="logbook-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" aria-controls="logbook">Logbook Kelompok</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="laporan-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" aria-controls="laporan">Laporan Kelompok</button>
                    </li>
                </ul>

                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="rencana" role="tabpanel" aria-labelledby="rencana-tab">
                        <ul></ul>
                    </div>
                    <div class="tab-pane fade" id="logbook" role="tabpanel" aria-labelledby="logbook-tab">
                        <ul></ul>
                    </div>
                    <div class="tab-pane fade" id="laporan" role="tabpanel" aria-labelledby="laporan-tab">
                        <ul></ul>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>