@extends('layouts/mainKetua')
@section('title', 'Logbook Kegiatan')
@section('artikel')

<div class="dashboard-title">LOGBOK KEGIATAN</div>
<main class="container">
    <div class="row">
        <div class="col-12 py-5" style="text-align: right;">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <a href="{{ route('DokumenController.formlogbook') }}" class="btn" style="background-color: #1A5319; color: white;">
                        <i class="bi bi-plus-square"></i> Tambah Logbook
                    </a>
                </div>
                
                <div class="card-body">
                @if (session('alert'))
                    <div class="alert alert-warning alert-danger fade show" role="alert">
                        <strong>{{ session('alert') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal Kegiatan</th>
                                <th class="text-center">Waktu Mulai</th>
                                <th class="text-center">Waktu Selesai</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokumens as $dokumen)
                                <tr>
                                <th class="text-center">{{ $loop->iteration}}</th>
                                <td class="text-center">{{ $dokumen->Tanggal_kegiatan }}</td>
                                <td class="text-center">{{ $dokumen->Waktu_mulai }}</td>
                                <td class="text-center">{{ $dokumen->Waktu_selesai }}</td>
                                <td class="text-center">{{ $dokumen->Deskripsi }}</td>
                                <td class="text-center">
                                <a href="{{ route('DokumenController.editLogbook', $dokumen->id_logbook)}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('logbook.delete', $dokumen->id_logbook) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                                </td>
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
