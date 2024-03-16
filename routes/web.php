<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\JenjangController;
use App\Http\Controllers\backend\JurusanController;
use App\Http\Controllers\backend\KelasController;
use App\Http\Controllers\backend\MataPelajaranController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'verified', 'admin'])->group(function () {

    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/logouts', [LoginController::class, 'logout'])->name('logouts');

    Route::resource('jenjang', JenjangController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('mapel', MataPelajaranController::class);
    Route::resource('kelas_admin', KelasController::class);
});

Auth::routes();
