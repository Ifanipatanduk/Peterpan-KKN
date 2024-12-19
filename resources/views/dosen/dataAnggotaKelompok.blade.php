@extends('layouts/mainDosen')
@section('title', 'Data Anggota Kelompok')
@section('artikel')

    <style>
        .dashboard-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1A5319;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>

    <div class="dashboard-title">DATA ANGGOTA KELOMPOK</div>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-right">
                <div class="card shadow-sm">
                    <div class="card-header text-center"></div>
                    <div class="card-body">
                        @if (session('alert'))
                            <div class="alert alert-warning alert-danger fade show" role="alert">
                                <strong>{{ session('alert') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <table id="example" class="display w-100">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Mahasiswa</th>
                                    <th class="text-center">Struktur Organisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggotaKelompok as $anggota)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $anggota->mahasiswa->Nama }}</td>
                                        <td class="text-center">{{ $anggota->jabatan ?? 'Anggota Kelompok' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
