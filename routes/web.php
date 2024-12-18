<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomentarDokumenController;

Route::get('/', function () {
    return view('portal');
});


// Route untuk halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboardAdmin', function () {
        return view('admin.dashboardAdmin');
    })->name('admin.dashboardadmin');

    Route::get('/dosen/dashboardDosen', function () {
        return view('dosen.dashboardDosen');
    })->name('dosen.dashboardDosen');

    Route::get('/ketua/dashboardKetua', function () {
        return 'Halaman Ketua';
    })->name('ketua.dashboardKetua');

    // Pastikan route ini sudah ada
    Route::get('/anggota/dashboardAnggota', function () {
        return view('anggota.dashboardAnggota');   // Ganti dengan tampilan yang sesuai
    })->name('anggota.dashboardAnggota');
});



Route::get('/comments', function () { return view('comments/index');});

//UBAH PASSWORD
Route::get('/ubahPassword', [DokumenController::class, 'ubahPassword'])->name('DokumenController.ubahPassword');

//ADMIN
// Route::get('/dashboardAdmin',[DokumenController::class, 'dashboardAdmin'])->name('DokumenController.dashboardAdmin');
Route::get('/semesterAktif', [DokumenController::class, 'semesterAktif'])->name('DokumenController.semesterAktif');
Route::get('/semesterAktif/formSemester', [DokumenController::class, 'formSemester'])->name('DokumenController.formSemester');
Route::post('/semesterAktif/simpanSemester', [DokumenController::class, 'simpanSemester'])->name('DokumenController.simpanSemester');
Route::get("/semesterAktif/edit/{id}", [DokumenController::class, 'editSemester'])->name('DokumenController.editSemester');
Route::post('/semesterAktif/edit/{id}', [DokumenController::class, 'updateSemester'])->name('DokumenController.updateSemester');
Route::delete('/delete/semester/{id}', [DokumenController::class, 'deleteSemester'])->name('DokumenController.deleteSemester');
Route::get('/dokumenKelompokAdmin', [DokumenController::class, 'dokumenKelompokAdmin'])->name('DokumenController.dokumenKelompokAdmin');
Route::get('/datadosen', [DokumenController::class, 'datadosen'])->name('DokumenController.datadosen');
Route::get('/datadosen/formtambahdosen', [DokumenController::class, 'formtambahdosen'])->name('DokumenController.formtambahdosen');
Route::post('/datadosen/simpandosen', [DokumenController::class, 'simpandosen'])->name('DokumenController.simpandosen');
Route::get("/datadosen/edit/{id}", [DokumenController::class, 'editDosen'])->name('DokumenController.editDosen');
Route::post('/datadosen/edit/{id}', [DokumenController::class, 'updateDosen'])->name('DokumenController.updateDosen');
Route::delete('/delete/datadosen/{id}', [DokumenController::class, 'deletedatadosen'])->name('DokumenController.deletedatadosen');
Route::get('/datamahasiswa', [DokumenController::class, 'datamahasiswa'])->name('DokumenController.datamahasiswa');
Route::get('/datamahasiswa/formtambahmahasiswa', [DokumenController::class, 'formtambahmahasiswa'])->name('DokumenController.formtambahmahasiswa');
Route::post('/datamahasiswa/simpanmahasiswa', [DokumenController::class, 'simpanmahasiswa'])->name('DokumenController.simpanmahasiswa');
Route::get("/datamahasiswa/edit/{id}", [DokumenController::class, 'editMahasiswa'])->name('DokumenController.editMahasiswa');
Route::post('/datamahasiswa/edit/{id}', [DokumenController::class, 'updateMahasiswa'])->name('DokumenController.updateMahasiswa');
Route::delete('/delete/mahasiswa/{id}', [DokumenController::class, 'deletemahasiswa'])->name('DokumenController.deletemahasiswa');
Route::get('/jenisKKN', [DokumenController::class, 'jenisKKN'])->name('DokumenController.jenisKKN');
Route::get('/jenisKKN/formtambahKKN', [DokumenController::class, 'formtambahKKN'])->name('DokumenController.formtambahKKN');
Route::post('/jenisKKN/simpanKKN', [DokumenController::class, 'simpanKKN'])->name('DokumenController.simpanKKN');
// Route::get("/jenisKKN/edit/{id}", [DokumenController::class, 'editJenisKKN'])->name('DokumenController.editJenisKKN');
// Route::post('/jenisKKN/edit/{id}', [DokumenController::class, 'updateJenisKKN'])->name('DokumenController.update');
Route::delete('/delete/KKN/{id}', [DokumenController::class, 'deleteKKN'])->name('DokumenController.deleteKKN');
Route::get('/jenisKKN/{id}', [DokumenController::class, 'formtambahkelompok'])->name('DokumenController.formtambahkelompok');
Route::get('/daftarKelompokKKN', [DokumenController::class, 'daftarKelompokKKN'])->name('DokumenController.daftarKelompokKKN');
Route::post('/daftarKelompokKKN/simpanDaftarKelompokKKN', [DokumenController::class, 'simpanDaftarKelompokKKN'])->name('DokumenController.simpanDaftarKelompokKKN');
Route::delete('/delete/Daftar/Kelompok/KKN/{id}', [DokumenController::class, 'deleteDaftarKelompokKKN'])->name('DokumenController.deleteDaftarKelompokKKN');
Route::get('/daftar/kelompok-kkn', [DokumenController::class, 'daftarKelompokKKN'])->name('DokumenController.daftarKelompokKKN');
Route::get('/dataAnggotaKelompok/{id_kelompok}', [DokumenController::class, 'showDataAnggotaKelompok'])->name('DokumenController.dataAnggotaKelompok');
Route::get('/formTambahAnggota/{id}', [DokumenController::class, 'formtambahanggota'])->name('DokumenController.formtambahanggota');
Route::post('/simpan-anggota-kelompok', [DokumenController::class, 'simpanAnggotaKelompok'])->name('DokumenController.simpanAnggotaKelompok');
Route::delete('/hapus-anggota/{id_kelompok}', [DokumenController::class, 'hapusAnggotaKelompok'])->name('DokumenController.hapusAnggotaKelompok');
Route::get('/dokumenKelompokAdmin', function () { return view('admin/dokumenKelompokAdmin'); });
Route::get('/kelompok/{id_kelompok}/anggota', [DokumenController::class, 'daftarAnggotaKelompok'])->name('DokumenController.daftarAnggotaKelompok');
Route::get('/berita', function () {return view('admin/berita');});
Route::get('berita/formberita', function () {return view('admin/formberita');});


