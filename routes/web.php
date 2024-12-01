<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumenController;

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
// Route::get('/nilaiKKN', function () {return view('dosen/nilaiKKN');});
// Route::get('/nilaiKKN/formNilai', function () {return view('dosen/formNilai');});
Route::get('/nilaiKKN', [DokumenController::class, 'nilaiKKN'])->name('DokumenController.nilaiKKN');
Route::get('/nilaiKKN/formNilai', [DokumenController::class, 'formNilai'])->name('DokumenController.formNilai');
Route::post('/nilaiKKN/simpanNilai', [DokumenController::class, 'simpanNilai'])->name('DokumenController.simpanNilai');

//Ketua Kelompok
Route::get('/dokumen', [DokumenController::class, 'dokumen'])->name('DokumenController.dokumen');
Route::get('/rencanaKetua', [DokumenController::class, 'rencanaKetua'])->name('DokumenController.rencanaKetua');
Route::get('/rencanaKetua/formrencana', [DokumenController::class, 'formrencana'])->name('DokumenController.formrencana');
Route::post('/rencanaKetua/simpan', [DokumenController::class, 'simpan'])->name('DokumenController.simpan');
Route::delete('/delete/dokumen/{id}', [DokumenController::class, 'deletedokumen'])->name('DokumenController.deleteDokumen');
Route::get('/show/{nama_file}', [DokumenController::class, 'show'])->name('DokumenController.show');
Route::get('/laporanketua', [DokumenController::class, 'laporanKetua'])->name('DokumenController.laporanKetua');
Route::get('/laporanKetua/formlaporan', [DokumenController::class, 'formlaporan'])->name('DokumenController.formlaporan');
Route::post('/laporanKetua/simpanLaporan', [DokumenController::class, 'simpanLaporan'])->name('DokumenController.simpanLaporan');
Route::delete('/delete/laporan/{id}', [DokumenController::class, 'deleteLaporan'])->name('DokumenController.deleteLaporan');
// Route::get('/show/{nama_file}', [DokumenController::class, 'show'])->name('DokumenController.show');
Route::get('/logbookketua', [DokumenController::class, 'logbookketua'])->name('DokumenController.logbookketua');
Route::get('/logbookketua/formlogbook', [DokumenController::class, 'formlogbook'])->name('DokumenController.formlogbook');
Route::post('/logbookketua/simpanLogbook', [DokumenController::class, 'simpanlogbook'])->name('DokumenController.simpanlogbook');
Route::delete('/delete/logbook/{id}', [DokumenController::class, 'deleteLogbook'])->name('logbook.delete');

Route::get('/dashboardketua', function () {return view('ketua/dashboardketua');});
Route::get('/dokumenKetuaKelompok', function () {return view('ketua/dokumenKetuaKelompok');});

//Mahasiswa/Anggota Kelompok
Route::get('/dashboardsiswa', function () {return view('anggota/dashboardsiswa');});
Route::get('/dokumenAnggota', function () {return view('anggota/dokumenAnggota');});
Route::get('/rencanaAnggota', function () {return view('anggota/rencanaAnggota');});
Route::get('/laporanAnggota', function () {return view('anggota/laporanAnggota');});
Route::get('/logbookAnggota', function () {return view('anggota/logbookAnggota');});






























