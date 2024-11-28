@extends('layouts/mainDosen')
@section('title', "Nilai KKN Kelompok")
@section('artikel')

<div class="dashboard-title">Nilai KKN</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <div class="row">
                
                <div class="col-12">
                <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nim</th>
                        <th class="text-center">Nama Mahasiswa</th>
                        <th class="text-center">Nilai</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr>                        
                    <th class="text-center">1</th>
                    <th class="text-center">12345678</th>
                    <th class="text-center">Joe</th>
                    <th class="text-center"></th>
                    <td class="text-center">
                        <a href="/nilaiKKN/formNilai" class="btn" style="background-color:#1A5319; color: white; height: 40px; width: 80px; border-radius: 5px;" >Edit</a>                     
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

@endsection
