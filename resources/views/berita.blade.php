@extends('layouts/mainAdmin')
@section('title',"Daftar Berita")
@section('artikel')
    <div class="card">
        <div class="class-header" style="text-align: right;">
            <a href="/berita/formberita" class="btn" style="background-color: #347928; color: white;">
                <i class="bi bi-plus-square"></i> Tambah Berita
            </a>
        </div>

                <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Berita</th>
                                <th>Isi Berita</th>
                                <th>Foto</th>
                                <th>Tanggal posting</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ulang Tahun UKDW</td>
                                <td>UKDW merayakan ulant tahun yang ke-xx pada tanggal 31 oktober</td>
                                <td></td>
                                <td>31-10-2024</td>
                                <td>
                                    <button type="submit" class="btn" style="background-color: #1230AE; color: white; height: 40px; width: 80px; border-radius: 5px">Posting</button>
                                    <button type="submit" class="btn" style="background-color: #1A5319; color: white; height: 40px; width: 80px; border-radius: 5px">Edit</button> 
                                    <button type="submit" class="btn" style="background-color: #C62E2E; color: white; height: 40px; width: 80px; border-radius: 5px">Hapus</button> 
                                </td>
                            </tr>
                </table>
    </div>
@endsection
