@extends('layouts/mainDosen')
@section('title', "Data Dosen")
@section('artikel')

    <style>
        .dashboard-title 
        {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1A5319;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>

    <div class="dashboard-title">DATA DOSEN</div>
        <main class="container">
            <div class="row">
                <div class="col-12 py-5" style="text-align: right;">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <a href="/datadosen/formtambahdosen" class="btn" style="background-color: #1A5319; color: white;">
                                    <i class="bi bi-plus-square"></i> Tambah Data Dosen
                                </a>
                            </div>
                        <div class="card-body">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Dosen</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">NO.HP</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Fakultas</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Kleompok 1</td>
                                    <td class="text-center">XX</td>
                                    <td class="text-center">KKN Reguler</td>
                                    <td class="text-center">Gunung Kidul</td>
                                    <td class="text-center">Gunung Kidul</td>
                                </tr>
                        </table>
                        </div>
                    </div>
                </div>
        </main>
        

@endsection