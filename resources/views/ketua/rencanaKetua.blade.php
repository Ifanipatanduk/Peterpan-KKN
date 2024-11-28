@extends('layouts/mainKetua')
@section('title', 'Rencana Kelompok')
@section('artikel')

    <main class="container">
        <div class="row">
            <div class="col-12 py-5" style="text-align: right;">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <a href="/rencanaketua/formrencana" class="btn" style="background-color: #1A5319; color: white;">
                            <i class="bi bi-plus-square"></i> Tambah Rencana
                        </a>
                    </div>
                    
                    <div class="card-body">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama File</th>
                                    <th class="text-center">Action</th>
                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center">1</th>
                                    <th class="text-center">Rencana 1</th>
                                    <td class="text-center">
                                        <button type="submit" class="btn" style="background-color:#1A5319; color: white; height: 40px; width: 80px; border-radius: 5px;">Lihat</button>      
                                        <button type="submit" class="btn btn-danger" style="color: white; height: 40px; width: 80px; border-radius: 5px;">Hapus</button>                            
                                    </td>
                                </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

