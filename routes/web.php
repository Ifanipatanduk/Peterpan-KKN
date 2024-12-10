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
Route::get('/dashboardAdmin',[DokumenController::class, 'dashboardAdmin'])->name('DokumenController.dashboardAdmin');
Route::get('/datadosen', [DokumenController::class, 'datadosen'])->name('DokumenController.datadosen');
Route::get('/datadosen/formtambahdosen', [DokumenController::class, 'formtambahdosen'])->name('DokumenController.formtambahdosen');
Route::post('/datadosen/simpandosen', [DokumenController::class, 'simpandosen'])->name('DokumenController.simpandosen');
Route::delete('/delete/datadosen/{id}', [DokumenController::class, 'deletedatadosen'])->name('DokumenController.deletedatadosen');
Route::get('/datamahasiswa', [DokumenController::class, 'datamahasiswa'])->name('DokumenController.datamahasiswa');
Route::get('/datamahasiswa/formtambahmahasiswa', [DokumenController::class, 'formtambahmahasiswa'])->name('DokumenController.formtambahmahasiswa');
Route::post('/datamahasiswa/simpanmahasiswa', [DokumenController::class, 'simpanmahasiswa'])->name('DokumenController.simpanmahasiswa');
Route::delete('/delete/mahasiswa/{id}', [DokumenController::class, 'deletemahasiswa'])->name('DokumenController.deletemahasiswa');
Route::get('/jenisKKN', [DokumenController::class, 'jenisKKN'])->name('DokumenController.jenisKKN');
Route::get('/jenisKKN/formtambahKKN', [DokumenController::class, 'formtambahKKN'])->name('DokumenController.formtambahKKN');
Route::post('/jenisKKN/simpanKKN', [DokumenController::class, 'simpanKKN'])->name('DokumenController.simpanKKN');
Route::delete('/delete/KKN/{id}', [DokumenController::class, 'deleteKKN'])->name('DokumenController.deleteKKN');
Route::get('/jenisKKN/{id}', [DokumenController::class, 'formtambahkelompok'])->name('DokumenController.formtambahkelompok');
Route::get('/kelompokKKN', [DokumenController::class, 'kelompokKKN'])->name('DokumenController.kelompokKKN');
Route::post('/simpan-kelompok', [DokumenController::class, 'simpanDataKelompok'])->name('DokumenController.simpanDataKelompok');



// Route::get('/dataKKN', function () {return view('admin/dataKKN');});
// Route:: get('/formtambahkelompok', function () {return view('admin/formtambahkelompok');});
Route::get('/formtambahanggota', function () {return view('admin/formtambahanggota');});
Route::get('/daftaranggotakelompok', function () {return view('admin/daftaranggotakelompok');});
// Route::get('/datamahasiswa', function () {return view('admin/datamahasiswa');});
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
Route::get('/dashboardketua', [DokumenController::class, 'dashboardketua']) ->name('DokumenController.dashboardketua');
Route::get('/dokumenKetuaKelompok', [DokumenController::class, 'dokumenKetuaKelompok'])->name('DokumenController.dokumenKetuaKelompok');
Route::get('/rencanaKetua', [DokumenController::class, 'rencanaKetua'])->name('DokumenController.rencanaKetua');
Route::get('/rencanaKetua/formrencana', [DokumenController::class, 'formrencana'])->name('DokumenController.formrencana');
Route::post('/rencanaKetua/simpan', [DokumenController::class, 'simpan'])->name('DokumenController.simpan');
Route::get('/dokumen/show/{id}', [DokumenController::class, 'show'])->name('DokumenController.show');
Route::delete('/delete/dokumen/{id}', [DokumenController::class, 'deletedokumen'])->name('DokumenController.deleteDokumen');
Route::get('/laporanketua', [DokumenController::class, 'laporanKetua'])->name('DokumenController.laporanKetua');
Route::get('/laporanKetua/formlaporan', [DokumenController::class, 'formlaporan'])->name('DokumenController.formlaporan');
Route::post('/laporanKetua/simpanLaporan', [DokumenController::class, 'simpanLaporan'])->name('DokumenController.simpanLaporan');
Route::delete('/delete/laporan/{id}', [DokumenController::class, 'deleteLaporan'])->name('DokumenController.deleteLaporan');
Route::get('/logbookketua', [DokumenController::class, 'logbookketua'])->name('DokumenController.logbookketua');
Route::get('/logbookketua/formlogbook', [DokumenController::class, 'formlogbook'])->name('DokumenController.formlogbook');
Route::post('/logbookketua/simpanLogbook', [DokumenController::class, 'simpanlogbook'])->name('DokumenController.simpanlogbook');
Route::delete('/delete/logbook/{id}', [DokumenController::class, 'deleteLogbook'])->name('logbook.delete');
// Route::get('/dashboardketua', function () {return view('ketua/dashboardketua');});


//Mahasiswa/Anggota Kelompok
Route::get('/dashboardAnggota', function () {return view('anggota/dashboardAnggota');});
Route::get('/dokumenAnggota', function () {return view('anggota/dokumenAnggota');});
Route::get('/rencanaAnggota', function () {return view('anggota/rencanaAnggota');});
Route::get('/laporanAnggota', function () {return view('anggota/laporanAnggota');});
Route::get('/logbookAnggota', function () {return view('anggota/logbookAnggota');});






























