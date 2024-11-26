@extends('layouts/mainKetua')
@section('title', 'Rencana Kelompok')
@section('artikel')

    <div class="dashboard-title">LAPORAN KEGIATAN</div>

    <main class="container border">
        <div class="row">
            <div class="col-12 py-5" style="text-align: right;">
                <a href="/laporanketua/formlaporan" class="btn" style="background-color: #347928; color: white;">
                    <i class="bi bi-plus-square"></i> Tambah Laporan
                </a>
            </div>

                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Laporan</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">File</th>
                            <th class="text-center">Action</th>
        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center">1</th>
                            <th class="text-center">Laporan 1</th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <td class="text-center">
                                <button type="submit" class="btn" style="background-color:#1A5319; color: white; height: 40px; width: 80px; border-radius: 5px;">Lihat</button>      
                                <button type="submit" class="btn btn-danger" style="color: white; height: 40px; width: 80px; border-radius: 5px;">Hapus</button>                            
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">Laporan 2</td>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <td class="text-center">
                                <button type="submit" class="btn" style="background-color: #1A5319; color: white; height: 40px; width: 80px; border-radius: 5px;">Lihat</button>
                                <button type="submit" class="btn btn-danger" style="color: white; height: 40px; width: 80px; border-radius: 5px;">Hapus</button>            
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="text-center">Laporan 3</td>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <td class="text-center">
                                <button type="submit" class="btn" style="background-color: #1A5319; color: white; height: 40px; width: 80px; border-radius: 5px;">Lihat</button>
                                <button type="submit" class="btn btn-danger" style="color: white; height: 40px; width: 80px; border-radius: 5px;">Lihat</button>            
                            </td>
                        </tr>
                </table>

                <p>Catatan Revisi Laporan Kegiatan</p>
            </div>
        </div>
    </main>

@endsection
