@extends('layouts/mainMahasiswa')
@section('title', "Laporan Kegiatan")
@section('artikel')

<div class="dashboard-title">LAPORAN KEGIATAN</div>
<!-- 
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
        <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Contact</button>
        </li>
        </ul> -->
        
    <main class="container border">
        <div class="row">
            <div class="col-12 py-5">
                <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Dokumen</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">Laporan</td>
                            <td class="text-center">
                                <button type="submit" class="btn" style="background-color:#1A5319; color: white; height: 40px; width: 80px; border-radius: 5px;">Lihat</button>                      
                            </td>
                        </tr>
                </table>

                <p>Catatan Revisi Laporan Kegiatan</p>
            </div>
        </div>
    </main>

@endsection
