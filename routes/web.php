<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\JenjangController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'verified', 'admin'])->group(function () {

    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/logouts', [LoginController::class, 'logout'])->name('logouts');

    // jenjang
    Route::resource('jenjang', JenjangController::class);
});

Auth::routes();
