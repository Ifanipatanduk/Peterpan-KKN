@extends('layouts/mainAdmin')
@section('title', "Nilai KKN Kelompok")
@section('artikel')

    <div class="dashboard-title">Nilai KKN</div>
    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <div class="row">
                
                <div class="col-12">
                <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nim</th>
                        <th class="text-center">Nama Mahasiswa</th>
                        <th class="text-center">Nilai</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggotaKelompok as $anggota)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $anggota->nim }}</td>
                            <td class="text-center">{{ $anggota->mahasiswa->Nama }}</td>
                            <td class="text-center">{{ $anggota->Nilai }}</td>
                            <td class="text-center">
                                <a href="{{ route('DokumenController.formNilai', $anggota->nim) }}" class="btn" style="background-color:#1A5319; color: white;">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
