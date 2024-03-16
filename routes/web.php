<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'verified','admin'])->group(function () {
// Route::middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/logouts', [LoginController::class, 'logout'])->name('logouts');
});
// Route::middleware(EnsureTokenIsValid::class)->group(function () {
//     Route::get('/home', [DashboardController::class, 'index'])->name('home');
// });

// Route::get('/dashboard', function () {

// })->middleware('isAdmin');
// Route::get('/home', function () {
//     Route::get('/', [DashboardController::class, 'index'])->name('home');
// })->middleware(EnsureTokenIsValid::class);

Auth::routes();
