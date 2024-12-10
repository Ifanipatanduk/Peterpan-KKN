@extends('layouts/mainAdmin')
@section('title',"Dashboard Admin")
@section('artikel')

<div class="dashboard-title"><b>DASHBOARD ADMIN </b></div>
    <div class="icon-container">
        <div class="text-center">
            <a href="/" class="nav-link fw-bold">
                <img src="{{ asset('asset/Icon Folder.png') }}" alt="Nilai" class="mb-2" style="height: 120px; width: 120px;">
                <p>SEMESTER AKTIF</p>
            </a>
        </div>

        <div class="text-center">
            <a href="/datadosen" class="nav-link fw-bold">
                <img src="{{ asset('asset/Icon folders.png') }}" alt="Kelompok KKN" class="mb-2" style="height: 120px; width: 120px;">
                <p>DATA DOSEN</p>
            </a>
        </div>

        <div class="text-center">
            <a href="/jenisKKN" class="nav-link fw-bold">
                <img src="{{ asset('asset/nilai.png') }}" alt="Dokumen Kegiatan" class="mb-2" style="height: 120px; width: 120px;">
                <p>JENIS KKN</p>
            </a>
        </div>

        <div class="text-center">
            <a href="/datamahasiswa" class="nav-link fw-bold">
                <img src="{{ asset('asset/youth.png') }}" alt="Kelompok KKN" class="mb-2" style="height: 120px; width: 120px;">
                <p>DATA MAHASISWA</p>
            </a>
        </div>

        <div class="text-center">
            <a href="/dokumenKelompokKKN" class="nav-link fw-bold">
                <img src="{{ asset('asset/chart.png') }}" alt="Dokumen Kegiatan" class="mb-2" style="height: 120px; width: 120px;">
                <p>DOKUMEN KEGIATAN</p>
            </a>
        </div>

        <div class="text-center">
            <a href="/berita" class="nav-link fw-bold">
                <img src="{{ asset('asset/nilai.png') }}" alt="Nilai" class="mb-2" style="height: 120px; width: 120px;">
                <p>BERITA</p>
            </a>
        </div>
    </div>
@endsection