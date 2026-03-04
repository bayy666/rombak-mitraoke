<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/peralatan-kantor', function () {
    return view('peralatan-kantor');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/cabang/jogja', function () {
    return view('cabang.jogja');
})->name('cabang.jogja');

Route::get('/cabang/malang', function () {
    return view('cabang.malang');
})->name('cabang.malang');
