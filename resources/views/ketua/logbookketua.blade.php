@extends('layouts/mainKetua')
@section('title', "Logbook Kegiatan")
@section('artikel')

<div class="dashboard-title text-center mb-4">LOGBOOK KEGIATAN</div>

    <main class="container ">
        <div class="row">
            <div class="col-12 py-5" style="text-align: right;">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <a href="/logbookketua/formlogbook" class="btn" style="background-color: #347928; color: white;">
                            <i class="bi bi-plus-square"></i> Tambah Logbook 
                        </a>
                    </div>

                        <div class="card-body">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Kegiatan</th>
                                        <th class="text-center">Tanggal Mulai</th>
                                        <th class="text-center">Tanggal Selesai</th>
                                        <th class="text-center">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Koordinasi RT</td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="textare"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Koordinasi RT</td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="textare"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">Koordinasi RT</td>
                                        <td class="date"></td>
                                        <td class="date"></td>
                                        <td class="textare"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </main>

@endsection
