@extends('layouts/mainMahasiswa')
@section('title', "Laporan Kegiatan")
@section('artikel')

<div class="dashboard-title">LAPORAN KEGIATAN</div>

    <main class="container border">
        <div class="row">
            <div class="col-12 py-5">
                <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Dokumen</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">Laporan</td>
                            <td class="text-center">
                                <button type="submit" class="btn" style="background-color:#1A5319; color: white; height: 40px; width: 80px; border-radius: 5px;">Lihat</button>                      
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </main>

@endsection