//DOSEN
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


// KETUA KELOMPOK
Route::get('/dashboardketua', [DokumenController::class, 'dashboardketua'])->name('DokumenController.dashboardketua');
Route::get('/dokumenKetuaKelompok', [DokumenController::class, 'dokumenKetuaKelompok'])->name('DokumenController.dokumenKetuaKelompok');
Route::get('/rencanaKetua', [DokumenController::class, 'rencanaKetua'])->name('DokumenController.rencanaKetua');
Route::get('/rencanaKetua/formrencana', [DokumenController::class, 'formrencana'])->name('DokumenController.formrencana');
Route::post('/rencanaKetua/simpan', [DokumenController::class, 'simpan'])->name('DokumenController.simpan');
Route::get('/rencanaKetua/edit/{id}', [DokumenController::class, 'editRencana'])->name('DokumenController.editRencana');
Route::post('/rencanaKetua/update/{id}', [DokumenController::class, 'updateRencana'])->name('DokumenController.updateRencana');
Route::delete('/rencanaKetua/delete/{id}', [DokumenController::class, 'deleteRencana'])->name('DokumenController.deleteRencana');
Route::get('/laporanKetua/formlaporan', [DokumenController::class, 'formlaporan'])->name('DokumenController.formlaporan');
Route::post('/laporanKetua/simpanLaporan', [DokumenController::class, 'simpanLaporan'])->name('DokumenController.simpanLaporan');
Route::get('/laporanKetua/edit/{id}', [DokumenController::class, 'editLaporan'])->name('DokumenController.editLaporan');
Route::post('/laporanKetua/update/{id}', [DokumenController::class, 'updateLaporan'])->name('DokumenController.updateLaporan');
Route::delete('/laporanKetua/delete/{id}', [DokumenController::class, 'deleteLaporan'])->name('DokumenController.deleteLaporan');
Route::get('/logbookketua', [DokumenController::class, 'logbookketua'])->name('DokumenController.logbookketua');
Route::get('/logbookketua/formlogbook', [DokumenController::class, 'formlogbook'])->name('DokumenController.formlogbook');
Route::post('/logbookketua/simpanLogbook', [DokumenController::class, 'simpanLogbook'])->name('DokumenController.simpanLogbook');
Route::get('/logbookketua/edit/{id}', [DokumenController::class, 'editLogbook'])->name('DokumenController.editLogbook');
Route::post('/logbookketua/update/{id}', [DokumenController::class, 'updateLogbook'])->name('DokumenController.updateLogbook');
Route::get('/dokumen/show/{id}', [DokumenController::class, 'show'])->name('DokumenController.show');
Route::delete('/logbookKetua/delete/{id}', [DokumenController::class, 'deleteLogbook'])->name('DokumenController.deleteLogbook');


//MAHASISWA/ANGGOTA KELOMPOK
Route::get('/dashboardAnggota', [DokumenController::class, 'dashboardAnggota'])->name('DokumenController.dashboardAnggota');
Route::get('/dokumenAnggotaKelompok', [DokumenController::class, 'dokumenAnggotaKelompok'])->name('DokumenController.dokumenAnggotaKelompok');

Route::get('/dashboardAnggota', function () {return view('anggota/dashboardAnggota');});
Route::get('/dokumenAnggota', function () {return view('anggota/dokumenAnggota');});
Route::get('/rencanaAnggota', function () {return view('anggota/rencanaAnggota');});
Route::get('/laporanAnggota', function () {return view('anggota/laporanAnggota');});
Route::get('/logbookAnggota', function () {return view('anggota/logbookAnggota');});

Route::get('/postingan', function () {return view('postingan/createpostingan');});
Route::get('/index', [DokumenController::class, 'index'])->name('DokumenController.index');
Route::get('/index/createpostingan', [DokumenController::class, 'createpostingan'])->name('DokumenController.createpostingan');
Route::get('/index', function () {return view('postingan/index');});
Route::get('/komentar', [DokumenController::class, 'komentar'])->name('DokumenController.komentar');































