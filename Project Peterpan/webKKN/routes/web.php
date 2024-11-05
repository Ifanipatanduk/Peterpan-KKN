<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portal');
});

Route::get('/login', function () {
    return view('login');
});
