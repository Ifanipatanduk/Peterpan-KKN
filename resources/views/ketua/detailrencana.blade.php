@extends('layouts/mainKetua')
@section('title', 'Detail Rencana')
@section('artikel')

<div class="container mt-5">
    <h1>Detail Rencana Kegiatan</h1>
    <div>
        <p><strong>Judul:</strong> {{ $dokumen->Judul }}</p>
        <p><strong>Deskripsi:</strong> {{ $dokumen->Deskripsi }}</p>
        <p><strong>File:</strong> <a href="{{ asset('storage/' . $dokumen->File) }}" target="_blank">Download</a></p>
    </div>
    <a href="{{ route('DokumenController.rencanaKetua') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
