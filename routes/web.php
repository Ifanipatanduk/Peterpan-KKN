<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portal');
});

Route::get('/login', function () {
    return view('login');
});

//Admin 
Route::get('/dashboardAdmin', function () {return view('admin/dashboardAdmin');});
Route::get('/datadosen', function () {return view('admin/datadosen');});
Route::get('/datadosen/formtambahdosen', function () {return view('admin/formtambahdosen');});
Route::get('/jenisKKN', function () {return view('admin/jenisKKN');});
Route::get('/jenisKKN/formtambahKKN', function () {return view('admin/formtambahKKN');});
Route::get('/dataKKN', function () {return view('admin/dataKKN');});
Route::get('/formtambahkelompok', function () {return view('admin/formtambahkelompok');});
Route::get('/formtambahanggota', function () {return view('admin/formtambahanggota');});
Route::get('/daftaranggotakelompok', function () {return view('admin/daftaranggotakelompok');});
Route::get('/datamahasiswa', function () {return view('admin/datamahasiswa');});
Route::get('/berita', function () {return view('admin/berita');});
Route::get('berita/formberita', function () {return view('admin/formberita');});

//Dosen
Route::get('/dashboarddosen', function () { return view('dosen/dashboardDosen');});
Route::get('/kelompokKKN', function () {return view('dosen/kelompokKKN');});
Route::get('/dokumenKelompokKKN', function () {return view('dosen/dokumenKelompokKKN');});
Route::get('/rencanaKegiatan', function () {return view('dosen/rencanaKegiatan');});
Route::get('/laporanKegiatan', function () {return view('dosen/laporanKegiatan');});
Route::get('/logbookKegiatan', function () {return view('dosen/logbookKegiatan');});
Route::get('/nilaiKKN', function () {return view('dosen/nilaiKKN');});
Route::get('/nilaiKKN/formNilai', function () {return view('dosen/formNilai');});

//Ketua Kelompok
Route::get('/dashboardketua', function () {return view('ketua/dashboardketua');});
Route::get('/dokumenKetuaKelompok', function () {return view('ketua/dokumenKetuaKelompok');});
Route::get('/rencanaKetua', function () {return view('ketua/rencanaKetua');});
Route::get('/rencanaketua/formrencana', function () {return view('ketua/formrencana');});
Route::get('/laporanketua', function () {return view('ketua/laporanketua');});
Route::get('/laporanketua/formlaporan', function () {return view('ketua/formlaporan');});
Route::get('/logbookketua', function () {return view('ketua/logbookketua');});
Route::get('/logbookketua/formlogbook', function () {return view('ketua/formlogbook');});

//Mahasiswa/Anggota Kelompok
Route::get('/dashboardsiswa', function () {return view('anggota/dashboardsiswa');});
Route::get('/dokumenAnggota', function () {return view('anggota/dokumenAnggota');});
Route::get('/rencanaAnggota', function () {return view('anggota/rencanaAnggota');});
Route::get('/laporanAnggota', function () {return view('anggota/laporanAnggota');});
Route::get('/logbookAnggota', function () {return view('anggota/logbookAnggota');});






























