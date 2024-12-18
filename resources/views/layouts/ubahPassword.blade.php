<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Password</title>

    <!-- Menyertakan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if (session('info'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('info') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card">
                    <div class="card-header text-center">
                        <h4>Ubah Password</h4>
                    </div>
                    <div class="card-body">
                        <form action="/updateuser" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="password_baru">Password Baru</label>
                                <input type="password" name="password_baru" class="form-control" id="password_baru" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="konfirmasi_password">Konfirmasi Password Baru</label>
                                <input type="password" name="konfirmasi_password" class="form-control" id="konfirmasi_password" required>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skrip JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
