    <!-- <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-md-12 vh-100">
                <div class="card mt-4">
                        <div class="card-header"><b></b></div>
                        <div class="card-body">
                            @yield('artikel')
                        </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
        <script>
        new DataTable('#example');
        </script>
    </body>
    </html> -->

    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
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

        .icon-container 
        {
        display: flex;
        justify-content: center; 
        align-items: center;
        flex-wrap: wrap;
        gap: 30px; 

    .icon-container > div 
    {
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
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Akun</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('artikel')
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
    new DataTable('#example');
    </script>

</body>
</html>

