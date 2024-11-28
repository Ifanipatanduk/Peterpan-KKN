@extends('layouts/mainAdmin')
@section('title', "Data KKN")
@section('artikel')
    <style>
        #pillNav2 {
            border: 2px solid #1A5319;
            border-radius: 0.375rem;
        }

        #pillNav2 {
            --bs-nav-link-color: var(--bs-white);
            --bs-nav-pills-link-active-color: var(--bs-white);
            --bs-nav-pills-link-active-bg: #1A5319;
        }

        .dashboard-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1A5319;
            text-align: center;
            margin-bottom: 1rem;
        }

        .text-center {
            text-align: center;
        }
    </style>

    <div class="dashboard-title"><b>DATA KKN REGULER</b></div>  
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow-sm">
                <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Kelompok</th>
                                <th class="text-center">Nama Dosen</th>
                                <th class="text-center">Jenis KKN</th>
                                <th class="text-center">Alamat KKN</th>
                                <th class="text-center">Provinsi</th>
                                <th class="text-center">Kabupaten</th>
                                <th class="text-center">Kecamatan</th>
                                <th class="text-center">Kelurahan/Desa</th>
                                <th class="text-center">Daftar Anggota Kelompok</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Kelompok 1</td>
                                <td class="text-center">Dosen XX</td>
                                <td class="text-center">KKN Reguler</td>
                                <td class="text-center">Gunung Kidul</td>
                                <td class="text-center">Yogyakarta</td>
                                <td class="text-center">Gunung Kidul</td>
                                <td class="text-center">Kecamatan A</td>
                                <td class="text-center">Desa B</td>
                                <td class="text-center">
                                    <button type="button" class="btn"><i class="bi bi-eye-fill"></i></button>
                                    <button type="button" class="btn"><i class="bi bi-person-plus-fill"></i></button>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

