<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::get('/pemesanan/{slug}', [PemesananController::class, 'show'])->name('menu.show');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/toko/pengiriman', [PemesananController::class, 'kirim'])->name('menu.kirim');
Route::get('/pemesanan/{slug}', [PemesananController::class, 'show'])->name('menu.show');
Route::post('/pemesanan/kirim', [PemesananController::class, 'kirim'])->name('pemesanan.kirim');
Route::get('/toko/pengiriman', [PemesananController::class, 'pengiriman'])->name('pengiriman');
Route::get('/toko', [PemesananController::class, 'redirectToPemesanan'])->name('toko.redirect');
Route::match(['get', 'post'], '/toko/struk', [PemesananController::class, 'showStruk'])->name('struk');
Route::get('/pesanbox', [PemesananController::class, 'pesanBox'])->name('pesanbox');
Route::get('/pesanprasmanan', [PemesananController::class, 'pesanPrasmanan'])->name('pesanprasmanan');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');