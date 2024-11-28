@extends('layouts/mainAdmin')
@section('title', "Data KKN")
@section('artikel')

    <div class="dashboard-title"><b>DATA KKN REGULER</b></div>  
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nim</th>
                                <th class="text-center">Nama Mahasiswa</th>
                                <th class="text-center">Struktur Organisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">72220500</td>
                                <td class="text-center">Robin Danuarta</td>
                                <td class="text-center">Ketua Kelompok</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

