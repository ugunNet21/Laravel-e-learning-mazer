<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::middleware(['auth', 'verified','Admin'])->group(function () {
Route::middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/logouts', [LoginController::class, 'logout'])->name('logouts');
});

Route::get('/dashboard', function () {

})->middleware('isAdmin');


Auth::routes();
