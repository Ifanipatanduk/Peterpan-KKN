<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portal');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('berita/formberita', function () {
    return view('formberita');
});

Route::get('/dashboardsiswa', function () {
    return view('dashboardsiswa');
});

Route::get('/rencanaKegiatan', function () {
    return view('rencanakegiatan');
});

Route::get('/laporanKegiatan', function () {
    return view('laporankegiatan');
});

Route::get('/logbookKegiatan', function () {
    return view('logbookKegiatan');
});

Route::get('/dashboardketua', function () {
    return view('dashboardketua');
});

Route::get('/rencanaKetua', function () {
    return view('rencanaKetua');
});

Route::get('/laporanketua', function () {
    return view('laporanketua');
});

Route::get('/logbookketua', function () {
    return view('logbookketua');
});

Route::get('/rencanaketua/formrencana', function () {
    return view('formrencana');
});

Route::get('/laporanketua/formlaporan', function () {
    return view('formlaporan');
});

Route::get('/logbookketua/formlogbook', function () {
    return view('formlogbook');
});

Route::get('/dashboarddosen', function () {
    return view('dashboarddosen');
});

Route::get('/kelompokKKN', function () {
    return view('kelompokKKN');
});

Route::get('/dokumenKegiatan', function () {
    return view('dokumenKegiatan');
});

Route::get('/nilaiKKN', function () {
    return view('nilaiKKN');
});

Route::get('/nilaiKKN/formNilai', function () {
    return view('formNilai');
});





