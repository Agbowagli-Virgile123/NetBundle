<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

//Auth Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});



//Website Routes
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


//Admin Cms Routes
Route::middleware(['auth:web'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/users', function(){
        return view('admin.users');
    });

    //Network Routes
    Route::get('/admin/networks', [NetworkController::class, 'index']);
    Route::get('/admin/networks/{network}', [NetworkController::class, 'show']);
    Route::patch('/admin/networks/{network}', [NetworkController::class, 'update']);
    Route::delete('/admin/networks/{network}', [NetworkController::class, 'destroy']);
    Route::post('/admin/networks', [NetworkController::class, 'store']);

    //Package Routes
    Route::get('/admin/packages', [PackageController::class, 'index']);
    Route::get('/admin/packages/{package}', [PackageController::class, 'show']);
    Route::patch('/admin/packages/{package}', [PackageController::class, 'update']);
    Route::delete('/admin/packages/{package}', [PackageController::class, 'destroy']);
    Route::post('/admin/packages', [PackageController::class, 'store']);

    //Agents Routes
    Route::get('/admin/agents', [AgentController::class, 'index']);
    Route::post('/admin/agents', [AgentController::class, 'store']);
});



//Agent Cms Routes
Route::middleware(['auth:agent'])->group(function () {
    Route::get('/agent/dashboard', function () {
        return view('agent.dashboard');
    });
});

