@extends('layouts/mainAdmin')
@section('title', "Anggota Kelompok")
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
    }

    .custom-table th {
        background-color: #1A5319;
        color: white;
        text-align: center;
        border: 1px solid #1A5319;
    }

    .custom-table td {
        text-align: center;
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
    }

    .action-btn {
        background: none;
        border: none;
        color: #1A5319;
        cursor: pointer;
    }
</style>

<div class="dashboard-title"><b>Anggota Kelompok</b></div>
<div class="container">
    <div class="row mb-3">
        <div class="col-md-10">
            <label for="dosenPembimbing" class="form-label">Anggota Kelompok</label>
            <select class="form-select" id="dosenPembimbing">
                        <option selected>Pilih Anggota Kelompok</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-custom">Tambah</button>
        </div>
    </div>

    <div class="card">
    <div class="card-body">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Action</th>
                <th class="text-center">Struktur Organisasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">Robin Danuarta</td>
                <td class="text-center">
                    <button type="button" class="btn"><i class="bi bi-trash"></i> Hapus </button>
                <td class="text-center">
                        <div class="form-check me-4">
                            <input type="radio" name="jabatan" id="Ketua Kelompok" value="Ketua Kelompok" class="form-check-input" required>
                            <label for="Ketua Kelompok" class="form-check-label">ketua Kelompok</label>
                        </div>
                    </div>
                </td>
            </tr>   
        </tboody>
    </table>
        <div class="col-12 py-5" style="text-align: right;">
            <button class="btn btn-custom">Simpan</button>
        </div>
    </div>
    </div>
</div>

@endsection
