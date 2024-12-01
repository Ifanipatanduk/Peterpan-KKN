@extends('layouts/mainKetua')
@section('title', 'Laporan Kelompok')
@section('artikel')

    <div class="dashboard-title">LAPORAN KEGIATAN</div>

    <main class="container">
        <div class="row">
            <div class="col-12 py-5" style="text-align: right;">
                <div class="card shadow sm">
                    <div class="card-header bg-light">
                    <a href="{{ route('DokumenController.formlaporan')}}" class="btn" style="background-color: #1A5319; color: white;">
                        <i class="bi bi-plus-square"></i> Tambah Laporan
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
                                <th class="text-center">Nama Laporan</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">File</th>
                                <th class="text-center">Action</th>
            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokumens as $dokumen)
                            <tr>
                                <th class="text-center"> {{ $loop->iteration}} </th>
                                <th class="text-center"> {{ $dokumen->Judul}} </th>
                                <th class="text-center"> {{ $dokumen->Deskripsi}} </th>
                                <td class="text-center"><a type="{{ asset('storage/' . $dokumen->File) }}" target="_blank">{{ $dokumen->nama_asli }}</a></td>
                                <td class="text-center">
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-eye-fill"></i></button>      
                                    <button type="submit" class="btn btn-secondary"><i class="bi bi-chat-fill"></i></button>   
                                    <form action="{{ route('DokumenController.deleteLaporan', $dokumen->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
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
