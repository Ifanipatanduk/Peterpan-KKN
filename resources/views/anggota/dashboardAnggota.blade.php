@extends('layouts/mainMahasiswa')
@section('title',"Dashboard Mahasiswa")
@section('artikel')

<div class="dashboard-title"><b>DASHBOARD MAHASISWA</b></div>

<div class="icon-container">
    <a href="/dokumenAnggota">
    <img src="{{ asset ('asset/chart.png') }}" alt="Dokumen Kegiatan" height="120"; width="267";>
    </a>
    <p>DOKUMEN KEGIATAN</p>
</div>

@endsection


