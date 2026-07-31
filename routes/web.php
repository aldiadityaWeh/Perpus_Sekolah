<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DdcController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KelasController;

// 1. ROUTE PUBLIK
Route::get('/', function () { return view('beranda'); })->name('beranda');
Route::get('/tentang', function () { return view('tentang'); })->name('tentang');
Route::get('/absen', function () { return view('absen'); })->name('absen');
Route::get('/koleksi', function () { return view('koleksi'); })->name('koleksi');

// 2. ROUTE AUTH
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('auth.register'); })->name('register');

// 3. ROUTE PANEL ADMIN
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Data Kelas (Resource)
    Route::resource('kelas', KelasController::class);

    // Data Buku
    Route::get('/buku', [BookController::class, 'index'])->name('buku.index');
    Route::get('/buku/create', [BookController::class, 'create'])->name('buku.create');
    Route::post('/buku', [BookController::class, 'store'])->name('buku.store');

    // Kategori Buku
    Route::resource('kategori_buku', KategoriBukuController::class);

    // Data Anggota (Resource)
    Route::resource('anggota', AnggotaController::class);

    // DDC
    Route::get('/ddc', [DdcController::class, 'index'])->name('ddc.index');
    Route::get('/ddc/create', [DdcController::class, 'create'])->name('ddc.create');
    Route::post('/ddc', [DdcController::class, 'store'])->name('ddc.store');

    // Sumber Buku
    Route::get('/sumber-buku', function () { return view('admin.sumber_buku.index'); })->name('sumber_buku.index');
    Route::get('/sumber-buku/create', function () { return view('admin.sumber_buku.create'); })->name('sumber_buku.create');

    // Jenis Buku
    Route::get('/jenis-buku', function () { return view('admin.jenis_buku.index'); })->name('jenis_buku.index');
    Route::get('/jenis-buku/create', function () { return view('admin.jenis_buku.create'); })->name('jenis_buku.create');

    // Transaksi
    Route::get('/transaksi/peminjaman', function () { return view('admin.transaksi.peminjaman'); })->name('transaksi.peminjaman');
    Route::get('/transaksi/pengembalian', function () { return view('admin.transaksi.pengembalian'); })->name('transaksi.pengembalian');

    // Laporan
    Route::prefix('laporan')->name('laporan.')->group(function () {
        Route::get('/anggota', function () { return view('admin.laporan.laporan_anggota.index'); })->name('anggota.index');
        Route::get('/buku', function () { return view('admin.laporan.laporan_buku.index'); })->name('buku.index');
        Route::get('/kas', function () { return view('admin.laporan.laporan_kas.index'); })->name('kas.index');
        Route::get('/pengunjung', function () { return view('admin.laporan.laporan_pengunjung.index'); })->name('pengunjung.index');
    });
});
