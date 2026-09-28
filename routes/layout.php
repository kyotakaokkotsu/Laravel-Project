<?php

use Illuminate\Support\Facades\Route;

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
