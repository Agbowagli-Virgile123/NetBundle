<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/netbundlemtn', function () {
    return view('pages.networks.mtn');
});

Route::get('/netbundleat', function () {
    return view('pages.networks.at');
});
