<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes - Kisaran Drive
|--------------------------------------------------------------------------
*/

// Halaman Landing Page Depan (Bisa diakses siapa saja tanpa harus login)
Route::get('/', function () {
    return view('landing'); // Pastikan kode satu halaman penuh kemarin kamu simpan dengan nama 'landing.blade.php'
})->name('landing');

// JALUR KHUSUS PENGGUNA YANG BELUM LOGIN (GUEST)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// JALUR KHUSUS PENGGUNA YANG SUDAH LOGIN (AUTH)
Route::middleware('auth')->group(function () {
    
    // Halaman Utama Panel Dashboard (Aksen Balap/Serat Karbon)
    Route::get('/dashboard', function () {
        return view('dashboard'); // File dashboard.blade.php yang ada tombol "Kelola Mobil" & "Keluar"
    })->name('dashboard');

    // JALUR CRUD MOBIL ADMIN
    Route::get('/admin/cars', [CarController::class, 'index'])->name('admin.cars.index');
    Route::post('/admin/cars', [CarController::class, 'store'])->name('admin.cars.store');
    Route::delete('/admin/cars/{id}', [CarController::class, 'destroy'])->name('admin.cars.destroy');
    
    // JALUR PROSES SEWA MOBIL USER
    Route::get('/rental/create/{car_id}', [CarController::class, 'showRentalForm'])->name('rental.create');
    Route::post('/rental/store', [CarController::class, 'storeRental'])->name('rental.store');
    
    // Proses Keluar Sistem
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});