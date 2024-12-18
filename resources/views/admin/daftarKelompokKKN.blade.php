@extends('layouts/mainAdmin')
@section('title', "Data Kelompok KKN")
@section('artikel')

    <style>
        .dashboard-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1A5319;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>

    <div class="dashboard-title">DATA KELOMPOK KKN</div>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12 py-5" style="text-align: right;">
                <div class="card shadow-sm">
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
                                    <th class="text-center">Nama Kelompok</th>
                                    <th class="text-center">Jenis KKN</th>
                                    <th class="text-center">Nama Pembimbing</th>
                                    <th class="text-center">Nama Ketua</th>
                                    <th class="text-center">Wilayah</th>
                                    <th class="text-center">Provinsi</th>
                                    <th class="text-center">Kabupaten</th>
                                    <th class="text-center">Kecamatan</th>
                                    <th class="text-center">Kelurahan</th>
                                    <th class="text-center">Daftar Anggota Kelompok</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($dokumens as $dokumen)
                                <tr>
                                    <td class="text-center"> {{$loop->iteration}} </td>
                                    <td class="text-center">{{ $dokumen->Nama }}</td>
                                    <td class="text-center">{{ $dokumen->Jenis }}</td>
                                    <td class="text-center">{{ $dokumen->Nama_dosen }}</td>
                                    <td class="text-center">{{ $dokumen->Nama_mahasiswa }}</td>
                                    <td class="text-center">{{ $dokumen->Wilayah }}</td>
                                    <td class="text-center">{{ $dokumen->Provinsi }}</td>
                                    <td class="text-center">{{ $dokumen->Kabupaten }}</td>
                                    <td class="text-center">{{ $dokumen->Kecamatan }}</td>
                                    <td class="text-center">{{ $dokumen->Kelurahan }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('DokumenController.dataAnggotaKelompok', $dokumen->id_kelompok) }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                        <a href="{{ route('DokumenController.formtambahanggota', $dokumen->id_kelompok) }}" class="btn btn-success"><i class="bi bi-plus-square"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="btn" style="background-color: #ffc107; color: white;"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route('DokumenController.deleteDaftarKelompokKKN', $dokumen->id_kelompok) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" 
                                                    onclick="return confirm('Apakah anda yakin menghapus Data Kelompok KKN?')">
                                                <i class="bi bi-trash-fill"></i>
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
