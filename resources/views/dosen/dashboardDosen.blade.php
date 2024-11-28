@extends('layouts/mainDosen') 
@section('title', "Dashboard Dosen") 
@section('artikel')

    <div class="dashboard-title text-center"><b>DASHBOARD DOSEN</b></div>

        <div class="d-flex justify-content-center mt-4"> 
        <div class="text-center mx-3">
            <a href="/kelompokKKN" class="nav-link fw-bold">
                <img src="{{ asset('asset/youth.png') }}" alt="Kelompok KKN" class="mb-2" style="height: 120px; width: 120px;">
                <p>DATA MAHASISWA</p>
            </a>
        </div>

        <div class="text-center mx-3">
            <a href="/dokumenKelompokKKN" class="nav-link fw-bold">
                <img src="{{ asset('asset/chart.png') }}" alt="Dokumen Kegiatan" class="mb-2" style="height: 120px; width: 120px;">
                <p>DOKUMEN KEGIATAN</p>
            </a>
        </div>

        <div class="text-center mx-3">
            <a href="/nilaiKKN" class="nav-link fw-bold">
                <img src="{{ asset('asset/nilai.png') }}" alt="Dokumen Kegiatan" class="mb-2" style="height: 120px; width: 120px;">
                <p>NILAI</p>
            </a>
        </div>
    </div>

@endsection
