@extends('layouts/mainKetua')
@section('title', 'Lapooran Kelompok')
@section('artikel')

    <div class="dashboard-title">LAPORAN KEGIATAN</div>

    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="card shadow-sm bg-light">
                <div class="card-body">
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
                                <th class="text-center"></th>
                                <th class="text-center"></th>
                                <th class="text-center"></th>
                                <th class="text-center"></th>
                                <td class="text-center">
                                    <button type="submit" class="btn" style="background-color:#1A5319; color: white; height: 40px; width: 80px; border-radius: 5px;">Lihat</button>      
                                </td>
                            </tr>
                        </body>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </main>

@endsection
