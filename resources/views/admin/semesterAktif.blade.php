@extends('layouts/mainAdmin')
@section('title/Form Tambah Semester')
@section('artikel')
<style>
        .dashboard-title 
        {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1A5319;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>

    <div class="dashboard-title">DATA SEMSTER</div>
        <main class="container">
            <div class="row">
                <div class="col-12 py-5" style="text-align: right;">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <a href="{{ route ('DokumenController.formSemester')}}" class="btn" style="background-color: #1A5319; color: white;">
                                    <i class="bi bi-plus-square"></i> Tambah Semester
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
                                <th class="text-center">Nama Semester</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($semesters as $semester)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration}} </td>
                                    <td class="text-center"> {{ $semester->Nama}} </td>
                                    <td class="text-center"> 
                                        <a href="{{ route('DokumenController.editSemester', $semester->id_semester)}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route('DokumenController.deleteSemester', $semester->id_semester) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data dosen?')">
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
        </main>
    
@endsection