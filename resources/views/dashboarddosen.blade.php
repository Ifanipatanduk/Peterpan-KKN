@extends('layouts/mainDosen')
@section('title',"Dashboard Dosen")
@section('artikel')

    <div class="dashboard-title"><b>DASHBOARD DOSEN </b></div>

    <div class="icon-container">
        <div>
            <img src="{{ asset('asset/youth.png') }}" alt="Dokumen Kegiatan">
            <p>KELOMPOK KKN</p>
        </div>
        <div>
            <img src="{{ asset('asset/chart.png') }}" alt="Kelompok KKN">
            <p>KELOMPOK KKN</p>
        </div>
        <div>
            <img src="{{ asset('asset/nilai.png') }}" alt="Nilai">
            <p>NILAI</p>
        </div>
    </div>


@endsection
