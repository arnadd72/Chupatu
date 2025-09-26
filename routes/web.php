<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Rute untuk halaman utama (landing page) yang bisa diakses semua orang.
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// --- RUTE BARU UNTUK ADMIN ---
// Rute ini hanya bisa diakses oleh user yang:
// 1. Sudah login ('auth')
// 2. Emailnya terverifikasi ('verified')
// 3. DAN rolenya adalah admin ('admin') <-- Middleware baru kita!
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');
// --- AKHIR DARI RUTE ADMIN ---


// Rute untuk halaman profil (berlaku untuk semua user yang login).
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
