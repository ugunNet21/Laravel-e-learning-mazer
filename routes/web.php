<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\AbsensiGuruController;
use App\Http\Controllers\backend\AbsensiSiswaController;
use App\Http\Controllers\backend\ELearningController;
use App\Http\Controllers\backend\GuruController;
use App\Http\Controllers\backend\JawabanController;
use App\Http\Controllers\backend\JenjangController;
use App\Http\Controllers\backend\JurusanController;
use App\Http\Controllers\backend\KelasController;
use App\Http\Controllers\backend\MataPelajaranController;
use App\Http\Controllers\backend\NilaiController;
use App\Http\Controllers\backend\RaportController;
use App\Http\Controllers\backend\SiswaController;
use App\Http\Controllers\backend\SoalController;
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
    Route::resource('guru', GuruController::class);
    Route::resource('e_learning', ELearningController::class);
    Route::resource('soal', SoalController::class);
    Route::resource('jawaban', JawabanController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('nilai', NilaiController::class);
    Route::resource('raports', RaportController::class);
    Route::resource('absensi-guru', AbsensiGuruController::class);
    Route::resource('absensi_siswa', AbsensiSiswaController::class);
});

Auth::routes();
