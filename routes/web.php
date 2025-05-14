<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard.dashboard');
});

Route::get('/docs', function () {
    return view('pages.documentation.documentation');
});
