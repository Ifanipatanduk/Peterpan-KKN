@extends('layouts/mainAdmin')
@section('title', "Form Tambah Anggota Kelompok")
@section('artikel')

<style>
    .dashboard-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #1A5319;
        text-align: center;
        margin-bottom: 1rem;
    }

    .custom-table {
        border: 1px solid #1A5319;
        border-radius: 0.375rem;
        width: 100%;
        margin-top: 1rem;
    }

    .custom-table th {
        background-color: #1A5319;
        color: white;
        text-align: center;
        padding: 0.75rem;
    }

    .custom-table td {
        text-align: center;
        padding: 0.75rem;
        border: 1px solid #1A5319;
    }

    .btn-custom {
        background-color: #1A5319;
        color: white;
        border: none;
        border-radius: 0.375rem;
        padding: 0.5rem 1rem;
    }

    .btn-custom:hover {
        background-color: #145214;
    }

    .form-control-custom {
        border: 1px solid #1A5319;
        border-radius: 0.375rem;
        padding: 0.5rem;
    }

    .form-check-label {
        margin-left: 0.5rem;
    }

    .action-btn {
        background: none;
        border: none;
        color: #1A5319;
        cursor: pointer;
    }
</style>

<div class="dashboard-title"><b>Form Tambah Anggota Kelompok</b></div>

<div class="container">
    <div class="row mb-3 align-items-center">
        <div class="col-md-10 d-flex">
            <form action="{{ route('DokumenController.simpanAnggotaKelompok') }}" method="POST" style="width: 100%;">
                @csrf
                

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <input type="hidden" name="id_kelompok" value="{{ $id_kelompok }}">

                <select class="form-select form-control-custom" id="anggotaKelompok" name="nim" style="width: 100%;">
                    <option selected disabled>Pilih Mahasiswa</option>
                    @foreach ($mahasiswalist as $mahasiswa)
                        <option value="{{ $mahasiswa->nim }}">{{ $mahasiswa->Nama }}</option>
                    @endforeach
                </select>
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-custom w-100">Tambah</button>
        </div>
            </form>
    </div>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Mahasiswa</th>
                <th class="text-center">Struktur Organisasi</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($anggotaKelompok as $anggota)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $anggota->mahasiswa->Nama }}</td>
                <td class="text-center">        
                    <div class="form-check">
                        <input type="radio" name="jabatan" value="{{ $anggota->id_anggota }}" class="form-check-input" required
                            @if($anggota->jabatan == 'Ketua Kelompok') checked @endif>
                        <label forn="jabatan" class="form-check-label">Ketua Kelompok</label>
                    </div>
                </td>
                <td class="text-center">
                    <form action="{{ route('DokumenController.hapusAnggotaKelompok', $anggota->id_kelompok) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="nim" value="{{ $anggota->nim }}">
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mt-4 d-flex justify-content-end gap-3">
        <a href="{{ route('DokumenController.dataAnggotaKelompok', ['id_kelompok' => $id_kelompok]) }}" class="btn btn-success">Simpan</a>
    </div>
</div>

@endsection