@extends('layouts/mainAdmin')
@section('title', "Jenis KKN")
@section('artikel')

    <div class="dashboard-title"><b>JENIS KULIAH KERJA NYATA (KKN)</b></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: right;">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <a href="{{ route('DokumenController.formtambahKKN')}}" class="btn" style="background-color: #1A5319; color: white;">
                            <i class="bi bi-plus-square"></i> Tambah Jenis KKN
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
                                <th class="text-center">Jenis KKN</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Wilayah KKN</th>
                                <th class="text-center">Provinsi</th>
                                <th class="text-center">Kabupaten</th>
                                <th class="text-center">Kecamatan</th>
                                <th class="text-center">Kelurahan/Desa</th>
                                <th class="text-center">Tanggal Mulai</th>
                                <th class="text-center">Tanggal Selesai</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokumens as $dokumen)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration}}</td> 
                                    <td class="text-center">{{ $dokumen->Jenis}}</td>
                                    <td class="text-center">{{ $dokumen->Deskripsi}}</td>
                                    <td class="text-center">{{ $dokumen->Wilayah}}</td>
                                    <td class="text-center">{{ $dokumen->Provinsi}}</td>   
                                    <td class="text-center">{{ $dokumen->Kabupaten}}</td>
                                    <td class="text-center">{{ $dokumen->Kecamatan}}</td>
                                    <td class="text-center">{{ $dokumen->Kelurahan}}</td>
                                    <td class="text-center">{{ $dokumen->Tanggal_mulai}}</td>   
                                    <td class="text-center">{{ $dokumen->Tanggal_selesai}}</td>  
                                    <td class="text-center">
                                        <a href="{{ route('DokumenController.formtambahkelompok', $dokumen->id_kkn) }}" class="btn" style="background-color: #1A5319; color: white;"><i class="bi bi-eye-fill"></i></a>
                                        <form action="{{ route('DokumenController.deleteKKN', $dokumen->id_kkn) }}" method="POST" style="display: inline;">
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
    </div>
@endsection