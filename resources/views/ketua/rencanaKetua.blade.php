@extends('layouts/mainKetua')
@section('title', 'Rencana Kelompok')
@section('artikel')


<div class="dashboard-title">RENCANA KEGIATAN</div>
<main class="container">
    <div class="row">
        <div class="col-12 py-5" style="text-align: right;">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                <a href="{{ route('DokumenController.formrencana') }}" class="btn" style="background-color: #1A5319; color: white;">
                    <i class="bi bi-plus-square"></i> Tambah Rencana
                </a>
                </div>
                
                <div class="card-body">
                @if (session('alert'))
                    <div class="alert alert-warning alert-danger fade show" role="alert">
                        <strong>{{session('alert')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">File</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokumens as $dokumen)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td> 
                                    <td class="text-center">{{ $dokumen->Judul }}</td>
                                    <td class="text-center">{{ $dokumen->Deskripsi }}</td>
                                    <td class="text-center"><a type="{{ asset('storage/' . $dokumen->File) }}" target="_blank">{{ $dokumen->Nama_asli }}</a></td>   
                                    <td class="text-center">
                                        <a href="{{ route('DokumenController.editRencana', $dokumen->id_rencana)}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                        <a href="{{ route('DokumenController.show', $dokumen->id_rencana) }}" target="_blank" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                        <a type="button" class="btn btn-secondary"><i class="bi bi-chat-fill"></i></a>
                                        <form action="{{ route('DokumenController.deleteDokumen', $dokumen->id_rencana) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus rencana ketua?')"><i class="bi bi-trash-fill"></i></button>
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