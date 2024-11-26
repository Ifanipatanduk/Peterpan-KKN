@extends('layouts/mainDosen')
@section('title', "Kelompok KKN")
@section('artikel')

    <div class="dashboard-title">DAFTAR KELOMPOKK BIMBINGAN KKN</div>
        <main class="container border">
            <div class="row">
                <div class="col-12 py-5">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Kelompok</th>
                            <th class="text-center">Nama Ketua Kelompok</th>
                            <th class="text-center">Jenis KKN</th>
                            <th class="text-center">Lokasi KKN</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Kleompok 1</td>
                                <td class="text-center">XX</td>
                                <td class="text-center">KKN Reguler</td>
                                <td class="text-center">Gunung Kidul</td>
                                <td class="text-center">
                                    <button type="submit" class="btn" style="background-color:#1A5319; color: white; height: 40px; width: 80px; border-radius: 5px;">Lihat</button>                      
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </main>

@endsection