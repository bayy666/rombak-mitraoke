<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/peralatan-kantor', function () {
    return view('peralatan-kantor');
});

Route::get('/landing', function () {
    return view('landing');
});
