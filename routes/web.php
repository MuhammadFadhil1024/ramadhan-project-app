<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/surah', function () {
    return view('al-quran.index');
});
