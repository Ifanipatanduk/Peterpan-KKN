@extends('layouts/mainKetua')
@section('title',"Dashboard Ketua Kelompok")
@section('artikel')

    <div class="dashboard-title"><b>DASHBOARD KETUA KELOMPOK</b></div>

    <div class="text-center">
            <a href="/dokumenKetuaKelompok" class="nav-link fw-bold">
                <img src="{{ asset('asset/chart.png') }}" alt="Dokumen Kegiatan" class="mb-2" style="height: 120px; width: 120px;">
                <p>DOKUMEN KEGIATAN</p>
            </a>
        </div>

@endsection