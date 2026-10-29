<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\ProfileController;

// Redirect halaman utama ke login jika belum login, atau ke dashboard jika sudah login
Route::get('/', function () {
    return view('welcome');
})->name('landing');

// Route yang WAJIB Login (Dilindungi Middleware auth)
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('rute', RuteController::class);

    Route::get('/tracking', function () {
        return view('tracking');
    })->name('tracking');

    Route::get('/tiket', function () {
        return view('tiket');
    })->name('tiket');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';