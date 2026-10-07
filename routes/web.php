<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuteController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/rute', [RuteController::class, 'index'])->name('rute.index');

Route::get('/tracking', function () {
    return view('tracking');
})->name('tracking');

Route::get('/tiket-saya', function () {
    return view('tiket');
})->name('tiket.index');