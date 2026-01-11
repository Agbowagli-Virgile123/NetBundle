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

Route::get('/netbundletelecel', function () {
    return view('pages.networks.telecel');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/apply-agent', function () {
    return view('pages.agent');
});

Route::get('/how-it-works', function () {
    return view('pages.howitworks');
});

Route::get('/faq', function () {
    return view('pages.faq');
});

Route::get('/privacy', function () {
    return view('pages.privacy');
});

Route::get('/terms', function () {
    return view('pages.terms');
});

Route::get('/refund', function () {
    return view('pages.refund');
});

//Login Route
Route::get('/login', function () {
    return view('auth.login');
})->name('login');


// Route::get('/admin', function () {
//     return view('admin.dashboard');
// })->middleware('auth')->name('admin.dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
