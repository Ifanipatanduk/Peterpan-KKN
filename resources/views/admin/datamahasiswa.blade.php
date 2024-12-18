@extends('layouts/mainAdmin')
@section('title', "Data KKN")
@section('artikel')

<div class="dashboard-title text-center my-4">
    <b>DATA MAHASISWA</b>
</div>
<main class="container-fluid">
    <div class="row">
        <div class="col-12 py-5 text-end">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <a href="{{ route('DokumenController.formtambahmahasiswa')}}" class="btn" style="background-color: #1A5319; color: white;">
                        <i class="bi bi-plus-square"></i> Tambah Data Mahasiswa
                    </a>
                </div>
                <div class="card-body">
                    <table id="example" class="table" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">NIM</th>
                                <th class="text-center">Nama Lengkap</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Kontak</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Prodi</th>
                                <th class="text-center">Fakultas</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokumens as $dokumen)
                            <tr>
                                <td class="text-center"> {{$loop->iteration}} </td>
                                <td class="text-center"> {{$dokumen->nim}} </td>
                                <td class="text-center"> {{$dokumen->Nama}} </td>
                                <td class="text-center"> {{$dokumen->Email}} </td>
                                <td class="text-center"> {{$dokumen->Kontak}} </td>
                                <td class="text-center"> {{$dokumen->Jenis_kelamin}} </td>
                                <td class="text-center"> {{$dokumen->Prodi}} </td>
                                <td class="text-center"> {{$dokumen->Fakultas}} </td>
                                <td class="text-center">
                                    <a href="{{ route('DokumenController.editMahasiswa', $dokumen->nim)}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                    <form action="{{ route('DokumenController.deletemahasiswa', $dokumen->nim) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data mahasiswa?')"><i class="bi bi-trash-fill"></i></button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
