@extends('layouts/mainAdmin')
@section('title', "Daftar Berita")
@section('artikel')

    <div class="dashboard-title text-center mb-4">DAFTAR BERITA</div>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-right">
                        <a href="/berita/formberita" class="btn btn-success">
                            <i class="bi bi-plus-square"></i> Tambah Berita
                        </a>
                    </div>

                    <div class="card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Judul Berita</th>
                                    <th class="text-center">Isi Berita</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Tanggal Posting</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Ulang Tahun UKDW</td>
                                    <td>UKDW merayakan ulang tahun yang ke-xx pada tanggal 31 Oktober</td>
                                    <td class="text-center">
                                        <img src="" alt="Foto Berita" style="height: 50px; width: 50px;">
                                    </td>
                                    <td class="text-center">31-10-2024</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary btn-sm" style="width: 80px;">Posting</a>
                                        <a href="#" class="btn btn-success btn-sm" style="width: 80px;">Edit</a> 
                                        <a href="#" class="btn btn-danger btn-sm" style="width: 80px;">Hapus</a> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
